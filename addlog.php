<?php
//recuperer les données venant de la page HTML

$email = isset($_POST["email"])? $_POST["email"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";

//identifier votre BDD

$database = "bdd";

//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//si le bouton est cliqué

if ($_POST["button"]) {
if ($db_found) {

//tester s'il y a de résultat
echo "jbolbpoi";
$sql = "SELECT * FROM log";
$result = mysqli_query($db_handle, $sql);
while ($data = mysqli_fetch_assoc($result))
	{
	echo "iiug";
echo "ID: " . $data['ID'] . "<br>";
echo "Titre: " . $data['NOM'] . "<br>";
echo "Auteur: " . $data['TYPE'] . "<br>";
echo "Année: " . $data['EMAIL'] . "<br>";

}
echo $email;
$sql = "SELECT * FROM log WHERE EMAIL='$email'";
$result = mysqli_query($db_handle, $sql);

if (mysqli_num_rows($result) == 0) {

	//le livre recherché n'existe pas

	echo "Book not found";
	
	$sql = "INSERT INTO log(ID,TYPE, NOM, EMAIL, PHOTO)
 VALUES('3','normal', '$nom', '$email', 'bi')";
 if (mysqli_query($db_handle, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db_handle);
}
 
 $result = mysqli_query($db_handle, $sql);
 
 $sql = "SELECT * FROM log";
$result = mysqli_query($db_handle, $sql);
while ($data = mysqli_fetch_assoc($result))
	{
	echo "iiug";
echo "ID: " . $data['ID'] . "<br>";
echo "Titre: " . $data['NOM'] . "<br>";
echo "Auteur: " . $data['TYPE'] . "<br>";
echo "Année: " . $data['EMAIL'] . "<br>";

}
 
 
}
else{
	echo "non";
}
}
 else {
echo "Database not found";
}
}
//fermer la connexion
mysqli_close($db_handle);