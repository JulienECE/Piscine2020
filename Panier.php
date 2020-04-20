<?php require 'header.php'; ?>
<!-- Colonne du milieu-->
<?php
		 foreach($_GET as $name => $content) { // Most people refer to $key => $value
		  
		}

		if(!isset($_SESSION['tableau'])){
			$tableau = Array();
			$prices = Array();
			$_SESSION['tableau']=$tableau;
		}

		if(isset($name)){
			$constante = 0;
			foreach($_SESSION['tableau'] as $element)
			{
				if($element==$name)
				{
					$constante=1;
				}
				 // affichera $prenoms[0], $prenoms[1] etc.
			}
			if($constante==0)
			{
				array_push($_SESSION['tableau'], $name);
			}
			$nb = count($_SESSION['tableau']);//longueur du tab
			
		}
		

?>

<?php
		
		$database = "bdd";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		
		if ($db_found) {

?>
		<div class="container">
			<center>
			<h3>Votre Panier<br><br></h3>
			<div class="table-responsive">
				
			<table width="100%">
				<tr>
					<th width="70%"> Article</th>
					<th width="15%"> Etat</th>
					<th width="15%"> Prix</th>
		<?php

		//tester s'il y a de résultat
		for($i=0;$i<$nb;$i++){

		
		$sql = "SELECT * FROM item WHERE ID = '".$_SESSION['tableau'][$i]."' LIMIT 10";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result))
			{
				?>

		
					



				<tr>  
                            <td><?php echo $data['TITRE']; ?></td>  
                            <td><?php echo $data['ETAT']; ?></td>  
                            <td><?php echo $data['PRIX']; ?> €</td>  
                            
                </tr>  
				
			 	

		<?php
		$prices[$i] = $data['PRIX'];
		}
		
		}
		$total= array_sum($prices);
		
		
		?>
		<tr>  
                               <td colspan="3" align="right"><h4>Total :  </h4></td>  
                               <td align="right"><h4> <?php echo $total; ?>€ </h4></td>  
                               
                                
                          </tr>  


				</tr>
			</table>
			
		</div>
				<form action="paiement.php" method="get" class="formulaire_val">	
				<input type="submit" name="'.$_SESSION['tableau'].'" value="Passer la commande" >
				</form>
			</center>
		</div>
		<?php



		}
		
		else
		{
			header('Location: ./index.php');
			exit();
		}
			?>






<?php require 'footer.php'; ?>