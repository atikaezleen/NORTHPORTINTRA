<?php 
session_start();
include('db.php');
	
	$id = $_SESSION['id'];
	$menu = $_POST['menu'];
	$rdid = $_POST['rdid'];
	
	$i=0;
	foreach ($rdid as $value)
	{

		pg_query($con,"INSERT INTO r_combo(menu_id,r_details_id) 
			VALUES('$menu[$i]','$value')")or die(pg_error());  
			 
			$i++;
	}	
	
		pg_query($con,"UPDATE reservation SET r_status='Pending' where rid='$id'")
	 			or die(pg_error()); 
			
			echo "<script>document.location='summary.php'</script>";   
	
	
?>