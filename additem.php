<?php
	require 'util.php';
	init_php_session();
?>
<?php
$poids_max = 5000000;
$repertoire = './images/';

//Insertion du nouvel article dans la base de données
if(isset($_POST) && empty($_POST['titre']) || empty($_POST['description']) || empty($_POST['prix']) || ($_FILES['fichier']['error'] == UPLOAD_ERR_NO_FILE) ||empty($_POST['sexe']) || empty($_POST['categorie']) || empty($_POST['couleur']) || empty($_POST['etat'])){
    echo"Veuillez remplir tous les champs";
	$_SESSION['complete']=false;
	header('Location: ./Vendre.php');
	exit();
}
 if(is_logged())
{
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




	 if ($_FILES['fichier']['type'] != 'image/png' && $_FILES['fichier']['type'] != 'image/jpeg' && $_FILES['fichier']['type'] != 'image/jpg' && $_FILES['fichier']['type'] != 'image/gif')
		 {
		 $erreur = 'Le fichier doit être au format *.jpeg, *.gif ou *.png .';
		 }
		
		 // On vérifie le poids de l'image
		 elseif ($_FILES['fichier']['size'] > $poids_max)
		 {
		 $erreur = 'L\'image doit être inférieur à ' . $poids_max/1024 . 'Ko.';
		 }
		
		 // On vérifie si le répertoire de téléchargement  existe
		 elseif (!file_exists($repertoire))
		 {
		 $erreur = 'Erreur, le dossier de téléchargement n\'existe pas.';
		 }
		
		 // Si il y a une erreur on l'affiche sinon on peut télécharger
		 if(isset($erreur))
		 {
		 echo '' . $erreur . '<br><a href="javascript:history.back(1)">Retour</a>';
		 }
		 else
		 {
		
		 // On définit l'extention du fichier puis on le nomme par le timestamp actuel
		 if ($_FILES['fichier']['type'] == 'image/jpeg') { $extention = '.jpeg'; }
		 if ($_FILES['fichier']['type'] == 'image/jpeg') { $extention = '.jpg'; }
		 if ($_FILES['fichier']['type'] == 'image/png') { $extention = '.png'; }
		 if ($_FILES['fichier']['type'] == 'image/gif') { $extention = '.gif'; }
		 $oFileInfos = $_FILES["fichier"]; 
	 
		// nom du fichier. 
		 $nom_fichier = time().$extention;
		
		 // On télécharge le fichier sur le serveur.
		 if (move_uploaded_file($_FILES['fichier']['tmp_name'], $repertoire.$nom_fichier))
		 {
		 $url = 'http://localhost:8888/machin'.$repertoire.''.$nom_fichier.'';
		 echo 'Votre image à été téléchargée sur le serveur avec succes!<br>Voici le lien: <input type="text" value="' . $url . '" size="60">';
		 }
		 else
		 {
		 echo 'L\'image n\'a pas pu être téléchargée sur le serveur.';
		 }
		
		 }
	echo 'hahaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';

	//identifier votre BDD

	$database = "bdd";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	//si le bouton est cliqué

	if ($db_found) 
	{	


		//tester s'il y a de résultat

		$sql = "SELECT * FROM item WHERE TITRE='$titre'";
		$result = mysqli_query($db_handle, $sql);
		$test=false;
		if(!empty($result)){
			while ($data = mysqli_fetch_assoc($result))
			{
				echo $data['DESCRIPTION'];
				if($data['DESCRIPTION']==$description)
				{
					$test=true;
				}
			}
		}
		else{
			$test=true;
		}
		
		if ($test==false) 
		{
			echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
			$name=$_SESSION['identifiant'];
			echo $sexe;
			echo $categorie;
			echo $couleur;
			echo $etat;
			$sql = "INSERT INTO item(TITRE, DESCRIPTION, PHOTO, VIDEO, PRIX, NOM_VENDEUR, NOM_ACHETEUR, VENTE,SEXE,COULEUR,CATEGORIE,ETAT,TYPE_VENTE,TEMPS)
			VALUES('$titre', '$description', '$nom_fichier', '','$prix','$name','','0','$sexe','$couleur','$categorie','$etat','','')";
			$result = mysqli_query($db_handle, $sql);
			$sql = "SELECT * FROM item";
			$result = mysqli_query($db_handle, $sql);
			echo $etat;

		}
		
	}
	else 
	{
	echo "Database not found";
	}
	 
	//fermer la connexion
	echo "dans la jungle";
	mysqli_close($db_handle);
	header('Location: ./index.php');
exit();
}
 else{
	  echo"non";
	header('Location: ./signin.php');
exit();
 }
