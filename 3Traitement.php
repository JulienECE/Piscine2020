<?php
//recuperer les données venant de la page HTML
$Prenom = isset($_POST["Prenom"])? $_POST["Prenom"] : "";
$Nom = isset($_POST["Nom"])? $_POST["Nom"] : "";
$DateAdhesion = isset($_POST["DateAdhesion"])? $_POST["DateAdhesion"] : "";
$Position = isset($_POST["Position"])? $_POST["Position"] : "";
$Majeur = isset($_POST["Majeur"])? $_POST["Majeur"] : "";
$MoyenneCummulative = isset($_POST["MoyenneCummulative"])? $_POST["MoyenneCummulative"] : "";
$PaysEtudeInterl = isset($_POST["PaysEtudeInterl"])? $_POST["PaysEtudeInterl"] : "";
//identifier votre BDD
$database = "tpnote2";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost |votre login = root |votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

 //si le BDD existe, faire le traitement
 if ($_POST["button2"]) {
if ($db_found) {
 $sql = "SELECT * FROM societedhonneur";
 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
 echo "ID: " . $data['ID'] . '<br>';
 echo "Prénom: " . $data['Prenom'] . '<br>';
 echo "Nom:" . $data['Nom'] . '<br>';
 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
 echo "Poste: " . $data['Poste'] . '<br>';
 echo "Majeure: " . $data['Majeure'] . '<br>';
 echo "MoyenneCummulative: " . $data['MoyenneCummulative'] . '<br>';
 echo "PaysEtudeInterl: " . $data['PaysEtudeInterl'] . '<br>';
 }//end while
}
}//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else

echo"exercice suivant";

if ($_POST["button1"]) {
if ($db_found) {
 $sql = "SELECT * FROM societedhonneur ORDER BY MoyenneCummulative ASC";
 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
 echo "ID: " . $data['ID'] . '<br>';
 echo "Prénom: " . $data['Prenom'] . '<br>';
 echo "Nom:" . $data['Nom'] . '<br>';
 echo "DateAdhesion: " . $data['DateAdhesion'] . '<br>';
 echo "Poste: " . $data['Poste'] . '<br>';
 echo "Majeure: " . $data['Majeure'] . '<br>';
 echo "MoyenneCummulative: " . $data['MoyenneCummulative'] . '<br>';
 echo "PaysEtudeInterl: " . $data['PaysEtudeInterl'] . '<br>';
 }//end while
}
} else {
echo "Database not found";
}


    //fermer la connexion
    mysqli_close($db_handle);
?>