<?php session_start();

include('db.php');

if(isset($_POST['login']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];

$user = pg_escape_string($con,$user_unsafe);
$pass = pg_escape_string($con,$pass_unsafe);

$query=pg_query($con,"select * from users where username='$user' and password='$pass'")or die(pg_last_error($con));
		$row=pg_fetch_array($query);
           $id=$row['user_id'];
          /*  $first=$row['admin_first'];
           $last=$row['admin_last']; */
           $counter=pg_num_rows($query);

		  	if ($counter == 0) 
			  {	
				  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
				  document.location='index.php'</script>";
			  } 
			  else
			  {
				  $_SESSION['id']=$id;	
				  /* $_SESSION['name']=$first." ".$last; */

			  	echo "<script type='text/javascript'>document.location='dashboard.php'</script>";  
			  }
}
?>