<?php require 'header.php'; ?>
<!-- Colonne du milieu-->
<?php
		 foreach($_GET as $name => $content) { // Most people refer to $key => $value
		  
		}
		if(!isset($_SESSION['tableau'])){
			$tableau = Array();
			$_SESSION['tableau']=$tableau;
		}
		$constante = 0;
		foreach($_SESSION['tableau'] as $element)
		{
			if($element==$name)
			{
				$constante=1;
			}
			echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
		}
		if($constante==0)
		{
			array_push($_SESSION['tableau'], $name);
		}


?>
<div class="container">
	<center>
    	<h3>Votre Panier<br><br></h3>
    	<div class="container-fluid">
	    	<div id="panier" class="row">
						<tr>
							<div class="col-sm-1"><td>ID</td></div>
							<div class="col-sm-3"><td>Nom de l'article</td></div>
							<div class="col-sm-6"><td>Description</td></div>
							<div class="col-sm-2"><td>Prix</td></div>
						</tr>
						<tr>
							<div class="col-sm-1"><td>1</td></div>
							<div class="col-sm-3"><td>...</td></div>
							<div class="col-sm-6"><td>....</td></div>
							<div class="col-sm-2"><td>....€</td></div>
						</tr>
						<tr>
							<div class="col-sm-1"><td>2</td></div>
							<div class="col-sm-3"><td>...</td></div>
							<div class="col-sm-6"><td>....</td></div>
							<div class="col-sm-2"><td>....€</td></div>
						</tr>
						<tr>
							<div class="col-sm-1"><td>3</td></div>
							<div class="col-sm-3"><td>...</td></div>
							<div class="col-sm-6"><td>....</td></div>
							<div class="col-sm-2"><td>....€</td></div>
						</tr>
			</div>
			<br>
			<div id="panier" class="row">
					<tr>
						<div class="col-sm-6"><td>Nombre total d'articles</td></div>
						<div class="col-sm-6"><td>Prix total</td></div>
					</tr>
				
					<tr>
						<div class="col-sm-6"><td>....</td></div>
						<div class="col-sm-6"><td>...€</td></div>
					</tr>
			</div>
			<br>
				<tr><td><form action="paiement.php" method="get" class="formulaire_val">	
				<input type="submit" name="'.$_SESSION['tableau'].'" value="Passer la commande" align="right">
				</form></td></td></tr>
				<br><br><br><br><br>
				
	</div>
</center>
</div>

<?php require 'footer.php'; ?>