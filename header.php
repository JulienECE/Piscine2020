
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
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/8108633c7c.js" crossorigin="anonymous"></script>

  <link rel="stylesheet"  href="slick.css"/>
  <link rel="stylesheet"  href="slick-theme.css"/>
  <link rel="stylesheet"  href="style.css"/>
  <style>
     h3, h4 {
      font-family: 'Baloo Paaji 2', cursive;
    }
</style>
  
  

  
  
</head>
<body>

<!-- Style de la navBarre -->
 <header>
   <div class="container">
     <div class="row">
       <div class="col-md-4 col-sm-12 col-12"> </div>
       <div class="col-md-4 col-12 text-center">
        <a href="index.php">
         <h2 class="my-md-3 site-title " > ECE Ebay </h2>
        </a>
        </div>
        <div class="col-md-4 col-12 text-right">
          <p class="my-md-4 header-links">
            <a href="signin.php" class="px-2">Se connecter</a>
            <a href="Register.php" class="px-1">Nouveau compte</a>
            
          </p>
          
        </div>

     </div>
   </div>
   <div class="container-fluid p-0">
     <nav class="navbar navbar-expand-lg navbar-light bg-white" style="background-color: #6d45cc;">
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">ACCUEIL <span class="sr-only">(current)</span></a>
        </li>
           
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CATEGORIES
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Ferraille.php">Ferraille ou Trésor</a>
            <a class="dropdown-item" href="Ferraille.php">Bon pour le Musée</a>
            
            <a class="dropdown-item" href="Ferraille.php">Accessoire VIP</a>
          </div>
      </li>



        <li class="nav-item">
          <a class="nav-link" href="Vendre.php">VENDRE</a>
        </li>
        
        
      </ul>
    </div>

  

    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Rechercher</button>
    </form>

    <div class="navbar-nav">
      <a class="panier" href="Panier.php">
      <li class="nav-item border rounded-circle mx-2 basket-icon">
        <i class="fas fa-shopping-basket p-2"></i>
      </li>
      </a>
    </div>

    </nav>
     </div>
 </header>
 <div class="wrapper"> 