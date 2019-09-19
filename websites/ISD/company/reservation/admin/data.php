<?php 
session_start();
include('db.php');
	$year=$_SESSION['year'];

	$query = pg_query($con,"select *,SUM(amount) as amount,DATE_FORMAT(payment_date,'%b') as month from payment where YEAR(payment_date)='$year' group by MONTH(payment_date)") or die(pg_last_error($con));
	$category = array();
	//$category['name'];

	$series1 = array();
	$series1['name'] = 'Monthly Sales';

	while($r = pg_fetch_array($query)) {
		
	    //$count=$r['total'];
	    $category['name'][] =$r['month'];
	    $category['data'][] =$r['month'];
	    $series1['data'][] = $r['amount'];

}

$result = array();
array_push($result,$category);
array_push($result,$series1);
//array_push($result,$series2);

print json_encode($result, JSON_NUMERIC_CHECK);

pg_close($con);
//session_destroy(year);
?> 
