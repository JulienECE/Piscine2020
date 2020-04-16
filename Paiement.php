<?php require 'header.php'; ?>

<div class="container-fluid text-center">    
  <div class="row content">
  	
    <!-- Colonne du milieu-->

    <div class="col-sm-12"> 
      <h3>Afin de terminer votre commande veuillez renseigner vos informations si dessous</h3>
      <form action="#" >
  			<fieldset id="fieldsetPaiement">
   				<legend id="legendPaiement">Vos coordonées</legend>
      				<label id="labelPaiement" for="nomPrenom">Nom/Prénom</label><input id="nomPrenom"><br>
				    <label id="labelPaiement" for="adresse">Adresse</label><input id="adresse"><br>
				    <label id="labelPaiement" for="ville">Ville</label><input id="ville"><br>
				    <label id="labelPaiement" for="codePostal">Code Postal</label><input id="codePostal"><br>
				    <label id="labelPaiement" for="pays">Pays</label><input id="pays"><br>
				    <label id="labelPaiement" for="telephone">Portable</label><input id="telephone" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br>
		  	</fieldset>
		
  			<fieldset id="fieldsetPaiement">
    			<legend id="legendPaiement">Informations de paiement</legend>
    			<p id="pformulairePaiement"><i>Complétez le formulaire. Les champs marqué par </i><em id="emPaiement">*</em> sont <em>obligatoires</em></p>
    				<label id="labelPaiement" for="visa"><input id="visa" type="checkbox">Visa</label>
    				<label id="labelPaiement" for="masterCard"><input id="masterCard" type="checkbox">MasterCard</label>
    				<label id="labelPaiement" for="americanEx"><input id="americanEx" type="checkbox"> American Express</label><br><br>
    				<label id="labelPaiement" for="numeroCarte">Numéro de carte <em id="emPaiement">*</em></label><input id="numeroCarte"><br>
				    <label id="labelPaiement" for="nomCarte">Nom sur la carte <em id="emPaiement">*</em></label><input id="nomCarte"><br>
				    <label id="labelPaiement" for="dateExp">Epiration <em id="emPaiement">*</em></label><input id="dateExp"><br>
				    <label id="labelPaiement" for="codeSecu">CVV <em id="emPaiement">*</em></label><input id="codeSecu"><br>
  				</fieldset>
  <p id="pformulairePaiement"><input type="submit" value="Finaliser le paiement"></p>
</form>
</div>
</div>
</div>
<br><br>

<?php require 'footer.php'; ?>