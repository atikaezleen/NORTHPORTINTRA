<?php
include('db.php');

 if (isset($_POST['update']))
 { 
	$id = $_POST['id'];
	$team = $_POST['team'];
	
	 pg_query($con,"UPDATE team SET team_name='$team' where team_id='$id'")
	 or die(pg_last_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated team details!');</script>";
		echo "<script>document.location='teams.php'</script>";
	
} 

