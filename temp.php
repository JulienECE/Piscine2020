<?php 
	require 'util.php';
	init_php_session();
$_SESSION['categ']="Chapeau";
	header('Location: ./item.php');
exit();

?>

