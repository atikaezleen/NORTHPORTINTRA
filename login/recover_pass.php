
<?php
 include('db.php');
 
 $error="";
 date_default_timezone_set('Asia/Kuala_Lumpur');
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
   $error .="<p>Invalid email address please type a valid email address!</p>";
   }else{
   $sel_query = "SELECT * FROM tbl_employee WHERE email='".$email."'" ;
   $results = pg_query($con,$sel_query);
   $row = pg_num_rows($results);
   if ($row==""){
   $error .= "<p>No user is registered with this email address!</p>";
   }
  }
   if($error!=""){
   echo "<div class='error'>".$error."</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
   }else{
   $expFormat = mktime(date("H"), date("i"), date("s"), date("m") ,date("d"), date("Y"));
   $key =0;
   $expdate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(intval('2418*2'). $email);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
// Insert Temp Table
pg_query($db,
"INSERT INTO password_reset_temp (email, key, expdate)
VALUES ('".$email."', '".$key."', '".$expdate."');");
 
 
 
$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="http://localhost/NORTHPORTINTRA/login_intra/reset-password.php?
key='.$key.'&email='.$email.'&action=reset" target="_blank">
http://localhost/NORTHPORTINTRA/login_intra/reset-password.php
?key='.$key.'&email='.$email.'&action=reset</a></p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks,</p>';
$output.='<p>AllPHPTricks Team</p>';
$body = $output; 
$subject = "Password Recovery - AllPHPTricks.com";
 
$email_to = $email;
 
require("PHPMailer_5.2.0/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "email.northport.com.my"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "pavithra"; // Enter your email here
$mail->Password = "5533275VP24"; //Enter your password here
$mail->Port = 25;
$mail->IsHTML(true);
$mail->From = "pavithra@northport.com.my";
$mail->FromName = "AllPHPTricks";

$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "<div class='error'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br /><br /><br />";
	}
   }
}else{
?>
<form method="post" action="" name="reset"><br /><br />
<label><strong>Enter Your Email Address:</strong></label><br /><br />
<input type="email" name="email" placeholder="username@email.com" />
<br /><br />
<input type="submit" value="Reset Password"/>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php } ?>
