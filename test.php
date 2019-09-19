<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
 $db = pg_connect("host=localhost dbname=np_intra user=postgres password=pavee123");
// If form submitted, insert values into the database.
if (isset($_REQUEST['emp_staff_no'])){
      
	$emp_staff_no = stripslashes($_REQUEST['emp_staff_no']);   
	 
	$password = stripslashes($_REQUEST['password']);

	//$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into tbl_employee (emp_staff_no, password)
        VALUES ('$emp_staff_no', '".md5($password)."')";
        $result = pg_query($db,$query);
        if($result){
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3>
                  <br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="number" name="emp_staff_no" placeholder="Staff Number" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>