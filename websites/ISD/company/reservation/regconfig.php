<?php
  
  include ("db.php");


  $first_name = ($_POST['first_name']);
  $middle_name = ($_POST['middle_name']);
  $last_name = ($_POST['last_name']);

  $username = ($_POST['username']);
  $password = ($_POST['password']);
  $email = ($_POST['email']);

  $staff_no = ($_POST['staff_no']);
  $staff_dept = ($_POST['staff_dept']);
  $staff_div = ($_POST['staff_div']);
  $staff_ext = ($_POST['staff_ext']);

  $phone_no = ($_POST['phone_no']);
  $signature = ($_POST['signature']);

  $sql = "INSERT INTO workflow.user (first_name,middle_name,last_name,username,password,email,staff_no,staff_dept,staff_div,staff_ext,phone_no,signature) VALUES ('$first_name','$middle_name','$last_name','$username','$password','$email','$staff_no','$staff_dept','$staff_div','$staff_ext','$phone_no','$signature')";
  

  if(pg_query($con,$sql)){
    echo "records added successfully.";

    //header('Location:register.php');

    //exit;
  } else{
    echo "ERROR: Could not able to execute $sql. ";
  }

  //pg_close($sql);
?>