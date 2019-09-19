<?php
require_once('Database.php');

function Redirect_To ($location) {
	header('location:' . $location);
	exit;
}  


function LoginAttempt($username, $password) {
	$query ="SELECT * FROM test.cms_admin WHERE username = '$username'  AND password = '$password'";
	$exec = pg_query($query);
	if ($admin = pg_fetch_assoc($exec)) {
		return $admin;
	}else {
		return null;
	}

}

?>