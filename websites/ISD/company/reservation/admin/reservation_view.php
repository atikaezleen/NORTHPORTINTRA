<?php session_start();
if(empty($_SESSION['id'])):

endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>View Application - <?php include('../includes/title.php');?></title>
    
  
  <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
  
</head>

<body>
<center>  <table border="0">
           <tr>
           <td style="width:3%;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="./img/northportmmc_logo.png" width="50%"></td>
           <td style="width:8%;"><left><font style="font-family:Arial Black; font-size:20px;">NORTHPORT (MALAYSIA) BHD</font></left>               
           <br><left><font style="font-family:Verdana; font-size:17px;">Information Services Department</font></left>
		   </table></center> 
			</td>
			<br>
			 <p><u>Email Account Application</u></p>
            <td colspan="2" width="5%" ></div>   
			 </div>	   

<table style="width:100%">
<?php
include('db.php');
    $id=$_REQUEST['id'];
    $query=pg_query($con,"select * from reservation left join team on reservation.team_id=team.team_id where rid='$id'")or die(pg_last_error($con));
        $row=pg_fetch_array($query);
        $id=$row['rid'];
        $rcode=$row['r_code'];
        $first=$row['r_first'];
        $r_staff=$row['r_staff'];
        $contact=$row['r_contact'];
		$position=$row['r_position'];
        $address=$row['r_address'];      	
	    $department = $row['department'];
	    $division = $row['division'];
	    $tel_ext = $row['tel_ext'];
	    $pc_ip = $row['pc_ip'];
	    $pc_assign = $row['pc_assign'];
        $date = $row['r_date'];
		
		$venue=$row['r_venue'];
        $balance=$row['balance'];
        $payable=$row['payable'];
		$sign=$row['signature'];
        $type=$row['r_type'];
        $team=$row['team_name'];
        $status=$row['r_status'];
       
?>                     
 <br>					
    <table border="0">
    <tr> 
    
	<td style="width:5%;">1.</td><td style="width:20%;"> <font style="font-family: Verdana;">RCode </font> </td><td>:</td>
    <td style="width:80%;" colspan="3"><?php echo $rcode;?></td>                       
	</tr>
					  						
	<td>2.</td><td>Name</td><td>:</td>
	<td><?php echo $first;?></td>
    </tr>
    <tr>
    <td>3.</td><td>Staff Number</td><td>:</td>
	<td><?php echo $r_staff;?></td>
    </tr> 
    <tr>
    <td>4.</td><td>Position</td><td>:</td>
    <td><?php echo $position;?></td>
    </tr>   
    <tr>  
    <td>5.</td><td>Department</td><td>:</td>
	<td><?php echo $department;?></td>                        
    </tr>

	<tr>  
    <td>6.</td><td>Division</td><td>:</td>
    <td><?php echo $division;?></td>                        
    </tr>
					  
	<tr>  
    <td>7.</td><td>Tel Ext/DID No</td><td>:</td>
    <td><?php echo $tel_ext;?></td>                        
    </tr>
					  
    <tr>  
    <td>8.</td><td>Mobile Phone No</td><td>:</td>
    <td><?php echo $contact;?></td>                       
    </tr>  
    <tr>  
					  
	<tr>  
	<td>9.</td><td>PC IP Address</td><td>:</td>
    <td><?php echo $pc_ip;?></td>                        
    </tr>
	<tr>  
     <td>10.</td><td>Is the PC assigned to you</td><td>:</td>
    <td><?php echo $pc_assign;?></td>                        
    </tr>
					  	  
	<tr>
	<td>11.</td><td>Application Date</td><td>:</td>
    <td><?php echo date("M d, Y",strtotime($date));?></td>
	</tr>					  
                      
                      
    <tr>  
    <td>12.</td><td>Application Status</td><td>:</td>
    <td><?php echo $status;?></td>
                        
    </tr>  
    <tr>  
    <td>13.</td><td>Team Assigned</td><td>:</td>
    <td><?php echo $team;?></td>                       
    </tr>  
</table>
<br>
<?php
    
    $query1=pg_query($con,"select * from r_details natural join combo where rid='$id'")or die(pg_error($con));
      while($row1=pg_fetch_array($query1))
      {
        $rid=$row1['r_details_id'];
?>

<?php }?>

 <font style="font-family: Verdana;  font-size: 13px;"> 				  
	<b>Fill in ALL the above fields</b>	
	<br>
	<p>User must read and accept Northport Email Policy Guideline and Etiquette, which will</p>
	<p>be sent to the new email account.</p>
	<p>Once account has been created, user must change the assigned password</p>
	<p>immediately by accessing Northport Webmail:</p>
	<p><u>https://email.northport.com.my</u></p>
	<br>
	<b>Email password will expire every 90 days.</b>
	<br>
	<p>Applicant signature of acceptance / date:	</p>
  <p><img style="height: 100px; width: 250px;" src="<?php echo $sign;?>"</p>
  <p>_______________________________________</p>
	
	<p>HOD Remarks and Approval (Company Stamp):</p>
	
	<p>_____________________________________________________________________________________</p>
	<p>Note: Northport postmaster will assign the user account/email id according to </p>
	<p>availability</p>
	
	<p>For Office Use Only</p>	
	<table border="0">
	<tr>  
    <td><i style="font-size:10px" class="fa">&#xf096;</i></td><td ><font style="font-family:Times Romance; font-size:10px;">Login account</font></td><td style="width:32%;">:</td>
    <td><i style="font-size:10px" class="fa">&#xf096;</i></td><td ><font style="font-family:Times Romance; font-size:10px;">Groups</font></td><td style="width:32%;">:</td >                        
    </tr>
					  
    <tr>  
    <td><i style="font-size:10px" class="fa">&#xf096;</i></td><td><font style="font-family:Times Romance; font-size:10px;">Aliases (if any)</font></td><td>:</td>
    <td><i style="font-size:10px" class="fa">&#xf096;</i></td><td><font style="font-family:Times Romance; font-size:10px;">Services</font></td><td>:</td>                       
    </tr>  
    <tr>  
					  
	<tr>  
	<td><i style="font-size:10px" class="fa">&#xf096;</i></td><td><font style="font-family:Times Romance; font-size:10px;">Request Approved by/Date</font></td><td>:</td>
    <td><i style="font-size:10px" class="fa">&#xf096;</i></td><td><font style="font-family:Times Romance; font-size:10px;">Mailbox Type</font></td><td>:</td>                       
    </tr>
	<tr>  
     <td><i style="font-size:10px" class="fa">&#xf096;</i></td><td><font style="font-family:Times Romance; font-size:10px;">Account created by / Date</font></td><td>:</td>                           
    </tr>
		</font>
          
          <center><input type="button" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
</body>
</html>