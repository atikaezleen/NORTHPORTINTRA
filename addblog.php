<?php
session_start();
error_reporting(0);
include('config.php');

if(isset($_POST['apply']))
{
$empid=$_SESSION['id'];
$title=$_POST['title'];
$description=$_POST['description'];  
$status=0;
$isread=0;

$sql="INSERT INTO tblblog(title,description,status,isRead,emp_id) VALUES('$title','$description','$status','$isRead','$empid')";
$query = $dbh->prepare($sql);
$query->bindParam(':title',$title,PDO::PARAM_STR);

$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':isread',$isread,PDO::PARAM_STR);
$query->bindParam(':empid',$empid,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Blog Submitted successfully,Pending Admin Approval";
}
else 
{
$error="Something went wrong. Please try again";
}

}

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Blog</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet"> 
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

<style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
	.succWrap{
		padding: 10px;
		margin: 0 0 20px 0;
		background: #fff;
		border-left: 4px solid #5cb85c;
		-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
		box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
body{
	background:#fff;
}
h3{
	size:16px;
	font-family:Courier New;
}
table, th, td {
 padding:5px;
 font-family:Courier New;
 font-size:20px;
 font-weight:bold;
}
input[type=text]{
	font-family:Courier New;
	font-size:18px;
	text-transform: uppercase;
}
textarea{
	font-family:Courier New;
	font-size:15px;

}
.button {
  background-color: #3BD970
  border: none;
  color: white;

  border-radius:5px;
  font-family:Verdana;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  padding: 10px 24px;
  cursor: pointer;
  text-transform: uppercase;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<div class ="header">
</div>
	<center><br><br><br><br><img src="assets/images/a.png" style="width:180px; height:180px;" />
	<table style="width:50%">  

	<?php if($error){?><div class="errorWrap"><strong>ERROR </strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	
	<form id="example-form" method="post" name="addemp">
	<h3> WRITE YOUR BLOG HERE </h3>
	<tr><td>TITLE : </td>
	<td><input type="text" name="title" length="100" required></td> </tr>
	<tr><td></td></tr>
	<tr><td> DESCRIPTION: </td>
	<td><textarea name="description" length="500"  required></textarea></td>
	<tr><td></td><td><button type="submit" name="apply" id="apply" class="button button1" >Submit</button> <button type="submit" name="back" id="back" onclick="window.location.href='blog.php'" class="button button1" >Back</button></td>
	</form>
	</table></center>


				
 <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/form_elements.js"></script>
        <script src="assets/js/pages/form-input-mask.js"></script>
        <script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    </body>
</html>
<?php  ?> 