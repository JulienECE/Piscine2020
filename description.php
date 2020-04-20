<?php require 'header.php'; ?>

<!-- Colonne du milieu-->

<div class="container-fluid">    

	<br>
	<center>
		<table>
			
			


<?php 

		$database = "bdd";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		
		if ($db_found) 
		{
				 
		 foreach($_GET as $name => $content) { // Most people refer to $key => $value
		  
		}
		
		$sql = "SELECT * FROM item WHERE ID = '".$name."' LIMIT 10";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result))
		{
		echo '
				<br>
				<tr>
	            <td><img width = "300" src="./images/'.$data['PHOTO'].'"></td>
	            <td></td>
	            <td><h4>'.$data['TITRE'].' ('.$data['CATEGORIE'].'/'.$data['SEXE'].')</h4>
	            <br>
	            <p align="left">Prix : ' .$data['PRIX'].' € ('.$data['TYPE_VENTE'].')
            	<br>
            	Etat : ' .$data['ETAT'].'
            	<br>
            	Vendeur : ' .$data['NOM_VENDEUR'].'
            	<br>
            	<br>
            	Description : ' .$data['DESCRIPTION'].'</p>
            	<br>
				<td>';

				if($data['TYPE_VENTE']=="Enchere"){
					echo'
				<form action="newprice.php" method="get" class="formulaire_val">	
				<input type="text" name="newprice" placeholder>
				<input type="submit" name="'.$name.'" value="Encherir">
			</form></td></tr>';}
				
				 if($data['TYPE_VENTE']=="Achat immediat"){
					echo'
				<form action="panier.php" method="get" class="formulaire_val">	
				<input type="submit" name="'.$name.'" value="Ajouter au panier">
				</form></td></tr>';}
				 if($data['TYPE_VENTE']=="A negocier"){
					echo'
				<form action="panier.php" method="get" class="formulaire_val">	
				<input type="submit" name="'.$name.'" value="Négocier">
				</form></td></tr>';}
        	
				
		}
		}
		else
		{
			header('Location: ./index.php');
			exit();
		}
	

?>


		</table>
		</center>
</div>

<?php require 'footer.php'; ?>