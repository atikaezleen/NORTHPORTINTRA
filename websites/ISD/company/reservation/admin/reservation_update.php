<?php 
session_start();
include('db.php');
	
	$id = $_POST['id'];
	$staff = $_POST['r_staff'];
	$first = $_POST['first'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$mode = $_POST['mode'];

	pg_query($con,"UPDATE reservation SET r_staff='$staff',r_first='$first',r_address='$address',r_contact='$contact',modeofpayment='$mode' where rid='$id'") or die(pg_last_error($con)); 
	echo "<script>document.location='reservation.php'</script>";   
	
	
?>
