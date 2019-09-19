<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<form class="login-form" action="new_pass.php" method="post">
		<h2 class="form-title">New password</h2>
		<!-- form validation messages -->
	
		<div class="form-group">
			<label>New password</label>
			<input type="password" name="password">
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input type="password" name="password">
		</div>
		<div class="form-group">
			<button type="submit" name="password" class="login-btn">Submit</button>
		</div>
	</form>
</body>
</html>