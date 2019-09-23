<?php
	$host = "localhost";
	$port ="5432";
	$dbname = "postgres";
	$user = "postgres";
	$passw = "admin123";
	
	$connection = 'host='.$host.' port='.$port.' dbname='.$dbname.' user='.$user.' password='.$passw;
	
	$db = pg_connect($connection);

?>
//testing..
