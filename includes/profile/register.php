<?php  

include_once '../../classes/Users.php';

if (isset($_SESSION['username'])) {
	header('Location: profile.php');
  }
if (isset($_POST['register'])) {
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $username=$_POST['username'];
  $addres=$_POST['addres'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  if ($username =="" || $lastname=="" || $username=="" || $addres=="" || $email=="") {
    echo  '<center><p style="color:red; font-size: 26px;">Pls fill all input fields</p></center>';
  } elseif($password == "" && strlen($password) <= 4) {
    echo  '<center><p style="color:red; font-size: 26px;">Pls insert password at least 4 characters</p></center>';
  }  else {
    $reg = new Users($firstname, $lastname, $username, $addres, $email, $password);
    $reg->insertUsers();
  } 
  
   echo "<center><p style='color:green;font-size:26px;'>You have succesfuly register...</p></center>";
    header( "Refresh:2; url=login.php");
  
}

include_once '../partials/header.php';
include_once 'nav.php';

?>

<form class="row g-3 needs-validation" novalidate style="margin: 60px;" method="post" action="register.php">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name:</label>
    <input type="text" class="form-control" name="firstname" id="validationCustom01" placeholder="Enter your name hear..." required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name:</label>
    <input type="text" class="form-control" name="lastname" id="validationCustom02" placeholder="Enter your lastname hear..." required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username:</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" name="username" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Addres (City, County, Streat, House number) :</label>
    <input type="text" class="form-control" name="addres" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Email:</label>
    <input type="text" class="form-control" name="email" id="validationCustom04" required>
    <div class="invalid-feedback">
      Please provide a valid email.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Password (at least 4 characters) :</label>
    <input type="password" class="form-control" name="password" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <a href="login.php"><-- You have proflie. Go to Login</a>
      <div class="invalid-feedback">
        You must agree before submitting.

      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="register">Register</button>
  </div>
</form>

<?php include_once '../partials/footer.php'; ?>