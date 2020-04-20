<?php require 'header.php'; ?>

<div class="container-fluid text-center">    
  <div class="row content">
  	
    <!-- Colonne du milieu-->

    <div class="col-sm-12"> 
      <h3>Afin de terminer votre commande veuillez renseigner vos informations si dessous</h3>
      <p id="pformulairePaiement"><i>Complétez le formulaire. Les champs marqué par </i><em id="emPaiement">*</em> sont à remplir<em id="emPaiement"> vous même</em></p>
      <?php
	  
	    $database = "bdd";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);	

		//tester s'il y a de résultat
		
		$sql = "SELECT * FROM log WHERE ID = '".$_SESSION['identifiant']."'";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result))
		{
			?>
	  <form action="vendu.php" method="post" class="formulaire_val">
	  
  			<fieldset id="fieldsetPaiement">
			<?php
			echo '
   				<legend id="legendPaiement">Vos coordonées</legend>
      			<label id="labelPaiement">Nom/Prénom</label><input id="nomPrenom" value="' .$data['NOM'].'"><br>
				    <label id="labelPaiement">Adresse</label><input id="adresse" value="' .$data['ADRESSE'].'"><br>
				    <label id="labelPaiement">Ville</label><input id="ville" value="' .$data['VILLE'].'"><br>
				    <label id="labelPaiement">Code Postal</label><input id="codePostal" value="' .$data['CODE_POSTAL'].'"><br>
				    <label id="labelPaiement">Pays</label><input id="pays" value="' .$data['PAYS'].'"><br>
				    <label id="labelPaiement">Portable</label><input id="telephone" type="tel"placeholder="06xxxxxxxx" value="' .$data['PORTABLE'].'"><br>
		  	';
			?>
			</fieldset>
		
  			<fieldset id="fieldsetPaiement">
    			<legend id="legendPaiement">Informations de paiement</legend>
    				<label id="labelPaiement"><input id="visa" type="checkbox">Visa<em id="emPaiement">*</em></label>
    				<label id="labelPaiement"><input id="masterCard"type="checkbox">MasterCard<em id="emPaiement">*</em></label>
    				<label id="labelPaiement"><input id="americanEx"type="checkbox"> American Express<em id="emPaiement">*</em></label><br><br>
    				<label id="labelPaiement" >Numéro de carte <em id="emPaiement">*</em></label><input id="numeroCarte"><br>
				    <label id="labelPaiement" >Nom sur la carte <em id="emPaiement">*</em></label><input id="nomCarte"><br>
				    <label id="labelPaiement" >Epiration <em id="emPaiement">*</em></label><input id="dateExp"><br>
				    <label id="labelPaiement" >CVV <em id="emPaiement">*</em></label><input id="codeSecu"><br>
  			</fieldset>
        <p id="pformulairePaiement"><input type="submit" name="bouton" value="Finaliser le paiement"></p>
	 </form>
	 <?php
		}
	 ?>
    </div>
  </div>
</div>
<br>
<br>

<?php require 'footer.php'; ?>