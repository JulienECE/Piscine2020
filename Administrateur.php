<?php require 'header.php'; ?>

<div class="container-fluid p-0">
    	<h4 align="left">Administrateur</h4>
    	<p>Quelle action souhaitez vous effectuer ?</p><br>
    	<div class="container-fluid text-center">
	      	<form action="#" method="post" >
	  			<fieldset id="fieldsetPaiement">
	   				<legend id="legendPaiement">Ajouter Vendeur</legend>
	      			<label id="labelPaiement"for="IdV">Id Vendeur</label><input id="IdV"><br>
					<label id="labelPaiement"for="NomV">Nom vendeur</label><input id="NomV"><br>
					<label id="labelPaiement"for="MailV">E-mail Vendeur</label><input id="MailV"><br>
					<label id="labelPaiement"for="PhotoV">Photo Vendeur</label><input id="PhotoV" type="file" placeholder="a"/>
					<p align="center" id="pformulairePaiement"><input type="submit" value="Ajouter Vendeur"></p>
			  	</fieldset>
			</form>
			<form action="#" method="post">
	  			<fieldset id="fieldsetPaiement">
	   				<legend id="legendPaiement">Supprimer Vendeur</legend>
	      			<label id="labelPaiement"for="IdV">Id Vendeur</label><input id="IdV"><br>
					<p align="center" id="pformulairePaiement"><input type="submit" value="Supprimer Vendeur"></p>
			  	</fieldset>
			</form>
			<form action="#" method="post">
	  			<fieldset id="fieldsetPaiement">
	   				<legend id="legendPaiement">Supprimer item</legend>
	      			<label id="labelPaiement"for="IdI">Id item</label><input id="IdI"><br>
					<p align="center" id="pformulairePaiement"><input type="submit" value="Supprimer item"></p>
			  	</fieldset>
			</form>
		</div>
</div>
		 
<?php require 'footer.php'; ?>
