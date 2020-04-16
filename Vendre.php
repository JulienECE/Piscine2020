<?php require 'header.php'; ?>
		
		<?php if($_SESSION['complete']==false):?>
		<p>Veuillez remplir tous les champs"</p>
		<?php endif;?>

	<form action="additem.php" method="post" class="formulaire_val">
	   <p><input class="inputbasic" type="text" name="titre" placeholder="Titre de l'objet"/></p>
	   <p><textarea class="inputbasic" name="description"></textarea></p>
	   <p><input class="inputbasic" type="file"></p>
	   <p><input class="inputbasic" type="file"></p>
	   <p><input type="text" name="prix"/></p>
	   <input type="select">
		   <nom>Couleur</nom>
		   <libellé>Quelle est votre langue marternelle ?</libellé>
		   <option valeur="fr">Français</option>
		   <option valeur="nl">Néerlandais</option>
		   <option valeur="en">Anglais</option>
		   <option valeur="other">Autre</option>
		</input>
		<select name="selectBox1">
			<option value="noir.png" style="background-image:url(noir.png);">male</option>
			<option value="blanc.png" style="background-image:url(blanc.png);">female</option>
		</select> 
		<select id="select" onchange="change();">
			<option style="background:url('noir.png') no-repeat; width:100px; height:100px;"></option>
			<option style="background:url('blanc.png') no-repeat; width:100px; height:100px;"></option>
		</select>
	   <p><input type="submit" name="valider" /></p>
	</form>
	
	<script>
		function change() {
		 
			select = document.getElementById("select");
			select_s = select.style;
			 
			switch(select.selectedIndex) {
			 
			case 0 :
			select_s.background = "url('noir.png') no-repeat";
			break;
			 
			case 1 :
			select_s.background = "url('blanc.png') no-repeat";
			break;
			 
			default:
			select_s.background = "none";
			break;
			}
		}
	</script>
	
<?php require 'footer.php'; ?>


