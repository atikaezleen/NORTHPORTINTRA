<?php 
    session_start();
   // $user = $_SESSION['id'];
?>
<?php include 'header.php';?>


<head>

<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 35%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 8px;
}

/* Right column (page content) */
.right {
  flex: 65%;
  padding: 15px;
}

.vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #3BB9FF;
    color: white;
}

div.p {
   
    margin-left: 250px;
}

</style>

<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>
	 

</head>

<body>
	
	<?php include 'menu-tab.php';?>
	<div class="p">

                <div class = "content"  >
			<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12"  >
			

				<div class = "col-md-9 col-lg-9"  >
					<div class="widget wgreen"  >
            
                <div class="widget-head" >
				 
				<input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print ">

				<div id="div_print">

				
                  <div class="clearfix"></div>
       
	   
	   <div class="container-fluid"  >
          <div class="row">
          <div class="col-sm-12" >
		  
        <table border="0" >
           
           <td style="width:3%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <img src="./img/northportmmc_logo.png" width="60%"></td>
           <td style="width:8%;"><font style="font-family:Arial Black; font-size:20px;">NORTHPORT (MALAYSIA) BHD</font>               
           <br><font style="font-family:Times Romance; font-size:17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Information Services Department</font></left>
		   </table> 
			</td>
			<br>
			 <b><u>Email Account Application</u></b>
            <td colspan="2" width="5%" ></div>   
			 </div>	   

                 
                    

<table style="width:100%" >
<?php
include('db.php');
    
    //$last_id = $con->rid;

    if (isset($_POST["rid"])) {
        $rid=$_POST['rid'];  
    }

    $query=pg_query($con,"SELECT rid, r_code, r_first, r_staff, r_contact, r_address, r_date, r_venue, balance, payable, r_ocassion,r_status, r_motif, r_time, r_type, combo_id, r_position, department, division, tel_ext, pc_ip, pc_assign, r_email, signature FROM reservation ORDER BY rid DESC LIMIT 1")or die(pg_last_error($con));
      
        $row=pg_fetch_array($query);
        $rcode=$row['r_code'];
        $first=$row['r_first'];
        $r_staff=$row['r_staff'];
        $contact=$row['r_contact'];
        $address=$row['r_address'];
        $date=$row['r_date'];
        $venue=$row['r_venue'];
        $balance=$row['balance'];
        $payable=$row['payable'];
        $ocassion=$row['r_ocassion'];
        //$team=$row['team_name'];
        $status=$row['r_status'];
        $motif=$row['r_motif'];
        $time=$row['r_time'];
        $type=$row['r_type'];
        $cid=$row['combo_id'];
		$position=$row['r_position']; 
	    $department = $row['department'];
	    $division = $row['division'];
	    $tel_ext = $row['tel_ext'];
	    $pc_ip = $row['pc_ip'];
	    $pc_assign = $row['pc_assign'];
	    $email=$row['r_email'];
	    $sign=$row['signature'];

?>                      
    	<br>					
    <table border="0" >
	<tr>  
	
    <td style="width:5%;">1.</td><td style="width:40%;"> <font style="font-family: Arial;">Rcode</font> </td><td>:</td>
	<td style="width:80%;" colspan="3"><?php echo $rcode;?></td>
    </tr>
    <tr>  	
    <td style="width:5%;">2.</td><td style="width:40%;"> <font style="font-family: Arial;">Name </font> </td><td>:</td>
	<td style="width:80%;" colspan="3"><?php echo $first;?></td>
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
    <td>11.</td><td>Date</td><td>:</td>
	<td><?php echo date("M d, Y",strtotime($date));?></td>                     
    </tr>
	<tr>  
    <td>12.</td><td>Email</td><td>:</td>
	<td><?php echo $email;?></td>                     
    </tr>
	</table>
	<br>				  
	<b>Fill in ALL the above fields</b>	
	<br></br>
	<p>User must read and accept Northport Email Policy Guideline and Etiquette, which will</p>
	<p>be sent to the new email account.</p>
	<br>
	<p>Once account has been created, user must change the assigned password</p>
	<p>immediately by accessing Northport Webmail:</p>
	<p><u>https://email.northport.com.my</u></p>
	<br>
	<b>Email password will expire every 90 days.</b>
	<br>
    <br>
	<p>Applicant signature of acceptance / date:</p>
    <p><img style="height: 100px; width: 250px;" src="<?php echo $sign;?>"></p>
    <td><?php echo date("M d, Y",strtotime($date));?></td>
	<br>
	<p>HOD Remarks and Approval (Company Stamp):</p>
	
	<p>_____________________________________________________________________________________</p>
	<p>Note: Northport postmaster will assign the user account/email id according to </p>
	<p>availability</p>
	<br>
	<p>For Office Use Only</p>
	<br>
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
			
                    
</table>

	</div></div></div></div></div></div>
	</div> </div>


</body>
</html>



