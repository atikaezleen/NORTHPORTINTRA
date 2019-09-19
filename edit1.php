<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php require_once('Include/functions.php') ?>
						<?php require_once('Include/Sessions.php') ?>
<?php
 $zz= $_POST['id'];
			$emp = $_POST['employee'];
					    $desi = $_POST['designation'];
						$staff = $_POST['staffno'];
						//$address = $_POST['address'];
						$contct = $_POST['contact'];
						$email = $_POST['email'];
                        $ext = $_POST['ext'];
			
						
		
	 			$query = ("UPDATE test.people set employee ='$emp',
					designation ='$desi', staff_no='$staff',contact='$contct', 
					email='$email' , ext='$ext' WHERE
					people_id ='$zz'");

					$result = pg_query($con, $query) or die('Error in updating Database');
					
					
							
?>	
	<script type="text/javascript">
			alert("Update Successful.");
			window.location = "index.php";
		</script>
 </body>
</html>