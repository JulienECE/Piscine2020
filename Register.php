<?php require 'header.php'; ?>

<div class="container-fluid text-center">    
  <div class="row content">
  	<!-- Colonne de gauche-->
    <div class="col-sm-1 sidenav"></div>
    <!-- Colonne du milieu-->

    <div class="col-sm-8"> 
      <h4>Bienvenue parmis nous veuillez renseigner vos informations pour vous enregistrer</h4>
    	<center>
		    <form action="addlog.php" method="post" class="formulaire_val">
		      <table><br>
		          <tr><input type="text" placeholder="Nom" class="inputbasic firstinput" name="nom"/></tr>
			       <tr><input type="text" placeholder="Email" class="inputbasic" name="email"/></tr>
			       <tr><p>Choisir une photo de profil<p/></tr>
			       <tr><input type="file" class="" placeholder="a"/></tr>
			       <br>
			       <input type="submit" name="button" value="valider"/>
		      </table>
		    </form>
		  </center>
   	</div>     
	  <div class="col-sm-3 sidenav"></div>
</div>
</div>

<?php require 'footer.php'; ?>