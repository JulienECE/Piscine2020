<?php require 'header.php'; ?>

<!-- Colonne du milieu-->

<div class="container-fluid">    

	<br>
		<table>
			<center>
			<h4>
		<?php
		if(isset($_SESSION['categ']) && ($_SESSION['categ']=="Chapeau" || $_SESSION['categ']=="Haut" || $_SESSION['categ']=="Bas" || $_SESSION['categ']=="Accessoire"))
		{
		$database = "bdd";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		
		if ($db_found) {
			
		foreach($_GET as $id => $content) 
		{ // Most people refer to $key => $value
		  
		}
		
		$sql = "SELECT COUNT(*) FROM item WHERE CATEGORIE='".$_SESSION['categ']."'";
		$result = mysqli_query($db_handle, $sql);
		$number=0;
		while ($data = mysqli_fetch_assoc($result))
			{
				foreach($data as $element)
			{
				$number=$element;
			}
			}

		$page=0;
		if(!isset($id))
		{
			$next=1;
			$previous=1;
			$sql = "SELECT * FROM item WHERE CATEGORIE = '".$_SESSION['categ']."' AND VENTE=0 LIMIT 10";
		$result = mysqli_query($db_handle, $sql);
		}
		//tester s'il y a de résultat
		if(isset($id))
		{
			$id=(int)$id;
			(int)$next=$id+1;
			(int)$previous=$id-1;
			$page=(10*($id));
			$sql = "SELECT * FROM item WHERE CATEGORIE = '".$_SESSION['categ']."'  LIMIT ".$page.",10";
		$result = mysqli_query($db_handle, $sql);
		}
		
		while ($data = mysqli_fetch_assoc($result))
			{
				

		echo '
			<tr>
				<td><a href="'.$data['PHOTO'].'"><img width = "200" src="./images/'.$data['PHOTO'].'"></a></td>
				<td width="300px" height="200px" ><p align="center">Prix : ' .$data['ID'].'€  <br>('.$data['TYPE_VENTE'].')</p></td>
				<td><form action="description.php" method="get" class="formulaire_val">	
				<input type="submit" name="'.$data['ID'].'" value="Details">
				</form></td>
			</tr>';


		}
			if(isset($id) && $id>0)
		{
				echo '
			<tr>
				<form action="item.php" method="get" class="formulaire_val">	
				<input type="submit" name="'.$previous.'" value="previous">		
				</form>
			</tr>';
		}
		if($page+11<=(int)$number)
		{
				echo '
			<tr>
				<form action="item.php" method="get" class="formulaire_val">	
				<input type="submit" name="'.$next.'" value="next">		
				</form>
			</tr>';
		}

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