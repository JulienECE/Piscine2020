<?php require 'header.php'; ?>

<div class="container text-center">    
	<div class="row content">
		<div class="col-sm-12"> 
    		<br>
      		<h3>Bienvenue parmis nous veuillez renseigner vos informations pour vous enregistrer</h3>
      		<br>
    		<center>
		   		<form action="addlog.php" method="post" class="formulaire_val">
		      		<fieldset id="fieldsetPaiement" action="addlog.php" method="post" class="formulaire_val">
   						<legend id="legendPaiement">Inscription</legend>
   						<label id="labelPaiement">Nom : </label><input name="nom"><br>
   						<label id="labelPaiement">E-mail : </label><input name="email"><br>
   						<label id="labelPaiement">Photo de profil : </label><input type="file" name="PhotoP"><br>
			       		<label id="labelPaiement">Adresse : </label><input name="adresse"><br>
			       		<label id="labelPaiement">Ville : </label><input name="Ville"><br>
			       		<label id="labelPaiement">Code Postal : </label><input name="cp"><br>
			       		<label id="labelPaiement">Pays : </label><input name="pays"><br>
						<label id="labelPaiement">Tél : </label><input name="portable"><br>
			       		<br>
			       		<br>
			       		<input type="submit" name="button" value="Valider"/>
		      		</fieldset>
		    	</form>
		  	</center>
   		</div>     
	</div>
</div>

<?php require 'footer.php'; ?>