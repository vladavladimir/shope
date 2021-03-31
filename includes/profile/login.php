<?php 
session_start();

include_once $_SERVER["DOCUMENT_ROOT"].'/classes/Users.php';

if (isset($_SESSION['username'])) {
	header('Location: profile.php');
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $user = new Users('', '', $username, '', '', $password);
  $login = $user->loginCheck();
  if ($login) {
    echo "<center><p style='color:green;font-size:26px;'>You have Login.Wellcome to Sneaker Shine</p></center>";

    header("Refresh:3; url=profile.php"); 
  }
}

include_once $_SERVER["DOCUMENT_ROOT"].'/includes/partials/header.php';
include_once 'nav.php';

 ?>

<form action="login.php" method="post" style="margin: 80px;">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your data with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <a href="register.php">You don't have a profile.Register here --></a>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>

<?php include_once $_SERVER["DOCUMENT_ROOT"].'/includes/partials/footer.php'; ?>