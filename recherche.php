
<?php require 'header.php'; ?>

<!-- Colonne du milieu-->

<div class="container">    

	<br>
		<table>
			<center>
			<h4>
		<?php
		
		$database = "bdd";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		
		if ($db_found) {

		//tester s'il y a de résultat
		
		
		foreach($_GET as $name => $content) { // Most people refer to $key => $value
		  
		}
		echo 'Résultats pour "'.$content.'"';
		
		$sql = "SELECT * FROM item WHERE COULEUR = '".$content."' OR SEXE = '".$content."' OR ETAT = '".$content."' OR CATEGORIE = '".$content."' OR TYPE_VENTE = '".$content."' LIMIT 10";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result))
			{
				

		echo '
			<tr>
				<td><a href="'.$data['PHOTO'].'"><img width = "200" src="./images/'.$data['PHOTO'].'"></a></td>
				<td width="300px" height="200px" ><p align="center">Prix : ' .$data['PRIX'].'€  <br>('.$data['TYPE_VENTE'].')</p></td>
				<td><form action="description.php" method="get" class="formulaire_val">	
				<input type="submit" name="'.$data['ID'].'" value="Details">
				
				</form></td>
			</tr>';


		}

		}
		
		else
		{
			header('Location: ./index.php');
			exit();
		}
			?>	</h4>
		</center>
		</table>
</div>

<?php require 'footer.php'; ?>