<?php require 'header.php'; ?>

<div class="container">
    	<h4 align="left">Administrateur</h4>
    	<a href='testlog.php?action=logout'> Se deconnecter</a>
    	<p>Quelle action souhaitez vous effectuer ?</p><br>
    	<div class="container-fluid text-center">
	      	
			<form action="deleteUser.php" method="get" class="formulaire_val">
	  			
	   				<legend id="legendPaiement">Supprimer Vendeur</legend>
	      			<label>Id Vendeur</label><input type="text" name="Uid"><br>
					<p align="center" ><input type="submit" name= "test" value="Supprimer Vendeur"></p>
			  	
			</form>
			
			<form action="deleteItem.php" method="get" class="formulaire_val">
	  			
	   				<legend id="legendPaiement">Supprimer item</legend>
	      			<label id="labelPaiement">Id item</label><input name="Iid"><br>
					<p align="center" ><input type="submit" name="test" value="Supprimer item"></p>
			  	
			</form>
		</div>
</div>
		 
<?php require 'footer.php'; ?>
