<?php
//recuperer les données venant de la page HTML
$iid =$_GET["Iid"];

echo $iid;


//identifier votre BDD

$database = "bdd";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//si le bouton est cliqué


if ($db_found) {

//tester s'il y a de résultat

$sql = "DELETE FROM item WHERE ID='$iid'";
$result = mysqli_query($db_handle, $sql);

header('Location: ./Administrateur.php');



   
	exit();
}
 else {
echo "Database not found";
}

//fermer la connexion
mysqli_close($db_handle);

?>