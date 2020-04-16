<?php require 'header.php'; ?>

<div class="container-fluid text-center">    
  <div class="row content">
  	<!-- Colonne de gauche-->
    <div class="col-sm-1 sidenav"></div>

    <div class="col-sm-8"> 
		<form action="additem.php" method="post" class="formulaire_val">
		   <p><input class="inputbasic" type="text" name="titre" placeholder="Titre de l'objet"/></p>
		   <p><textarea class="inputbasic" name="description" placeholder="Description"/></textarea></p>
		   <p><input class="inputbasic" type="file"></p>
		   <p><input class="inputbasic" type="file"></p>
		   <p align="left"><input type="text" name="prix" placeholder="Prix"/></p>
		   <p align="left"><input type="text" name="pseudo" placeholder="Pseudo"/></p>
		   <p align="left"><input type="submit" name="valider" /></p>
		</form>
	</div>

	<?php require 'ColonneDroite.php'; ?>
	<?php require 'footer.php'; ?>