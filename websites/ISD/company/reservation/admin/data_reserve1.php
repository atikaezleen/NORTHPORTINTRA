<?php 
session_start();
include('db.php');

$year1=date("Y");
	$query = pg_query($con,"select COUNT(*) as count,DATE_FORMAT(r_date,'%b') as month from reservation where YEAR(r_date)='$year1' and r_status='Finished' or r_status='Approved ' group by MONTH(r_date)") or die(pg_last_error($con));

	$category = array();
	//$category['name'];

	$series1 = array();
	$series1['name'] = 'Approved and Finished';

	while($r = pg_fetch_array($query)) {
		
	    //$count=$r['total'];
	    $category['name'][] =$r['month'];
	    $category['data'][] =$r['month'];
	    $series1['data'][] = $r['count'];

}

$result = array();
array_push($result,$category);
array_push($result,$series1);
//array_push($result,$series2);

print json_encode($result, JSON_NUMERIC_CHECK);

pg_close($dbcon);
?> 
