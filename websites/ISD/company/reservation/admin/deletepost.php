<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>

<?php

include('Database.php');
if ( isset( $_POST['post-delete'])) {
	$sql = "DELETE  FROM test.cms_post WHERE post_id = '$_POST[deleteID]' ";
	$exec = pg_query($sql);
	if ($exec) {
		echo "Post Deleted Successfully";
	header('Location:blog-manage-posts.php');
	}else {
		echo "Something Went Wrong, Post Is Not Deleted. Please Try Again Later";
			header('Location:blog-manage-posts.php');
	}

}else if( isset($_GET['delete_post_id'])) {
	if (!empty($_GET['delete_post_id'])) {
		$sql = "SELECT * FROM test.cms_post WHERE post_id = '$_GET[delete_post_id]'";
		$exec = pg_query($sql);
		if (pg_num_rows($exec) > 0 ) {
			if ($post = pg_fetch_assoc($exec)) {
				$post_id = $post['post_id'];
				$post_date = $post['post_date_time'];
				$post_title = $post['title'];
				$post_category = $post['category'];
				$post_author = $post['author'];
				$post_image = $post['image'];
				$post_content = $post['post'];
			}
		} 
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Pending - <?php include('../includes/title.php');?></title>
  <?php include('../includes/links.php');?>
  
  <style rel='stylesheet' type='text/css'>

a[href$=".pdf"] {
    color: red;
    background: url('http://www.java2s.com/style/logo.png') no-repeat left center;
}        
        </style>
  
</head>

<body>

<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
  
    <div class="conjtainer">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
      <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
      <span>Menu</span>
      </button>
      <!-- Site name for smallar screens -->
      <a href="index.html" class="navbar-brand hidden-lg">Northport</a>
    </div>
      
      <?php include('../includes/topbar.php');?>
    

    </div>
  </div>
  <!-- Main content starts -->

<div class="content" style="margin-top:10px">

    <!-- Sidebar -->
    <?php include('../includes/sidebar.php');?>

    <!-- Sidebar ends -->

        <!-- Main bar -->
    <div class="mainbar">
      
      <!-- Page heading -->
      <div class="page-head">
        <h2 class="pull-left"><i class="fa fa-home"></i> Dashboard</h2>

        <!-- Breadcrumb -->
        

        <div class="clearfix"></div>

      </div>
      <!-- Page heading ends -->


      <!-- Page heading ends -->



       <!-- Matter -->

<div class="col-xs-10">
				<div class="page-title"><h1>Delete Post</h1></div>
					
					<form action="deletepost.php" method="POST" enctype="multipart/form-data">
						<fieldset>
							<div class="form-group">
								<button name="post-delete" class="btn btn-danger form-control">DELETE</button>
							</div>
							<div class="form-group">
								<labal for="post-title">Title</labal>
								<input disabled type="text" name="post-title" class="form-control" id="post-title" value="<?php echo $post_title ?>">
							</div>
							<div class="form-group">
								<label>Existing Category : <?php echo htmlentities($post_category); ?></label><br>
								<label for="post-category">Change Category</label>
								<select disabled class="form-control" name="post-category" id="post-category" value="<?php echo $post_category ?>">
									<?php
										$sql = "SELECT cat_name FROM test.cms_category";
										$exec = pg_query($sql);
										$selected = "";
										while($row = pg_fetch_assoc($exec)){ 
											// if ( $row['cat_name'] == $post_category ) {
											// 	$select = 'selected';
											// }
											if($post_category === $row['cat_name']) {
												?>
												<option selected="selected" ><?php echo htmlentities($row['cat_name']) ?></option>
												<?php
											}else {
												?>
												<option><?php echo htmlentities($row['cat_name']) ?></option>
												<?php
											}
										}
									?>
								</select>
							</div>
							<label>Existing Image: <img src="Upload/Image/<?php echo $post_image;  ?>" width='250' height='90'> </label>
							<div class="form-group">
								<labal for="post-image">Change Image</labal>
								<input disabled type="File" name="post-image" class="form-control">
							</div>
							<div class="form-group">
								<labal for="post-content">Existing Content</labal>
								<textarea disabled rows="20" class="form-control" name="post-content" id="post-content"><?php echo htmlentities($post_content);  pg_close($con); ?></textarea>
							</div>
							<input type="hidden" name="deleteID" value="<?php echo $_GET['delete_post_id']; ?>">
							<input type="hidden" name="currentImage" value="<?php echo $post_image; ?>">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>

   <!-- Mainbar ends -->
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<?php include('../includes/footer.php');?>  

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

<!-- Modal -->

              <!--end form-->
            </div>
            
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->  
<?php
    if (isset($_POST['del']))
    {
    $id=$_POST['id'];

  // sending query
  pg_query($con,"delete from reservation WHERE rid='$id'")
  or die(pg_last_error());
  echo "<script>document.location='pending.php'</script>";
    }
    ?>
<!-- JS -->
<?php include('../includes/js.php');?>  

</body>
</html>
