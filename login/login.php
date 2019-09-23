
<?php
 include('db.php');
if (isset($_POST['submit'])){
	 $emp_staff_no = pg_escape_string($con, $_POST['emp_staff_no']);
	 $password = pg_escape_string($con, $_POST['password']);
 
$resu = "SELECT * FROM workflow.tbl_employee WHERE emp_staff_no='$emp_staff_no' and password='$password'";
$result = pg_query($resu) or die(pg_last_error());
$count = pg_num_rows($result);
if ($count == 1){
	echo "You are logged in";
	
}else {
	echo "Login Failed";
}
}
  
