<?php 
session_start();
include('db.php');
	
	$id = $_SESSION['id'];
	$venue = $_POST['venue'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$motif = $_POST['motif'];
	$pax = $_POST['pax'];
	$type = $_POST['type'];
	$ocassion = $_POST['ocassion'];
	$cid = $_POST['combo_id'];
	$date=date("Y-m-d",strtotime($date));

	$query = pg_query($con, "SELECT * FROM `reservation` WHERE r_date='".$date."' AND r_status = 'Approved'");
			
    // do something
			if (!pg_query($con,$query))
			{
		$query = pg_query($con, "SELECT * FROM combo WHERE combo_id='$cid'");
			$row=pg_fetch_array($query);
				$price=$row['combo_price'];
				$payable=$pax*$price;

		pg_query($con,"UPDATE reservation SET payable='$payable',balance='$payable',r_venue='$venue',r_date='$date',r_time='$time',r_motif='$motif'
		,r_ocassion='$ocassion',r_type='$type',pax='$pax',combo_id='$cid',price='$price' where rid='$id'")or die(pg_last_error($con)); 

			$_SESSION['id']=$id;

			
			echo "<script>document.location='payment_save.php'</script>";   
	}
	
?>