<?php
$host = "localhost";
$port ="5432";
$dbname = "admin";
$user = "postgres";
$passw = "abc123";

$connection = 'host='.$host.' port='.$port.' dbname='.$dbname.' user='.$user.' password='.$passw;

$con = pg_connect($connection);
?> 
//testing edit..
