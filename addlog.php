<?php
//recuperer les données venant de la page HTML

$email = isset($_POST["email"])? $_POST["email"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";

//identifier votre BDD

$database = "bdd";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//si le bouton est cliqué

if ($_POST["button"]) {
if ($db_found) {

//tester s'il y a de résultat

$sql = "SELECT * FROM log WHERE EMAIL='$email'";
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
 header('Location: ./signin.php');
 
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
 else {
echo "Database not found";
}
}
//fermer la connexion
mysqli_close($db_handle);