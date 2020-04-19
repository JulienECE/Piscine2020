<?php require 'header.php'; ?>

<!-- Colonne du milieu-->
<div class="container-fluid p-0">
    	<h4 align="left">Administrateur</h4>
    	<p>Quelle action souhaitez vous effectuer ?</p><br>
	    <br><br>
	    <div class="row">
	    	<div class="col-sm-2"><input type="image" id="image" alt="Supprimer un article" src="SupprimerA.jpg" height="140" width="90"></div>
	    	<div class="col-sm-2"></div>
	    	<div class="col-sm-8">
	    		<form action="machin.php" method="post"> <!-- nom du php a changer -->
	          		<table>
		            	<tr><td align="center" width="150px">Id de l'article </td><td><input type="text" name="IdA"></td></tr>
		            	<tr><td colspan="2" align="center"><input type="submit" name="buttonSupprimer" value="Supprimer"></td></tr>
		            </table>
		        </form>
		    </div>
		</div>
		<br><br>
		<div class="row">
	    	<div class="col-sm-2"><input type="image" id="image" alt="Ajouter un vendeur" src="AjouterV.jpg" height="140" width="80"></div>
	    	<div class="col-sm-2"></div>
	    	<div class="col-sm-8">
	    		<form action="machin.php" method="post"> <!-- nom du php a changer -->
	          		<table>
		            	<tr><td align="center"width="150px">Id Vendeur</td><td><input type="text" name="IdV"></td></tr>
		            	<tr><td align="center"width="150px">Nom Vendeur </td><td><input type="text" name="NomV"></td></tr>
		            	<tr><td align="center"width="150px">Prénom Vendeur </td><td><input type="text" name="PreomV"></td></tr>
		            	<tr><td align="center"width="150px">Pseudo Vendeur </td><td><input type="text" name="PseudoV"></td></tr>
		            	<tr><td align="center"width="150px">E-mail Vendeur </td><td><input type="text" name="mailV"></td></tr>
		            	<tr><td colspan="4" align="center"><input type="submit" name="buttonAjouter" value="Ajouter"></td></tr>
		            </table>
	      		</form> 
	    	</div>
	    </div>
	    <br><br>
	    <div class="row">
	    	<div class="col-sm-2"><input type="image" id="image" alt="Supprimer un vendeur" src="SupprimerV.jpg" height="140" width="80"></div>
	    	<div class="col-sm-2"></div>
	    	<div class="col-sm-8">
	    		<form action="machin.php" method="post"> <!-- nom du php a changer -->
	          		<table>
		            	<tr><td align="center" width="150px">Id vendeur</td><td><input type="text" name="IdV" width="150px"></td></tr>
		    	        <tr><td colspan="3" align="center"><input type="submit" name="buttonSupprimer" value="Supprimer"></td></tr>
		            	
		            </table>
	      		</form> 
	    	</div>
	    </div>
    </div>


<?php require 'footer.php'; ?>