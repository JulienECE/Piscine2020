<?php require 'header.php'; ?>

<div class="container text-center">    
	<div class="row content">
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
						<tr><input type="text" placeholder="Adresse" class="inputbasic" name="adresse"/></tr>
			       		<br>
						<tr><input type="text" placeholder="Ville" class="inputbasic" name="ville"/></tr>
			       		<br>
						<tr><input type="text" placeholder="Code Postal" class="inputbasic" name="cp"/></tr>
			       		<br>
						<tr><input type="text" placeholder="Pays" class="inputbasic" name="pays"/></tr>
			       		<br>
						<tr><input type="text" placeholder="Portable" class="inputbasic" name="portable"/></tr>
			       		<br>
			       		<br>
			       		<input type="submit" name="button" value="Valider"/>
		      		</table>
		    	</form>
		    	<br><br><br><br>
		  	</center>
   		</div>     
	</div>
</div>

<?php require 'footer.php'; ?>