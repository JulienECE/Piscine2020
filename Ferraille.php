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

			$sql = "SELECT * FROM item WHERE ETAT='Neuf' LIMIT 10";
			$result = mysqli_query($db_handle, $sql);

			while ($data = mysqli_fetch_assoc($result))
				{
					
			echo "ID: " . $data['ID'] . "<br>";
			echo "DESCRITION: " . $data['DESCRIPTION'] . "<br>";
			echo "ETAT: " . $data['ETAT'] . "<br>";

			echo '
				<tr>
	    			<td><a href="img1"><img src="img1.jpg"></a></td>
	    			<td width="300px"><p align="center">Prix :'.$data['ETAT'].'  <br>(Vente par négociation)</p></td>
	    			<td><input type="submit" name="buttonNégo" value="Négocier"></td>
	    		</tr>';
			}
			}
				?>
			<?php ?>
	    		<tr>
	    			<td><a href="img1"><img src="img1.jpg"></a></td>
	    			<td width="300px"><p align="center"> description</p></td>
	    			<td width="300px"><p align="center">Prix actuel : ...€ <br>(Vente par négociation)</p></td>
	    			<td><input type="submit" name="buttonNégo" value="Voir plus"></td>
	    		</tr>
	    		<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
	    		<tr>
	    			<td><a href="images/img1"><img src="images/img1.jpg"></a></td>
	    			<td width="300px"><p align="center"> description</p></td>
	    			<td width="300px"><p align="center">Prix actuel : ...€ <br>(Vente par enchère)</p></td>
	    			<td><input type="submit" name="buttonEnchere" value="Voir plus"></td>
	    		</tr>
	    		<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
	    		<tr>
	    			<td><a href="images/img2"><img src="images/img2.jpg"></a></td>
	    			<td width="300px"><p align="center"> description</p></td>
	    			<td width="300px"><p align="center">Prix : 200€ <br>(Vente directe)</p></td>
	    			<td><input type="submit" name="buttonAcheter" value="Voir plus"></td>
	    		</tr>
	    		<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
	    		<tr>
	    			<td><a href="images/img3"><img src="images/img3.jpg"></a></td>
	    			<td width="300px"><p align="center"> description</p></td>
	    			<td width="300px"><p align="center">Prix : 200€ <br>(Vente directe)</p></td>
	    			<td><input type="submit" name="buttonAcheter" value="Voir plus"></td>
	    		</tr>
	    		<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
	    		<tr>
	    			<td><a href="images/img4"><img src="images/img4.jpg"></a></td>
	    			<td width="300px"><p align="center"> description</p></td>
	    			<td width="300px"><p align="center">Prix : 200€ <br>(Vente directe)</p></td>
	    			<td><input type="submit" name="buttonAcheter" value="Voir plus"></td>
	    		</tr>
			</table>
		
		</div>


<?php require 'footer.php'; ?>