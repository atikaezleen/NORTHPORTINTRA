<?php 

include('db.php');
	
	$team = $_POST['team'];
	
	$result = pg_query($con,"SELECT team_name FROM team where team_name='$team'"); 
        $count = pg_num_rows($result);

        if ($count==0)
        {
			pg_query($con,"INSERT INTO team(team_name) 
				VALUES('$team')")or die(pg_last_error());  
				echo "<script type='text/javascript'>alert('Successfully added new team!');</script>";
				echo "<script>document.location='teams.php'</script>";   
		}	
		else
		{
				echo "<script type='text/javascript'>alert('Team already added!');</script>";
				echo "<script>document.location='teams.php'</script>";   
		}
	
?>