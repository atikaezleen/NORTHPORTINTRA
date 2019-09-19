<?php
require_once ('db.php');         

$q = "SELECT * FROM user";
$r = mysqli_query($con, $q);


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View Signature</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
<h3>This page is to show the inserted signature from register.php page</h3>
  
<?php
  while($row = mysqli_fetch_array($r))
{  
?>

<img style="height: 250px; width: 250px;" src="<?php echo $row['signature'];?>">

<?php
}

?>
</body>
</html>