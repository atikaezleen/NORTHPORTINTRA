<?php 

include('db.php');
	
	$id = $_POST['id'];
	$team = $_POST['team'];


		pg_query($con,"UPDATE reservation SET team_id='$team' where rid='$id'")or die(pg_last_error($con)); 

			echo "<script type='text/javascript'>alert('Successfully assigned a team!');</script>";
			echo "<script>document.location='reservation.php'</script>";   
	
	
?>