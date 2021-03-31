<?php 

include_once $_SERVER["DOCUMENT_ROOT"].'/includes/database/database.php';

class Users extends Database
{

	public null|string $firstname;
	public null|string $lastname;
	public null|string $username;
	public null|string $addres;
	public null|string $email;
	public null|string $password;
	public string $hash;
	
	

	public function __construct(null|string $firstname=null, null|string $lastname=null, null|string $username=null, null|string $addres=null, null|string $email=null, null|string $password=null)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->username = $username;
		$this->addres = $addres;
		$this->email = $email;
		$this->password = $password;
		$this->hash = password_hash($password, PASSWORD_BCRYPT);
		
	}

	public function insertUsers(){
		try{
			$db = $this->connection();
			$check = $db->prepare("SELECT username,email FROM users");
			$check->execute();
			$userRow = $check->fetchAll(PDO::FETCH_ASSOC);
			$chk = true;
			foreach ($userRow as $row) {
				if($this->username==$row['username'] || $this->email==$row['email']){	
					$chk = false;	
				}
			}

			if(!$chk) {
				// header('Location: login.php?error=usrn-email');
			} else {
				$stmt = $db->prepare("INSERT INTO users (firstname,lastname,username,addres,email,password) VALUES (:firstname, :lastname, :username, :addres, :email, :hash)");
				$stmt->execute(['firstname'=>$this->firstname,'lastname'=>$this->lastname,'username'=>$this->username,'addres'=>$this->addres,'email'=>$this->email,'hash'=>$this->hash]);
			}
		} catch (Exception $e) {
			var_dump($e);
		}
	}

	public function loginCheck(){

		$db = $this->connection();
		$stmt = $db->prepare("SELECT * FROM users WHERE username= :username");
		$stmt->execute(['username'=>$this->username]);
		$usersRow = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($stmt->rowCount() > 0) {
			if(password_verify($this->password, $usersRow['password'])) {
				$_SESSION['username'] = $usersRow['username'];
				return true;
			} else {
				echo "<center><p style='color: red;font-size:20px;'>Wrong credentials..Pls try again... </p></center>";
				return false;
			}
		} else {
			echo "<p style='color: red;font-size:20px;'> Error go back... </p>";
			return false;
		}
		
	}

	public function logout(){
			session_destroy();
			echo "<center><p style='color:green;font-size:26px;'>You have Logout.Sead to see you go away...</p></center>";
			header( "Refresh:3; url=/index.php");
		}

	public function getUser(){
		$db = $this->connection();
		$stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
		$stmt->execute(['username'=> $this->username]); 
		$usersRow = $stmt->fetch(PDO::FETCH_OBJ);
		return $usersRow;
		
		}

	public function update(){	
		try {
			$db = $this->connection();
			$check = $db->prepare("SELECT * FROM users WHERE username=:username");
			$check->execute(['username'=>$this->username]);
			$userRow = $check->fetch(PDO::FETCH_ASSOC);
			if($userRow>0) {
			$stmt = $db->prepare("UPDATE users SET firstname = :firstname, lastname = :lastname, username = :username, addres = :addres, email = :email, password = :hash WHERE username= :username");
				$stmt->execute(
					array(
						'firstname' => $this->firstname,
						'lastname' => $this->lastname,
						'username' => $this->username,
						'addres' => $this->addres,
						'email' => $this->email,
						'hash' => $this->hash
					)
				);
				echo "<center><p style='color:green;font-size:26px;'>You have updated your profile...</p></center>";
			} else {
				header("Location: profil.php?error=no-user");
			}
			} catch (Exception $e) {
				var_dump($e);
			}

	}	

}





 ?>