<?php require 'header.php'; ?>

<div class="container-fluid text-center">    
  <div class="row content">  
  
  	<!-- Colonne de gauche-->

    <div class="col-sm-12"> 
    	<br>
    	<h3>Objet à vendre</h3>
    	<br>
    	<center>
		<form action="additem.php" method="post" class="formulaire_val">
		   <p><input class="inputbasic" type="text" name="titre" placeholder="Titre de l'objet"/></p>
		   <p><textarea class="inputbasic" name="description" placeholder="Description"/></textarea></p>
		   <p><input class="inputbasic" type="file"></p>
		   <p><input class="inputbasic" type="file"></p>
		   <p><input class="inputbasic" type="text" name="prix" placeholder="Prix"/></p>
		   <p ><input class="inputbasic" type="text" name="pseudo" placeholder="Pseudo"/></p>
		   <p><input type="submit" name="valider" /></p>
		</form>
	</center>
	</div>
	</div>

</div>


	
	<?php require 'footer.php'; ?>