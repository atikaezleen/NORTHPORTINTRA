<?php 
session_start();
include('db.php');
	
	//$id = $_SESSION['id'];
	//$mode = $_POST['modeofpayment'];

		//pg_query($con,"UPDATE reservation SET modeofpayment='$mode',r_status='pending' where rid='$id'")or die(pg_last_error($con)); 

$query = pg_query($con, "SELECT * FROM reservation natural join combo WHERE rid='$id'");
      $row=pg_fetch_array($query);
        $rcode=$row['r_code'];
        $first=$row['r_first'];
        $r_staff=$row['r_staff'];
        $contact=$row['r_contact'];
        $address=$row['r_address'];
        $email=$row['r_email'];
        $date=$row['r_date'];
        $venue=$row['r_venue'];
        $balance=$row['balance'];
        $payable=$row['payable'];
        $ocassion=$row['r_ocassion'];
        $team=$row['team_name'];
        $status=$row['r_status'];
        $motif=$row['r_motif'];
        $time=$row['r_time'];
        $time=$row['r_time'];
        $type=$row['r_type'];
        $cid=$row['combo_id'];
        $combo=$row['combo_name'];

    ini_set( 'display_errors', 1 );
    
    error_reporting( E_ALL );
    
    $from = "syamirulamr07@gmail.com";
    
    $to = $email;
    
    $subject = "Approval Form Details";
    
    $message = "Dear $first. Below are your E-mail Account details
	
    Email: $email
	Staff Number: $last
	RCode: $rcode
    	
    	
    ";
    
    $headers .= "From: syamirulamr07@gmail.com". "\r\n" .
				"CC: mirulflare@gmail.com";
    
    mail($to,$subject,$message, $headers);
    
    echo "<script>
		alert('Check Your Email Inbox for the details');		
	</script>";

			
			echo "<script>document.location='summary.php'</script>";   
	
?>