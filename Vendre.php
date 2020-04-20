<?php require 'header.php'; ?>

	<?php if($_SESSION['complete']==false):?>
		<p>Veuillez remplir tous les champs svp</p>
	<?php endif;?>

	<h4 align="center"> Formulaire d'ajout d'un nouvel item à vendre</h4><br>
		<form action="additem.php" method="post" class="formulaire_val" enctype="multipart/form-data">
	   		<p align="center"><input class="inputbasic" type="text" name="titre" placeholder="Titre de l'objet"/></p>
	   		<p align="center"><textarea class="inputbasic" name="description" placeholder="Description"></textarea></p>
	   		<p align="center"><input class="inputbasic" type="file"></p>
			<p align="center"><input class="inputbasic" size="100" type="file" name="fichier" value="" /></p>
	   		<p align="center"><input class="inputbasic" type="text" name="prix" placeholder="Prix"/></p>
	   		<div align="center">Sexe:
				<select id="reviewAction" name="sexe" class="inputbasic">
					<option value="Default">Default</option>
					<option value="Masculin">Masculin</option>
					<option value="Feminin">Feminin</option>
					<option value="Unisexe">Unisexe</option>
				</select>
			</div>
			<br>
			<div align="center">Catégorie:
				<select id="reviewAction" name="categorie" class="inputbasic">
					<option value="Default">Default</option>
					<option value="Chapeau">Chapeau</option>
					<option value="Haut">Haut</option>
					<option value="Bas">Bas</option>
					<option value="Accessoire">Accessoire</option>
				</select>
			</div>
			<br>
			<div align="center">Couleur:
				<select id="reviewAction" name="couleur" class="inputbasic">
					<option value="Default">Default</option>
					<option class="greenColor" value="vert">vert</option>
					<option class="redColor" value="rouge">rouge</option>
					<option class="yellowColor" value="jaune">jaune</option>
					<option class="blackColor" value="noir">noir</option>
					<option class="whiteColor" value="blanc">blanc</option>
				</select>
			</div>
			<br>
			<div align="center">Etat:
				<select id="reviewAction" name="etat" class="inputbasic">
					<option value="Default">Default</option>
					<option value="Neuf">Neuf</option>
					<option value="Occasion">Occasion</option>
					
				</select>
			</div>
			<br>
	   		<p align="center"><input type="submit" name="valider" /></p>
	   		<?php echo $_SESSION['message']; ?> 
		</form>
	
<?php require 'footer.php'; ?>


