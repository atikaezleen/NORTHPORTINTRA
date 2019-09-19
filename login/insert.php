<?php
  $db_connection = pg_connect("host=localhost port=5432 dbname=db_intra user=postgres password=abc123");
  $first_name = pg_escape_string( $_POST['first_name']);   
  $last_name = pg_escape_string($_POST['last_name']); 
  $emp_staff_no = intval($_POST['emp_staff_no']); 
  $password = pg_escape_string($_POST['password']); 
  $email = pg_escape_string($_POST['email']); 
  $query = "INSERT INTO tbl_employee (first_name,last_name,emp_staff_no,password,email)VALUES('$first_name','$last_name','$emp_staff_no','$password','$email')"; 
  $result = pg_query($query); 
  
  if($result)
  
header('location: index.php');
else{
  echo "There was an error! Please contact administrator ".pg_last_error();
}
  

?>
