<?php 

include('db.php');
	
	//$last = $_POST['last'];
	$first = $_POST['first'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	
	$result = pg_query($con,"SELECT member_first FROM member where member_first='$first'"); 
        $count = pg_num_rows($result);

        if ($count==0)
        {
			pg_query($con,"INSERT INTO member(member_first,member_contact,member_address,member_status) 
			VALUES('$first','$contact','$address','active')")or die(pg_last_error());  
			echo "<script type='text/javascript'>alert('Successfully added new member!');</script>";
			echo "<script>document.location='members.php'</script>";   
		}
		else
		{
			echo "<script type='text/javascript'>alert('Member already added!');</script>";
			echo "<script>document.location='members.php'</script>";   	
		}
	
?>