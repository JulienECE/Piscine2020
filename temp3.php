<?php 
	require 'util.php';
	init_php_session();
$_SESSION['categ']="Accessoire";
	header('Location: ./item.php');
exit();

?>

