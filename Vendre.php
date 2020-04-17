<?php require 'header.php'; ?>
		
		<?php if($_SESSION['complete']==false):?>
		<p>Veuillez remplir tous les champs"</p>
		<?php endif;?>

	<form action="additem.php" method="post" class="formulaire_val">
	   <p><input class="inputbasic" type="text" name="titre" placeholder="Titre de l'objet"/></p>
	   <p><textarea class="inputbasic" name="description" placeholder="Description"></textarea></p>
	   <p><input class="inputbasic" type="file"></p>
	   <p><input class="inputbasic" type="file"></p>
	   <p><input type="text" name="prix" placeholder="Prix"/></p>
	   Sexe:
		<select id="reviewAction" name="sexe">
			<option value="Default">Default</option>
			<option value="Homme">Homme</option>
			<option value="Femme">Femme</option>
			<option value="Unisexe">Unisexe</option>
		</select>
		<br>
		Catégorie:
		<select id="reviewAction" name="categorie">
			<option value="Default">Default</option>
			<option value="Chapeau">Chapeau</option>
			<option value="Haut">Haut</option>
			<option value="Bas">Bas</option>
			<option value="Accessoire">Accessoire</option>
		</select>
		<br>
		Couleur:
		<select id="reviewAction" name="couleur">
			<option value="Default">Default</option>
			<option class="greenColor" value="vert">vert</option>
			<option class="redColor" value="rouge">rouge</option>
			<option class="yellowColor" value="jaune">jaune</option>
			<option class="blackColor" value="noir">noir</option>
			<option class="whiteColor" value="blanc">blanc</option>
		</select>
		<br>
		Etat:
		<select id="reviewAction" name="etat">
			<option value="Default">Default</option>
			<option value="Neuf">Neuf</option>
			<option value="Bon état">Bon état</option>
			<option value="Usé">Usé</option>
		</select>
		<br>
	   <p><input type="submit" name="valider" /></p>
	</form>
	
	
<?php require 'footer.php'; ?>


