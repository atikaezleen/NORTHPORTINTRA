<?php
session_start();
if(!isset($_SESSION["emp_staff_no"])){
header("Location: login.php");
exit(); }
?>