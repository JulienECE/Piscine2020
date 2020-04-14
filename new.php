<!DOCTYPE html>
<html lang="en">
<head>
  <title>ECE Ebay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="Styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Hauteur du site */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    nav li {
    	list-style-type: none;
    }

    nav a {
    	display: inline-block;
    	text-decoration: none;
    }

    .submenu {
    	display: none;
    }

    nav li:hover .submenu {
    	display: inline-block;
    	position: absolute;
    	top: 100%;
    	left: 0px;
    	padding: 0px;
    	z-index: 1000;
    }

    .submenu li {
    	border-bottom: 1px solid #CCC;
    }

    .submenu li a {
    	padding: 15px 30px;
    	font-size: 13px;
    	color: #222538;
    	width: 200px; 
    }

    .menu-categorie .submenu{
    	background-color: lightgrey;
    }

    .submenu li:hover a {
    	color: black;
    	font-weight: bold;
    }

    #searchbar{position: relative; width:500px; height:auto; padding-top: 10px;}

	.formulaire               {display:inline-block;}
	.formulaire .champ       {width:400px; height:;}
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: black;
      color: white;
      padding: 5px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>


    <div class="collapse navbar-collapse" id="myNavbar">
      	<ul class="nav navbar-nav">
	      	<li><img src="logo.png" height="50" width="70"></li>
	        <li class="active"><a href="#">Home</a></li>
	        <li class="menu-categorie"><a href="categorie.html">Catégorie</a>
	        	<ul class="submenu">
	      			<li><a href="#">Feraille ou Trésor</a></li>
	      			<li><a href="#">Bon pour le musée</a></li>
	      			<li><a href="#">Accessoire VIP</a></li>
	      		</ul>
	        </li>
	        <li><a href="Vendre.html">Vendre</a></li>
     	</ul>
     	<ul class="nav navbar-nav navbar-right">
      		<li><div id="searchbar">
               		<form action="" class="formulaire">
               			<input class="champ" type="text"/>
               			<input class="bouton" type="button" value="Rechercher" />  
               		</form>
            	</div>
            </li>
	        <li><a href="Panier.html">Panier</a></li>
	        <li><a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    </ul>
    </div>
  </div>
</nav>

 
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p>Trier par :</a> </p>
      <p><a href="#">Prix croissant</a></p>
      <p><a href="#">Prix décroissant</a></p>
      <p><a href="#">Meilleures ventes</a></p>
      <p><a href="#"></a></p>
      <p>...</p>
    </div>

    <div class="col-sm-8"> 
    	<div class="row">
    		<br>
    		<div class="col-md-4">
    			<div class="thumbnail">
					<a href="#">
 						<img src="img1.jpg">
 						<p class="caption">300€</p>
 					</a>
				</div>
			</div>
	    		<div class="col-md-4">
	    			<div class="thumbnail">
						<a href="#">
	 						<img src="img1.jpg">
	 						<p class="caption">200€</p>
	 					</a>
					</div>
				</div>
	    		<div class="col-md-4">
	    			<div class="thumbnail">
						<a href="#">
	 						<img src="img1.jpg">
	 						<p class="caption">Prix</p>
	 					</a>
					</div>
				</div>
			</div> 
			<div class="row">
    		<div class="col-md-4">
    			<div class="thumbnail">
					<a href="#">
 						<img src="img1.jpg">
 						<p class="caption">Prix</p>
 					</a>
				</div>
			</div>
	    		<div class="col-md-4">
	    			<div class="thumbnail">
						<a href="#">
	 						<img src="img1.jpg">
	 						<p class="caption">Prix</p>
	 					</a>
					</div>
				</div>
	    		<div class="col-md-4">
	    			<div class="thumbnail">
						<a href="#">
	 						<img src="img1.jpg">
	 						<p class="caption">Prix</p>
	 					</a>
					</div>
				</div>
			</div>     
   		</div>


    <div class="col-sm-2 sidenav">
      <div><h3>Meilleures offres</h3></div>
      <div class="carousel-wrapper">
  <span id="item-1"></span>
  <span id="item-2"></span>
  <span id="item-3"></span>
  <div class="carousel-item item-1">
    
    <a class="arrow arrow-prev" href="#item-3"></a>
    <a class="arrow arrow-next" href="#item-2"></a>
    <h2 style="margin-left: -20px; margin-top: -100px; text-align: top; color:red; position:absolute;">Oeuf</h2>
    <p style="margin-left: -40px; margin-top: 250px; color:red; position:absolute;">Bel oeuf.</p>
  </div>

  
  <div class="carousel-item item-2" >
    <h2 style="margin-left: -20px; margin-top: -100px; text-align: top; color:red; position:absolute;">Cap</h2>
    <p style="margin-left: -40px;margin-top: 250px;   color:red;position:absolute;">Belle casquette.</p>
    <a class="arrow arrow-prev" href="#item-1"></a>
    <a class="arrow arrow-next" href="#item-3"></a>
  </div>
  
  <div class="carousel-item item-3">
    <h2 style="margin-left: -20px; margin-top: -100px; text-align: top; color:red; position:absolute;">Crown</h2>
    <p style="margin-left: -40px;margin-top: 250px; color:red; position:absolute;">Belle couronne.</p>
    <a class="arrow arrow-prev" href="#item-2"></a>
    <a class="arrow arrow-next" href="#item-1"></a>
  </div>
</div>
    </div>
  </div>
      
</div>





	<footer class="container-fluid text-center">
  		<p>Ebay ECE 2020 &copy; </p>
	</footer>
</body>
</html>