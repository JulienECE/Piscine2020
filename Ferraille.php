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

			$sql = "SELECT * FROM item WHERE EMAIL='$email'";
			$result = mysqli_query($db_handle, $sql);

			if (mysqli_num_rows($result) == 0) {

				//le livre recherché n'existe pas
				
				$sql = "INSERT INTO log(ADMIN, NOM, EMAIL, PHOTO)
			 VALUES('0', '$nom', '$email', '')";

			 //Verif erreur
			 
			// if (mysqli_query($db_handle, $sql)) {
			//    echo "New record created successfully";
			//} else {
			//    echo "Error: " . $sql . "<br>" . mysqli_error($db_handle);
			//}
			 
			 //-----------------//
			 
			 $result = mysqli_query($db_handle, $sql);
			 
			 $sql = "SELECT * FROM log";
			$result = mysqli_query($db_handle, $sql);
			while ($data = mysqli_fetch_assoc($result))
				{
					
			echo "ID: " . $data['ID'] . "<br>";
			echo "Titre: " . $data['NOM'] . "<br>";
			echo "Auteur: " . $data['ADMIN'] . "<br>";
			echo "Année: " . $data['EMAIL'] . "<br>";

			}
			}
			}
			
			
				<tr>
	    			<td><a href="img1"><img src="img1.jpg"></a></td>
	    			<td width="300px"><p align="center">Prix : 300€ <br>(Vente par négociation)</p></td>
	    			<td><input type="submit" name="buttonNégo" value="Négocier"></td>
	    		</tr>
			?>
	    		<tr>
	    			<td><a href="img1"><img src="img1.jpg"></a></td>
	    			<td width="300px"><p align="center"> description</p></td>
	    			<td width="300px"><p align="center">Prix actuel : ...€ <br>(Vente par négociation)</p></td>
	    			<td><input type="submit" name="buttonNégo" value="Négocier"></td>
	    		</tr>
	    		<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
	    		<tr>
	    			<td><a href="images/img1"><img src="images/img1.jpg"></a></td>
	    			<td width="300px"><p align="center"> description</p></td>
	    			<td width="300px"><p align="center">Prix actuel : ...€ <br>(Vente par enchère)</p></td>
	    			<td><input type="submit" name="buttonEnchere" value="Enchérir"></td>
	    		</tr>
	    		<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
	    		<tr>
	    			<td><a href="images/img2"><img src="images/img2.jpg"></a></td>
	    			<td width="300px"><p align="center"> description</p></td>
	    			<td width="300px"><p align="center">Prix : 200€ <br>(Vente directe)</p></td>
	    			<td><input type="submit" name="buttonAcheter" value="Acheter"></td>
	    		</tr>
	    		<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
	    		<tr>
	    			<td><a href="images/img3"><img src="images/img3.jpg"></a></td>
	    			<td width="300px"><p align="center"> description</p></td>
	    			<td width="300px"><p align="center">Prix : 200€ <br>(Vente directe)</p></td>
	    			<td><input type="submit" name="buttonAcheter" value="Acheter"></td>
	    		</tr>
	    		<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
	    		<tr>
	    			<td><a href="images/img4"><img src="images/img4.jpg"></a></td>
	    			<td width="300px"><p align="center"> description</p></td>
	    			<td width="300px"><p align="center">Prix : 200€ <br>(Vente directe)</p></td>
	    			<td><input type="submit" name="buttonAcheter" value="Acheter"></td>
	    		</tr>
			</table>
		
		</div>


<?php require 'footer.php'; ?>