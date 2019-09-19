<?php
include('db.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['id'];
	 $name = $_POST['name'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $status = $_POST['status'];
	 
	 
	 pg_query($con,"UPDATE users SET full_name='$name',username='$username',password='$password',status='$status' where user_id='$id'")
	 or die(pg_last_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated user details!');</script>";
		echo "<script>document.location='user.php'</script>";
	
} 

