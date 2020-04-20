<?php require 'header.php'; ?>

<div class="container text-center">    
	<div class="row content">
	    <div class="col-sm-12 bite"> 
	    	<br>
	    	<h3>Bienvenue sur Ebay ECE !</h3>
			<?php if(is_logged()):?>

								<?php if($_SESSION['rank']==1){
									header('Location: ./Administrateur.php');

									}?>
									



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
							<fieldset>
   								<legend id="legendPaiement">Connexion</legend><br>
   								<label id="labelPaiement">Nom : </label><input name="nom"><br>
								<br>
								<label id="labelPaiement">E-mail : </label><input name="email"><br>
								<tr><td><br><input type="submit" name="button" value="Se connecter"/></td></tr>
							</fieldset>
							<br><br><br>
						</form>
					<center/>
			<?php endif;?>
	    </div>
	</div>
</div>

<?php require 'footer.php'; ?>