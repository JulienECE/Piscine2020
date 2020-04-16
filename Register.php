<?php require 'header.php'; ?>

<div class="container-fluid text-center">    
  <div class="row content">
  	
    
    <!-- Colonne du milieu-->

    <div class="col-sm-12"> 
    	<br>
      <h3>Bienvenue parmis nous veuillez renseigner vos informations pour vous enregistrer</h3>
      <br>
    	<center>
		    <form action="addlog.php" method="post" class="formulaire_val">
		      <table><br>
		          <tr><input type="text" placeholder="Nom" class="inputbasic firstinput" name="nom"/></tr>
		          <br>
			       <tr><input type="text" placeholder="Email" class="inputbasic" name="email"/></tr>
			       <br>
			       <tr><p>Choisir une photo de profil<p/></tr>
			       <tr><input type="file" class="" placeholder="a"/></tr>
			       <br>
			       <br>
			       <input type="submit" name="button" value="Valider"/>
		      </table>
		    </form>
		  </center>
   	</div>     
	 
</div>
</div>

<?php require 'footer.php'; ?>