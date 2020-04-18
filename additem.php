<?php
	require 'util.php';
	init_php_session();
?>
<?php


//Insertion du nouvel article dans la base de données
if(isset($_POST) && empty($_POST['titre']) || empty($_POST['description']) || empty($_POST['prix'])){
    echo"Veuillez remplir tous les champs";
	$_SESSION['complete']=false;
	header('Location: ./Vendre.php');
	exit();
}
 if(is_logged()){
	$_SESSION['complete']=true;
//recuperer les données venant de la page HTML
echo $_SESSION['username'];
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$description = isset($_POST["description"])? $_POST["description"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$sexe = isset($_POST["sexe"])? $_POST["sexe"] : "";
$categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
$couleur = isset($_POST["couleur"])? $_POST["couleur"] : "";
$etat = isset($_POST["etat"])? $_POST["etat"] : "";

//identifier votre BDD

$database = "bdd";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//si le bouton est cliqué

if ($db_found) {

//tester s'il y a de résultat

$sql = "SELECT * FROM item WHERE TITRE='$titre'";
$result = mysqli_query($db_handle, $sql);
$test=false;
while ($data = mysqli_fetch_assoc($result))
{
	echo $data['DESCRIPTION'];
	if($data['DESCRIPTION']==$description)
	{
		$test=true;
	}
}
if ($test==false) {
	$name=$_SESSION['username'];
	echo $sexe;
	echo $categorie;
	echo $couleur;
	echo $etat;
	$sql = "INSERT INTO item(TITRE, DESCRIPTION, PHOTO, VIDEO, PRIX, NOM_VENDEUR, NOM_ACHETEUR, VENTE,SEXE,COULEUR,CATEGORIE,ETAT,TYPE_VENTE,TEMPS)
	VALUES('$titre', '$description', '', '','$prix','$name','','0','$sexe','$couleur','$categorie','$etat','','')";
	$result = mysqli_query($db_handle, $sql);
	$sql = "SELECT * FROM item";
	$result = mysqli_query($db_handle, $sql);
	echo $etat;
		while ($data = mysqli_fetch_assoc($result))
		{
			echo "ID: " . $data['ID'] . "<br>";
			echo "Titre: " . $data['TITRE'] . "<br>";
			echo "Description: " . $data['DESCRIPTION'] . "<br>";
			echo "Photo: " . $data['PHOTO'] . "<br>";
			echo "ID: " . $data['VIDEO'] . "<br>";
			echo "Titre: " . $data['PRIX'] . "<br>";
			echo "Auteur: " . $data['NOM_VENDEUR'] . "<br>";
			echo "Année: " . $data['NOM_ACHETEUR'] . "<br>";
			echo "ID: " . $data['ETAT'] . "<br>";
			echo "Titre: " . $data['CATEGORIE'] . "<br>";
			echo "Année: " . $data['TEMPS'] . "<br>";
		}
}
}
 else {
echo "Database not found";
}
 
//fermer la connexion
mysqli_close($db_handle);
//header('Location: ./index.php');


// exit();
}
 else{
	  echo"non";
	//header('Location: ./signin.php');
  //exit();
 }