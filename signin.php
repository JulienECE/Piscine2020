<?php require 'header.php'; ?>

<div class="container-fluid text-center">    
  <div class="row content">
  	<!-- Colonne de gauche-->
    

    <!-- Colonne du milieu-->
    <div class="col-sm-12"> 
    	<br>
    	<h3>Bienvenue sur Ebay ECE !</h3>
    
		<?php if(is_logged()):?>
		
			<p> Bienvenue <?=htmlspecialchars($_SESSION['username']) ?> |<a href='testlog.php?action=logout'>Se deconnecter</a></p>

		<?php else:?>
			<br>
			<center>
			
			<form action="testlog.php" method="post" class="formulaire_val">
				<table>
					
    	    		
				<br>
				<tr>
					<input type="text" placeholder="Nom" class="inputbasic firstinput" name="nom"/>
				</tr>
				<br>

				<tr>
					<input type="text" placeholder="Email" class="inputbasic" name="email"/>
				</tr>
				<tr><td><br><input type="submit" name="button" value="Se connecter"/></td></tr>
				</table>
				<br><br><br>
			</form>
		<?php endif;?>
    		
		<center/>
   		
      
	</div>
      
	
</div>
</div>




	<!--Footer-->
	<?php require 'footer.php'; ?>