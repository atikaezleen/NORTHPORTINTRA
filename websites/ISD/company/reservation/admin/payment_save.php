<?php 

include('db.php');
	
	//$id = $_POST['id'];
	
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
    //if(isset($_POST['amount'])){
        //$amount = $_POST['amount'];
   //}
    
    if(isset($_POST['status'])){
        $status = $_POST['status'];
    }

	//$status = $_POST['status'];
	
	$date=date("Y-m-d");
	$num = 0;
    
		pg_query($con,"INSERT INTO payment(rid,payment_date) 
			VALUES('$id','$date')")or die(pg_last_error());  
	
		
        //amount still in error state. fix this later.

		pg_query($con,"UPDATE reservation SET balance='$num',r_status='$status' where rid='$id'") or die(pg_last_error($con)); 

    $query = pg_query($con, "SELECT * FROM reservation natural join combo WHERE rid='$id'");
        $row=pg_fetch_array($query);
        $rcode=$row['r_code'];
        $first=$row['r_first'];
        $r_staff=$row['r_staff'];
        $contact=$row['r_contact'];
		$position=$row['r_position'];
        $address=$row['r_address'];
        $date=$row['r_date'];
        $venue=$row['r_venue'];
        $balance=$row['balance'];
        $payable=number_format($row['payable'],2);
        $ocassion=$row['r_ocassion'];
        //$team=$row['team_name'];
        $status=$row['r_status'];
        $email=$row['r_email'];
        $motif=$row['r_motif'];
        $time=$row['r_time'];
        $time=$row['r_time'];
        $type=$row['r_type'];
        $cid=$row['combo_id'];
        $combo=$row['combo_name'];

        if ($status=='Approved'){
        	$msg=" Thank you!";
        }
        
        if ($status=='Cancelled'){
        	$msg=" Sorry!";
        }


	ini_set( 'display_errors', 1 );
    
    error_reporting( E_ALL );
    
    $from = "Northport@northport.com.my";
    
    $to = "$email";
    
    $subject = "Application Status";
    
    $message = "Dear $first,

    Your application is $status. $msg


    Thanks,

    Northport (Malaysia) BHD
    	
    ";
    
    $headers = "From:" . $from;
    
    mail($to, $subject, $message, $headers);
    	
			echo "<script type='text/javascript'>alert('Successfully application!');</script>";
			echo "<script>document.location='pending.php'</script>";   
	
	
?>