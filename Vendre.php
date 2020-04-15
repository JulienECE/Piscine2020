
<?php require 'header.php'; ?>
	<form action="additem.php" method="post" class="formulaire_val">
	   <p><input class="inputbasic" type="text" name="titre" placeholder="Titre de l'objet"/></p>
	   <p><textarea class="inputbasic" name="description"></textarea></p>
	   <p><input class="inputbasic" type="file"></p>
	   <p><input class="inputbasic" type="file"></p>
	   <p><input type="text" name="prix"/></p>
	   <p><input type="text" name="pseudo" /></p>
	   <p><input type="submit" name="valider" /></p>
	</form>
	<?php require 'footer.php'; ?>