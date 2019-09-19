<?php
$host = "localhost";
$port ="5432";
$dbname = "db_intra";
$user = "postgres";
$passw = "abc123";

$con = 'host='.$host.' port='.$port.' dbname='.$dbname.' user='.$user.' password='.$passw;

$con = pg_connect($con);
?>