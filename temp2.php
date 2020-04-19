<?php 
	require 'util.php';
	init_php_session();
$_SESSION['categ']="Bas";
	header('Location: ./item.php');
exit();

?>

