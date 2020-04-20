
<?php 
	require 'util.php';
	init_php_session();
		$database = "bdd";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);

		$prix=array();	
		$nom=array();		
		 foreach($_GET as $name => $content) { // Most people refer to $key => $value
		  array_push($nom,$name);
		  array_push($prix,$content);
		}
		$database = "bdd";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		echo $prix[0]; 
		echo $nom[1]; 

		//tester s'il y a de résultat
		
		$sql = "SELECT * FROM item WHERE ID = '".$nom[1]."'";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result))
		{
			if($prix[0]>$data['PRIX'])
			{
				$_SESSION['type']="enchere";
				$_SESSION['prixaremplacer']=$prix[0];
				$_SESSION['idaremplacer']=$nom[1];
				header('Location: ./paiement.php');
				exit();
			}
			else
			{
				header("location:".  $_SERVER['HTTP_REFERER']); 
				exit();
			}
		}
?>
