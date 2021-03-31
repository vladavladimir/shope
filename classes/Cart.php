<?php 

include_once $_SERVER["DOCUMENT_ROOT"].'/includes/database/database.php';


class Cart extends Database
{
	
	
	
	

	public function addToCart($sneaker){
		
		if (isset($_SESSION['cart'])) {

			$item = [];
			$idIndex = 0;
		
			foreach ($_SESSION['cart']['items'] as $key=> $value) {
				
				if($value['itemId'] == $sneaker->id){

					$item = $value;
					$idIndex = $key;
					break;
				}
			}

			if(count($item) > 0){

				$_SESSION['cart']['items'][$idIndex]['amount']++;
				$_SESSION['cart']['total'] = (float) $_SESSION['cart']['total'] + (float) $sneaker->price;
			}else{

				array_push($_SESSION['cart']['items'], ['itemId'=> $sneaker->id, 'amount'=> 1]);
					$_SESSION['cart']['total'] = (float) $_SESSION['cart']['total'] + (float) $sneaker->price;
			}
		
		}else{
		
			$_SESSION['cart'] = ['items'=>[['itemId'=> $sneaker->id, 'amount'=> 1]], 'total'=> $sneaker->price];

		}

		var_dump($_SESSION);
	
	}
}


 ?>