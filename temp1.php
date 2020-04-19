<?php 
	require 'util.php';
	init_php_session();
$_SESSION['categ']="Haut";
	header('Location: ./item.php');
exit();

?>

