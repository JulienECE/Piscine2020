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
		
		if ($db_found) {
		

		//tester s'il y a de résultat
		 
		 foreach($_GET as $name => $content) { // Most people refer to $key => $value
		  
		}
		
		
		$sql = "SELECT * FROM item WHERE TITRE = '".$name."' LIMIT 10";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result))
			{
		echo '
			<br>
			<tr>
            <td><img width = "600" src="./images/'.$data['PHOTO'].'"></td>
            <td></td>
            <td><h4>'.$name.' ('.$data['CATEGORIE'].'/'.$data['SEXE'].')</h4><p align="left">Prix : ' .$data['PRIX'].'  ('.$data['TYPE_VENTE'].')
            	<br>
            	Etat : ' .$data['ETAT'].'
            	<br>
            	Vendeur : ' .$data['NOM_VENDEUR'].'
            	<br>
            	Description : ' .$data['DESCRIPTION'].'</p>
				<form action="#" method="post" class="formulaire_val">	
				<input type="submit" name="achat" value="Acheter">
				
				</form></td>
        	</tr>




				
				
				
				

			';
		
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