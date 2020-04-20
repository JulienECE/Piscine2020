<?php
//recuperer les données venant de la page HTML

$email = isset($_POST["email"])? $_POST["email"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
$ville = isset($_POST["ville"])? $_POST["ville"] : "";
$cp = isset($_POST["cp"])? $_POST["cp"] : "";
$pays = isset($_POST["pays"])? $_POST["pays"] : "";
$portable = isset($_POST["portable"])? $_POST["portable"] : "";

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
echo"test";
if (mysqli_num_rows($result) == 0) {

	//le livre recherché n'existe pas
	echo"test";
	$sql = "INSERT INTO log(ADMIN, NOM, EMAIL, PHOTO,ADRESSE,VILLE, CODE_POSTAL,PAYS,PORTABLE)
 VALUES('0', '$nom', '$email', '','$adresse','$ville','$cp','$pays','$portable')";
 echo"test";
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
    echo"Veuillez remplir tous les champs";
	$_SESSION['complete']=false;
	header('Location: ./signin.php');
	exit();
}
 else {
echo "Database not found";
}
}
//fermer la connexion
mysqli_close($db_handle);