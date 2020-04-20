<?php
	require 'util.php';
	init_php_session();
	
	if(isset($_GET['action']) && !empty($_GET['action'] && $_GET['action'] == "logout"))
	{
		clean_php_session();
		header('location: signin.php');
	}
	
//recuperer les données venant de la page HTML

$email = isset($_POST["email"])? $_POST["email"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";

$erreur = "";

if ($nom == ""){
		$erreur .= "Nom de l'employé est vide.<br>";
	}
if ($email == ""){
		$erreur .= "Email de l'employé est vide.<br>";
	}

if ($erreur == "") {
		echo "Formulaire valide.<br>";
	} else {
		echo "Erreur : $erreur";
	}
	
//identifier votre BDD

$database = "bdd";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

//si le bouton est cliqué

if ($_POST["button"]) {
if ($db_found) {

//tester s'il y a de résultat

$sql = "SELECT * FROM log WHERE NOM='$nom'";
$result = mysqli_query($db_handle, $sql);

if (mysqli_num_rows($result) == 0) {
	echo"pas trouver";
}
else{
	while ($data = mysqli_fetch_assoc($result))
	{
		$mdp=$data['EMAIL'];
		if($email==$mdp)
		{
			echo "connected";
			$_SESSION['username'] = $nom;
			$_SESSION['identifiant'] = $data['ID'];
			$_SESSION['rank'] = $data['ADMIN'];
			$_SESSION['complete'] = true;
		}
	}
}
}
}
echo $_SESSION['username'];
//fermer la connexion
mysqli_close($db_handle);
header('Location: ./signin.php');
  exit();