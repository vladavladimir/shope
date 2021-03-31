<section>
	<div class="container" id="content">
		<?php 
			$sneakers = new Sneaker();
			$all_sneakers = $sneakers->getSneaker();
			if (isset($_SESSION['username']) && isset($_POST['add'])) {
				
			}

	 	?>
		<div class="row" style="margin-top:50px;">
			<?php 
				foreach ($all_sneakers as $sneaker ):
		 	?>
			<div class="col-lg-4">
				<div class="card" style="width: 18rem; margin: 20px;">
			  		<a href='single-sneaker.php?id=<?= $sneaker->id ?>'><img src="<?= $sneaker->picture; ?>" class="card-img-top" alt="Patike" style="width:285px; height:200px;object-fit: cover;"></a>
			  		<div class="card-body">
			    	<h5 class="card-title"><?= $sneaker->name; ?></h5>
			    	<p class="card-text">Price : <?= $sneaker->price; ?></p>
			    	<form method="post" action="">
			    		<button type="submit" name="add">Add to Cart</button>
			    	</form>
		  			</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</section>