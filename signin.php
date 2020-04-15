<?php require 'header.php'; ?>

<div class="container-fluid text-center">    
  <div class="row content">
  	<!-- Colonne de gauche-->
    <div class="col-sm-1 sidenav"></div>

    <!-- Colonne du milieu-->
    <div class="col-sm-8"> 
    	<h3 align="left">Bienvenue sur Ebay ECE !</h3>
    	<h5 align="left">Nos meilleures ventes : </h5>
    	<div class="row">
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
				<tr>
					<input type="text" placeholder="Email" class="inputbasic" name="email"/>
				</tr>
				<br>
					<input type="submit" name="button" value="valider"/>
				</table>
			</form>
		<?php endif;?>
    		
		<center/>
   		</div>
      
	</div>
      
	<div class="col-sm-3 sidenav"></div>
</div>
</div>




	<!--Footer-->
	<?php require 'footer.php'; ?>