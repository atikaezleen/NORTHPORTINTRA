<?php session_start();
//if(empty($_SESSION['id'])):
//header('Location:index.php');
//endif;
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
 
    <div class = "content">
      <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
	  
<div class="p">

		
      	<div class = "col-md-9 col-lg-9"  >
          <div class="widget wgreen">
                
                <div class="widget-head">
				

				
                  <div class="pull-left title">Application Summary</div>
                  <input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print ">

				<div id="div_print">

                  <div class="clearfix"></div>
            

                <div class="widget-content">
                  <div class="padd" style="height:1000px">
                    <div class="alert alert-success">
                      <b>Reminder: Please print your reservation summary and take note of your reservation code for reservation inquiry.</b>
                    </div>
 <table border="0">
                   <td style="width:3%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <img src="./img/northportmmc_logo.png" width="60%"></td>
           <td style="width:8%;"><font style="font-family:Arial Black; font-size:20px;">NORTHPORT (MALAYSIA) BHD</font>               
           <br><font style="font-family:Times Romance; font-size:17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Information Services Department</font></left>
		   </table> 
			</td>
			<br>
			 <b><u>Email Account Application</u></b>
<hr>

<table style="width:100%">
<?php
include('db.php');
    $rcode=$_REQUEST['rcode'];
    $query=pg_query($con,"select * from reservation left join team on reservation.team_id=team.team_id natural join combo where r_code='$rcode'")or die(pg_last_error($con));
        
        $row=pg_fetch_array($query);
        $rcode=$row['r_code'];
        
		    $first=$row['r_first'];
        $r_staff=$row['r_staff'];
        $contact=$row['r_contact'];
        $position=$row['r_position'];      	
		    $department = $row['department'];
		    $division = $row['division'];
		    $tel_ext = $row['tel_ext'];
		    $pc_ip = $row['pc_ip'];
		    $pc_assign = $row['pc_assign'];
        $date = $row['r_date'];		
        $ocassion=$row['r_ocassion'];
        $team=$row['team_name'];
        $status=$row['r_status'];          
        $type=$row['r_type'];
        $cid=$row['combo_id'];
        $sign=$row['signature'];
?>                      
                      <tr>
                        <td>Reservation Code: </td>
                        <td><?php echo $rcode;?></td>                       
                      <tr>  
                        <td>Name: </td>
                        <td><?php echo $first;?></td>
					  </tr>
					  <tr>
                        <td>Staff Number: </td>
                        <td><?php echo $r_staff;?></td>                       
                      <tr> 
					  
					  <tr>
                        <td>Position: </td>
                        <td><?php echo $position;?></td>                       
                      <tr> 
					  <tr>
                        <td>Department: </td>
                        <td><?php echo $department;?></td>                       
                      <tr> 
					  <tr>
                        <td>Phone Number: </td>
                        <td><?php echo $contact;?></td>                                             
					  
                      <tr>  
                        <td>Status:</td>
                        <th><?php echo $row['r_status'];?></th>
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
	<p>Applicant signature of acceptance / date:	</p>
	<br>
  <img style="height: 100px; width: 250px;" src="<?php echo $sign;?>">
  <br>
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
		</table>



                  </div><!--pad-->  
                </div>
          </div><!--widget-->          
        </div><!--col 9-->
              
      </div>  
    </div>
	
	</div></div>
	
<?php include 'footer.php';?>   
<?php include 'script.php';?>
<script>
         $(function () {
         //Initialize Select2 Elements
         $(".select2").select2();
         

     })
    </script>
</body>
</html>



