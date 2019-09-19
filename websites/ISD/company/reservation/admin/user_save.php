<?php 

include('db.php');
	
	$name = $_POST['name'];
	$password = $_POST['password'];
	$username = $_POST['username'];
	
	
		pg_query($con,"INSERT INTO users (full_name,username,password,status) 
			VALUES('$name','$username','$password','active')")or die(pg_last_error());  
			echo "<script type='text/javascript'>alert('Successfully added new admin user!');</script>";
			echo "<script>document.location='user.php'</script>";   
	
	
?>