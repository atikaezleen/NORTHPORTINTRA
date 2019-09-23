<!DOCTYPE html>
<html lang="en" >

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<style>
body{
    background-color: ;
}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
<?php
 include('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['emp_staff_no'])){
      
	  
	$emp_staff_no = stripslashes($_REQUEST['emp_staff_no']);   
	 
	$password = stripslashes($_REQUEST['password']);
	$first_name = stripslashes($_REQUEST['first_name']);
	$last_name = stripslashes($_REQUEST['last_name']);
	$email = stripslashes($_REQUEST['email']);
	$trn_date = date("Y-m-d H:i:s");
	
	 $rsEmails = pg_query($con,"SELECT * FROM tbl_employee WHERE email = '".$email."'");
	 $numEmails = pg_num_rows($rsEmails);
	 
	if($numEmails >0) {
		 
		 echo '<script type="application/javascript">alert("Email Taken , Please use different email and register"); window.location.href = "'.'";</script>';

	}  else {
	
        $query = "INSERT into tbl_employee (first_name,last_name,email,emp_staff_no, password,trn_date)
        VALUES ('$first_name','$last_name','$email','$emp_staff_no', '".md5($password)."','$trn_date')";
        $result = pg_query($con,$query);
        if($result){
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3>
                  <br/>Click here to <a href='index.php'>Login</a></div>";
        }
	} }else {
?>

<br><br>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Sign Up for Northport Intranet<small></small></h3>
			 			</div>
			 			<div class="panel-body">
						
			    <form name="registration" action="" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    				<div class="form-group">
			                    <input type="text" name="first_name" class="form-control input-sm" placeholder="First Name" required>
			    				</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    				<div class="form-group">
			    				<input type="text" name="last_name"  class="form-control input-sm" placeholder="Last Name" required>
			    				</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" class="form-control input-sm" placeholder="Email Address" required>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" name="emp_staff_no"  class="form-control input-sm" placeholder="Staff Number" required>
			    			</div>
			    					<div class="form-group">
			    					<input type="password" name="password" class="form-control input-sm" placeholder="Password" required>
			    					</div>
			    
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
	<?php } ?>
	</html>