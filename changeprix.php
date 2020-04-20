<?php 
	require 'util.php';
	init_php_session();

		$database = "bdd";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);

		//tester s'il y a de résultat
		
		$sql = "UPDATE item SET NOM_ACHETEUR = '".$_SESSION['identifiant']."', VENTE = '0', PRIX='".$_SESSION['prixaremplacer']."' WHERE ID = '".$_SESSION['idaremplacer']."' ";
		$result = mysqli_query($db_handle, $sql);
						header('Location: ./index.php');
				exit();
?>
