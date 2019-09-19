<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
   <link rel="stylesheet" href="css/style.css">
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<style>
body, html {
  height: 99%;
}

.bg {
  /* The image used */
  background-image: url("org3.jpg");

  /* Full height */
  height: 101%; 

  opacity:0.8;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
</style>



</head>

<body>

<div class="bg">
<div class="logo text-center">
  <h1></h1>
</div>
<?php
 $db = pg_connect("host=localhost dbname=db_intra user=postgres password=abc123");
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['emp_staff_no'])){
     // removes backslashes
	$emp_staff_no = stripslashes($_REQUEST['emp_staff_no']);
    //escapes special characters in a string
	$emp_staff_no = pg_escape_string($db,$emp_staff_no);
	$password = stripslashes($_REQUEST['password']);
	$password = pg_escape_string($db,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM tbl_employee WHERE emp_staff_no=$emp_staff_no
        and password='".md5($password)."'";
	    $result = pg_query($db,$query) or die(pg_last_error());
	    $rows = pg_num_rows($result);
        if($rows==1){
	    $_SESSION['emp_staff_no'] = $emp_staff_no;
            // Redirect user to index.php
	    header("Location: ../index.php");
         }else {
         echo '<script type="application/javascript">alert("Account Not Found Please Register!"); window.location.href = "'.'";</script>';

	}
    }else{
?>
<br><br><br><br><br><br><br><br><br><br>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title"> <img src="logo.png" alt="logo" style="height:90px;"></h2>
	<h3>WELCOME TO INTRANET</h3>
    <form action="" method="post" name="login">
      <div class="input-group">
        <input type="text" name="emp_staff_no"   placeholder="" required>
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <input  type="password" name="password" placeholder="" />
        <span class="lighting"></span>
      </div>
      <button type="submit" type="submit" value="Login">Login</button>
      <div class="clearfix supporter">
        <div class="pull-left remember-me">
          <a class="forgot pull-right" href="registration.php">Sign Up</a>
          </div>
		  <a class="forgot pull-right" href="recover_pass.php">Forgot Password?</a>
      </div>
    </form>
  </div>
  
</div>



<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script  src="js/index.js"></script>



<?php } ?>

</body>

</html>
