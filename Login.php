<?php
include('Include/Sessions.php');
include('Include/functions.php');
if ( isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(empty($username) || empty($password)) {
		$_SESSION['errorMessage'] = 'All Fields Must Be Fill Out';
	}else {
		$foundAccount = LoginAttempt($username, $password);
		if ($foundAccount) {
			$_SESSION['successMessage'] = 'Login Successfully Welcome ' . $foundAccount['username'];
			$_SESSION['user_id'] = $foundAccount['id'];
			$_SESSION['username'] = $foundAccount['username'];
			Redirect_To('dashboardnew.php');
		}else {
			$_SESSION['errorMessage'] = 'Username/Password Is Invalid';
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous">

   <style>
      .custom-margin {
         margin-top: 20vh;
      }

      /* If you add background image it will look like transparent form*/
       body {
         background-image: url('1.jpg');
         background-repeat: no-repeat;
         width: 100%;
         height: 100%;
      }
   </style>
   <title>Login Form</title>
</head>

<body>
   <div class="container-fluid">
      <div class="row justify-content-center custom-margin">
         <div class="col-sm-6 col-md-4">
            <!-- Add bg-primary in form tag if want form background color-->
            <!--text-white if want text color white-->
			<?php echo SuccessMessage(); ?>
					<?php echo Message(); ?>
            <form method="POST" action="Login.php" class="shadow-lg p-4 text-white">
                  <h1> INTRANET (ADMIN)</h1>
               <div class="form-group">
				  <i class="fas fa-user"></i>
				  <label for="email" name="username" class="pl-2 font-weight-bold">Username</label><input type="text"
				  name="username" class="form-control" placeholder="Username">
                  <!--Add text-white below if want text color white-->
                  <small class="form-text">We'll never share your username with anyone else.</small>
               </div>
               <div class="form-group">
                  <i class="fas fa-key"></i><label for="pass" name="password" class="pl-2 font-weight-bold">Password</label><input type="password"
				  name="password" class="form-control" placeholder="Password">
               </div>
               <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember Me ?</label>
               </div>
               <button type="submit" name="submit" class="btn btn-outline-success mt-3 btn-block shadow-sm font-weight-bold">Submit</button>
            </form>
         </div>
      </div>
   </div>


   <!-- JQuery Popper Bootstrap -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
</body>

</html>