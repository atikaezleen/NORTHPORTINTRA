<?php
include('db.php');

 if (isset($_POST['update']))
 { 
	$id = $_POST['id'];
	$first = $_POST['first'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];	
	$status = $_POST['status'];	
	 
	 
	 pg_query($con,"UPDATE member SET member_first='$first',member_contact='$contact',member_address='$address',member_status='$status' where member_id='$id'")
	 or die(pg_last_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated member details!');</script>";
		echo "<script>document.location='members.php'</script>";
	
} 

