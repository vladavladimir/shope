<?php 

session_start();
include_once '../../classes/Users.php';
if (!isset($_SESSION['username'])) {
	header('Location: login.php');
}
if (isset($_POST['logout'])) {
  $logout = new Users();
  $logout->logout();
  
}

$user = $_SESSION['username'];
$getUser = new Users('','',$user);
$output = $getUser->getUser();


include_once '../partials/header.php';
include_once 'nav.php';
 ?>



 <center><div class="card" style="width: 48rem;margin: 60px;font-size: 22px;">
  <div class="card-body">
    <h1 class="card-title"><?= $output->firstname .' '. $output->lastname; ?></h1>
    <h2 class="card-subtitle mb-2 text-muted">Username: <?= $output->username; ?></h2>
    <p class="card-text">Addres : <?= $output->addres; ?></p>
    <p class="card-text">Email : <?= $output->email; ?></p>
    <form action="" method="post">
      <button class="card-link" type="submit" name="update" id="up">Update profile</button>
      <button class="card-link" type="submit" name="logout" id="del">Logout</button>
    </form>
  </div>
</div></center>

<?php 

if (isset($_POST['update'])) {
  echo "<form action='' method='POST'>
    <center><fieldset id='fieldset'>
      <label for='firstname'>Firstname:</label><br>
      <input type='text' name='firstname' id='lable' value='".$output->firstname."'><br>
      <label for='lastname'>Lastname:</label><br>
      <input type='text' name='lastname' id='lable' value='".$output->lastname."'><br>
      <label for='username'>Username:</label><br>
      <input type='text' name='username' id='lable' value='".$output->username."'><br>
      <label for='addres'>Addres:</label><br>
      <input type='text' name='addres' id='lable' value='".$output->addres."'><br>
      <label for='email'>Email:</label><br>
      <input type='text' name='email' id='lable' value='".$output->email."'><br>
      <label for='password'>Password:</label><br>
      <input type='password' name='password' id='lable'><br>
      <button type='submit' name='profupd' id='log'>Update your profile</button>
    </fieldset></center>
  </form>
  <center>";  
}

if (isset($_POST['profupd'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_SESSION['username'];
    $addres = $_POST['addres'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $upde = new Users($firstname,$lastname,$username,$addres,$email,$password);
    $upde->update();  
    

}
 ?>
<style type="text/css">
  #fieldset{
  border: 2px solid black;
  border-radius:20px;
  font-size: 20px;
}
#lable{
  font-size: 22px;
  background-color: lightblue;
}
#log{
  border-radius: 10px;
  font-size: 22px;
  font-weight: 600;
  margin-top: 20px;
  padding: 20px;
  background-color: lightblue;
}
#log:hover{
  background-color: lightgreen;
}
#up{
  padding: 10px;
  border-radius: 10px;
  font-size: 22px;
  font-weight: 600;
  background-color: green;
}

#del{
  padding: 10px;
  border-radius: 10px;
  font-size: 22px;
  font-weight: 600;
  background-color: red;
}
</style>

<?php include_once '../partials/footer.php'; ?>