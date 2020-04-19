<?php require 'header.php'; ?>




<!-- Colonne du milieu-->

<div class="container-fluid">    
  
    	<h4>Ferraille ou trésor</h4>
    		<br>
    		<table>
			<?php
			
			$database = "bdd";
			$db_handle = mysqli_connect('localhost', 'root', '');
			$db_found = mysqli_select_db($db_handle, $database);
			
			if ($db_found) {

			//tester s'il y a de résultat
			echo $_SESSION['categ'];		
			$sql = "SELECT * FROM item WHERE CATEGORIE = '".$_SESSION['categ']."' LIMIT 10";
			$result = mysqli_query($db_handle, $sql);
			while ($data = mysqli_fetch_assoc($result))
				{
			echo '
				<tr>
	    			<td><a href="'.$data['PHOTO'].'"><img src="./images/'.$data['PHOTO'].'"></a></td>
	    			<td width="300px"><p align="center">Prix :'.$data['PRIX'].'  <br>(Vente par négociation)</p></td>
	    			<td><input type="submit" name="buttonNégo" value="Négocier"></td>
	    		</tr>';
			}
			}
				?>	
			</table>
		
		</div>


<?php require 'footer.php'; ?>