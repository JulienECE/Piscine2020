<?php require 'header.php'; ?>
<?php require 'ColonneGauche.php'; ?>

<!-- Colonne du milieu-->
    <div class="col-sm-8"> 
    	<h4 align="left">Ferraille ou trésor</h4>
    	<div class="row">
    		<br>
    		<div class="col-md-4">
    			<div class="thumbnail">
					<p class="caption">Prix : 300€ (Vente par négociation)</p>
					<a href="#"><img src="img1.jpg"></a>
 					<input type="submit" name="buttonNégo" value="Négocier">
				</div>
			</div>
	    		<div class="col-md-4">
	    			<div class="thumbnail">
						<p class="caption">Prix actuel : 200€ (Vente par enchère)</p>
						<a href="#"><img src="img1.jpg"></a>
            			<input type="submit" name="buttonEnchere" value="Enchérir">
					</div>
				</div>
	    		<div class="col-md-4">
	    			<div class="thumbnail">
						<p class="caption">Prix : 200€ (Vente directe)</p>
						<a href="#"><img src="img1.jpg"></a>
            			<input type="submit" name="buttonAcheter" value="Acheter">
					</div>
				</div>
			</div>
		</div>

<?php require 'ColonneDroite.php'; ?>
<?php require 'footer.php'; ?>