<?php

extract($_POST);
include("dbconfig.php");
$rs=pg_query($con,"select * from test.tbl_users where login='$user_id'");
if (pg_num_rows($rs)>0)
{
	echo "<br><br><br><a href='login.php'</a>";
	exit;
}
$query="insert into test.tbl_users(user_id,login,pass,name,email) values('$user_id','$login','$pass','$name','$email')";
$rs=pg_query($con,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>USER ID  $user_id BERJAYA DIDAFTARKAN</div>";
echo "<br><div class=head1>SILA MASUKKAN USER ID ANDA UNTUK LANGKAH SETERUSNYA </div>";
echo "<br><div class=head1><a href=login.php>Login</a></div>";


?>
 


<!DOCTYPE html>
<html>
<head>
<title>insertdata</title>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
     
 <table class="table table-bordered table-responsive">
 
    <tr>
     <td><label class="control-label">Username.</label></td>
        <td><input class="form-control" type="text" name="user_name" placeholder="Enter Username" value="<?php echo $username; ?>" /></td>
    </tr>
    
    <tr>
     <td><label class="control-label">Profession(Job).</label></td>
        <td><input class="form-control" type="text" name="user_job" placeholder="Your Profession" value="<?php echo $userjob; ?>" /></td>
    </tr>
    
    <tr>
     <td><label class="control-label">Profile Img.</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
    </tr>
    
    </table>
    
</form>