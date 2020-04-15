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
	        <li class="active"><a href="#">Home</a></li>
	        <li class="menu-categorie"><a href="#">Catégorie</a>
	        	<ul class="submenu">
	      			<li><a href="FerailleOuTresor.html">Feraille ou Trésor</a></li>
	      			<li><a href="BonMusee.html">Bon pour le musée</a></li>
	      			<li><a href="Login.html">Accessoire VIP</a></li>
	      		</ul>
	        </li>
	        <li><a href="#">Vendre</a></li>
     	</ul>
     	<ul class="nav navbar-nav navbar-right">
      		<li><div id="searchbar">
               		<form action="" class="formulaire">
               			<input class="champ" type="text"/>
               			<input class="bouton" type="button" value="Rechercher" />  
               		</form>
            	</div>
            </li>
            <li><li><span class="glyphicon glyphicon-shopping-cart" style="color: white;"></span></li>
	          <li><a href="#">Panier</a></li>
	        <li><span id="Log" class="glyphicon glyphicon-log-in" onclick="salutation()"></span><p id="Log" onclick="salutation()"> Login</p></li>
			<li><a href="#">Register</a></li>
	    </ul>
    </div>
  </div>
</nav>


<div class="container-fluid text-center">    
  <div class="row content">
  	<!-- Colonne de gauche-->
    <div class="col-sm-2 sidenav">
      <p>Trier par :</a> </p>
      <p><a href="#">Prix croissant</a></p>
      <p><a href="#">Prix décroissant</a></p>
      <p><a href="#">Meilleures ventes</a></p>
      <p><a href="#"></a></p>
      <p>...</p>
    </div>

    <!-- Colonne du milieu-->

    <div class="col-sm-8"> 
    	<h3 align="left">Bienvenue sur Ebay ECE !</h3>
    	<h5 align="left">Nos meilleures ventes : </h5>
    	<div class="row">
    		<br>
			<center>
		<form action="testlog.php" method="post" class="formulaire_val">
		<table>
		<br>
		<tr>
			<input type="text" placeholder="Nom" class="inputbasic firstinput" name="nom"/>
			</tr>
			<tr>
			<input type="text" placeholder="Email" class="inputbasic" name="email"/>
			</tr>
			<tr>
			<p>Choisir une photo de profil<p/>
			</tr>
			<tr>
			<input type="file" class="" placeholder="a"/>
			</tr>
			<br>
			<input type="submit" name="button" value="valider"/>
		</table>
		</form>
		<center/>
   		</div>
      
	</div>
      
	      <div class="col-sm-2 sidenav">

    </div>
	  
</div>




	<!--Footer-->
	<footer class="container-fluid text-center">
  		<p>Ebay ECE 2020 &copy; </p>
	</footer>
</body>
</html>