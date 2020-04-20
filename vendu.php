<?php
		require 'util.php';
		init_php_session();
		
		$database = "bdd";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		
		if ($db_found) {

		//tester s'il y a de résultat
		foreach($_SESSION['tableau'] as $element)
			{
				echo "nom identifiant= ".$_SESSION['identifiant'];
				$sql = "UPDATE item SET NOM_ACHETEUR = '".$_SESSION['identifiant']."', VENTE = '1' WHERE ID = '".$element."' ";
				$result = mysqli_query($db_handle, $sql);
				echo $sql ;
			}
		}
		else
		{
			header('Location: ./index.php');
			exit();
		}
		header('Location: ./index.php');
			exit();
?>

