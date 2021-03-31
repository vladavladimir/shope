<?php 

include_once 'includes/database/database.php';

class Sneaker extends Database
{

	public function getSneaker(){
		$db = $this->connection();
		$stmt = $db->prepare("SELECT id,name,picture,price FROM sneakers");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}

	public function readSingle($id){
		try{
			$db = $this->connection();
			$stmt = $db->prepare("SELECT * FROM sneakers WHERE id= :id");
			$stmt->execute(['id'=>$id]);
			$result = $stmt->fetch(PDO::FETCH_OBJ);
			return $result;
				
			} 
		 catch (Exception $e) {
			var_dump($e);
		}
				
	}

}


 ?>