
<?php
	require 'util.php';
	init_php_session();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="Styles.css">
  <link rel="stylesheet" href="slider.css">
  <script src="slider.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="fonctions.js"></script>
</head>
<body>

<!-- Style de la navBarre -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>

	<!-- Remplissage de la navBarre-->
    <div class="collapse navbar-collapse" id="myNavbar">
      	<ul class="nav navbar-nav">
	      	<li><img src="logo.png" height="50" width="70"></li>
	        <li class="active"><a href="index.php">Home</a></li>
	        <li class="menu-categorie"><a href="#">Catégorie</a>
	        	<ul class="submenu">
	      			<li><a href="Ferraille.php">Feraille ou Trésor</a></li>
	      			<li><a href="#">Bon pour le musée</a></li>
	      			<li><a href="#">Accessoire VIP</a></li>
	      		</ul>
	        </li>
	        <li><a href="Vendre.php">Vendre</a></li>
     	</ul>
     	<ul class="nav navbar-nav navbar-right">
      		<li><div id="searchbar">
               		<form action="" class="formulaire">
               			<input class="champ" type="text"/>
               			<input class="bouton" type="button" value="Rechercher" />  
               		</form>
            	</div>
            </li>
            <li><span class="glyphicon glyphicon-shopping-cart" style="color: white;"></span></li>
	          <li><a href="Panier.php">Panier</a></li>
	          <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="Register.php">Register</a></li>
	    </ul>
    </div>
  </div>
</nav>