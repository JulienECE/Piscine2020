<?php require 'header.php'; ?>

<div class="container-fluid text-center">    
  <div class="row content">
  	<!-- Colonne de gauche-->
    <div class="col-sm-1 sidenav"></div>

<!-- Colonne du milieu-->
    <div class="col-sm-8"> 
    	<h3>Votre Panier<br><br></h3>
    	<div class="row">
	    	<div class="col-sm-12 bg-warning">
					<tr>
						<div class="col-sm-1"><td>ID</td></div>
						<div class="col-sm-3"><td>Nom de l'article</td></div>
						<div class="col-sm-6"><td>Description</td></div>
						<div class="col-sm-2"><td>Prix</td></div>
					</tr>
			</div>
			<div class="col-sm-12">
					<tr>
						<div class="col-sm-1"><td>1</td></div>
						<div class="col-sm-3"><td>...</td></div>
						<div class="col-sm-6"><td>....</td></div>
						<div class="col-sm-2"><td>....€</td></div>
					</tr>
			</div>
			<div class="col-sm-12">
					<tr>
						<div class="col-sm-1"><td>2</td></div>
						<div class="col-sm-3"><td>...</td></div>
						<div class="col-sm-6"><td>....</td></div>
						<div class="col-sm-2"><td>....€</td></div>
					</tr>
			</div>
			<div class="col-sm-12">
					<tr>
						<div class="col-sm-1"><td>3</td></div>
						<div class="col-sm-3"><td>...</td></div>
						<div class="col-sm-6"><td>....</td></div>
						<div class="col-sm-2"><td>....€</td></div>
					</tr>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12 bg-warning">
				<tr>
					<div class="col-sm-6"><td>Nombre total d'articles</td></div>
					<div class="col-sm-6"><td>Prix total</td></div>
				</tr>
			</div>
			<div class="col-sm-12 bg-warning">
				<tr>
					<div class="col-sm-6"><td>....</td></div>
					<div class="col-sm-6"><td>...€</td></div>
				</tr>
			</div>
		</div>

		
    </div>

<?php require 'ColonneDroite.php'; ?>
<?php require 'footer.php'; ?>