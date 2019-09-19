<?php
include('db.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['id'];
	 $team = $_POST['team'];
	 $members = $_POST['members'];
	 
	 pg_query($con,"delete from team_member WHERE team_id='$id' and member_id NOT IN (".implode(',',$members).")")or die(pg_last_error());

	foreach ($members as $value)
	{
		$query=pg_query($con,"select * from team_member where team_id='$id' and member_id='$value'")or die(pg_last_error($con));
      		$count=pg_num_rows($query);

      		if ($count==0)
      		
      		{
				pg_query($con,"INSERT INTO team_member(team_id,member_id) VALUES('$team','$value')")or die(pg_last_error());  
			}	
	}	 	

		echo "<script type='text/javascript'>alert('Successfully updated team details!');</script>";
		echo "<script>document.location='team_members.php'</script>";
	
} 

