<?php include('header.php');?>
<?php require_once('Include/functions.php') ?>
<?php require_once('Include/Sessions.php') ?>
<?php ConfirmLogin(); ?>


 <?php

	
$id = $_GET['id'];
				
					$query = ("DELETE FROM test.people WHERE people_id = '$id'");
			
					$result = pg_query($con, $query) or die('Error in updating Database');
										
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "index.php";			
				
		

			</script>	
</body>
</html>