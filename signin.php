<?php require 'header.php'; ?>

<div class="container-fluid text-center">    
	<div class="row content">
	    <div class="col-sm-12 bite"> 
	    	<br>
	    	<h3>Bienvenue sur Ebay ECE !</h3>
			<?php if(is_logged()):?>
				<p> Bienvenue <?=htmlspecialchars($_SESSION['username']) ?> |<a href='testlog.php?action=logout'> Se deconnecter</a></p>
				<center>
						<form action="profilVendeur.php" method="post" class="formulaire_val">
							<table>	
								
								<tr><td><br><input type="submit" name="button" value="Mes items en vente"/></td></tr>
							</table>
							<br><br><br>
						</form>
					<center/>
				<?php else:?>
					<br>
					<center>
						<form action="testlog.php" method="post" class="formulaire_val">
							<table>	
								<br>
								<tr><input type="text" placeholder="Nom" class="inputbasic firstinput" name="nom"/></tr>
								<br>
								<tr><input type="text" placeholder="Email" class="inputbasic" name="email"/></tr>
								<tr><td><br><input type="submit" name="button" value="Se connecter"/></td></tr>
							</table>
							<br><br><br>
						</form>
					<center/>
			<?php endif;?>
	    </div>
	</div>
</div>

<?php require 'footer.php'; ?>