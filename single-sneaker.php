<?php 
session_start();
include_once 'classes/Sneaker.php';

include_once 'classes/Cart.php';

include_once 'includes/partials/header.php';

include_once 'includes/partials/navbar.php'; 

$id = $_GET['id'];
$single = new Sneaker();
$shoe = $single->readSingle($id);



 
if (isset($_SESSION['username']) && isset($_POST['add'])) {
	
	$sneaker = new Cart();
	$sneaker->addToCart($shoe);

}

	    		
 ?>
<section>
	<center>
		<div class="card" style="width: 38rem;">
  			<img src="<?=$shoe->picture?>" class="card-img-top" alt="shoe">
  			<div class="card-body">
    			<h5 class="card-title"><?=$shoe->name?></h5>
    			<p class="card-text"><b> Price: <?=$shoe->price?></b></p>
 			</div>
  			<ul class="list-group list-group-flush">
			    <li class="list-group-item">Size: <?=$shoe->size?></li>
			    <li class="list-group-item">Color: <?=$shoe->color?></li>
			    <li class="list-group-item">Gender: <?=$shoe->gender?></li>
  			</ul>
	  		<div class="card-body">
	  			<form action="" method="post">
	  				<button type="submit" name="add">Add to Cart</button>
	  			</form>
	    		<a href="#" class="card-link">Add to Cart</a>
	    		<a href="/checkout.php" class="card-link">Go to Checkout</a>
	  		</div>
		</div>
	</center>
</section>	


<?php include_once 'includes/partials/footer.php'; ?>