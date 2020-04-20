<?php require 'header.php'; ?>

<!-- Colonne du milieu-->

<div class="container">    
	<br>
	<table>
		<center>
			<h4>Mes articles en vente</h4>
		<?php
		
		$database = "bdd";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		
		if ($db_found) {

		//tester s'il y a de résultat
		
		
		$sql = "SELECT * FROM item WHERE NOM_VENDEUR = '".$_SESSION['username']."' LIMIT 10";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result))
			{
				

		echo '
			<tr>
				<td><a href="'.$data['PHOTO'].'"><img width = "250" src="./images/'.$data['PHOTO'].'"></a></td>
				<td width="300px" height="200px" ><p align="center">Prix : ' .$data['PRIX'].'€  <br>('.$data['TYPE_VENTE'].')</p></td>
				<td><form action="#" method="post" class="formulaire_val">	
				<input type="submit" name="'.$data['ID'].'" value="Mettre fin à la vente">
				
				</form></td>
			</tr>';


		}

		}
		
		else
		{
			header('Location: ./index.php');
			exit();
		}
			?>
		</center>
	</table>
</div>

<?php require 'footer.php'; ?>