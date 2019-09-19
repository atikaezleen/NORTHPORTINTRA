<?php 
session_start();
include('db.php');
	
	if (isset($_POST["r_code"])) {
    	$code = $_POST["r_code"];    
	}

	if (isset($_POST["first"])) {
    	$first = $_POST["first"];    
	}

	if (isset($_POST["r_staff"])) {
    	$r_staff = $_POST["r_staff"];    
	}

	if (isset($_POST["r_code"])) {
    	$code = $_POST["r_code"];    
	}

	if (isset($_POST["contact"])) {
    	$contact = $_POST["contact"];    
	}

	if (isset($_POST["email"])) {
    	$email = $_POST["email"];    
	}

	if (isset($_POST["date"])) {
    	$date = date("Y-m-d");   
	}

	if (isset($_POST["position"])) {
    	$position = $_POST["position"];    
	}

	if (isset($_POST["department"])) {
    	$department = $_POST["department"];    
	}

	if (isset($_POST["division"])) {
    	$division = $_POST["division"];    
	}

	if (isset($_POST["tel_ext"])) {
    	$tel_ext = $_POST["tel_ext"];    
	}

	if (isset($_POST["pc_ip"])) {
    	$pc_ip = $_POST["pc_ip"];    
	}

	if (isset($_POST["signature"])) {
    	$sign = $_POST["signature"];    
	}

	if (isset($_POST["pc_assign"])) {
    	$pc_assign = $_POST["pc_assign"];    
	}

	

	$string="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$code="";
	$limit=10;
	$i=0;
	while($i<=$limit)
	{
		$rand=rand(0,61);
		$code.=$string[$rand];
		$i++;
	}

		pg_query($con,"INSERT INTO reservation (r_code,r_first,r_staff,r_contact,r_email,date_reserved, r_position, department, division, tel_ext, pc_ip, pc_assign, signature) 
			VALUES('$code','$first','$r_staff','$contact','$email','$date','$position','$department','$division','$tel_ext','$pc_ip','$pc_assign','$sign')");

		//$insert_query = pg_query($db, "SELECT * FROM session;");
		//$insert_row = pg_fetch_row($insert_query);
		//$insert_id = $insert_row[0];
		//$result = pg_execute($db, "INSERT INTO session (session_id, bar) VALUES ($insert_id, 123);");


			//repair this later

			//$_SESSION['id']=$id;
			//echo "<script>document.location='details.php'</script>";   
?>




<?php 

include('db.php');
	
	//$id = $_SESSION['id'];
	
	$date = $_POST['date'];
	
	$cid = $_POST['combo_id'];
	$date=date("Y-m-d",strtotime($date));
	
			
   
		
		$query = pg_query($con, "SELECT * FROM combo WHERE combo_id='$cid'");
			$row=pg_fetch_array($query);
				$price=$row['combo_price'];
				

		pg_query($con,"UPDATE reservation SET r_date='$date',combo_id='$cid',price='$price'")or die(pg_last_error($con)); 

			//$_SESSION['id']=$id;

			
			//echo "<script>document.location='payment_save.php'</script>";   
	
?>


<?php 
include('db.php');
	
	//$id = $_SESSION['id'];
	
		//$id = $_POST['rid'];

		pg_query($con,"UPDATE reservation SET r_status='pending'")or die(pg_last_error($con)); 
	

		$query = pg_query($con, "SELECT * FROM reservation natural join combo");
      		$row=pg_fetch_array($query);
        	$rcode=$row['r_code'];
        	$first=$row['r_first'];
        	$r_staff=$row['r_staff'];
        	$contact=$row['r_contact'];
        	$address=$row['r_address'];
        	$email=$row['r_email'];
        	$date=$row['r_date'];
        	$status=$row['r_status'];
        	$time=$row['r_time'];
        	$type=$row['r_type'];
        	$cid=$row['combo_id'];
        	$combo=$row['combo_name'];

    ini_set( 'display_errors', 1 );
    
    error_reporting( E_ALL );
    
    $from = "syamirulamr07@gmail.com";
    
    $to = $email;
    
    $subject = "Approval Form Details";
    
    $message = "Dear $first. Below are your E-mail Account Application details
	
    Email: $email
	Staff Number: $r_staff
	RCode: $rcode
    	
    Please save the RCode for future reference . Thank you	
    ";
    $headers = "MIME-Version: 1.0 \r\n";
    $headers .= "Content-type: text/html; Charset= iso-859-1 \r\n";
    $headers .= "From: syamirulamr07@gmail.com". "\r\n" .
				"CC: mirulflare@gmail.com";
			
    
    mail($to,$subject,$message, $headers);
    
    echo "<script>
		alert('Please Check Your Email Inbox for the details');		
	</script>";

			
			echo "<script>document.location='summary.php'</script>";   
	
?>
