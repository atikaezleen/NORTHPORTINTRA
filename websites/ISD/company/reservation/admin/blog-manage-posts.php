<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>

<?php
include ('Database.php');

date_default_timezone_set('Asia/Manila');
$time = time();
if ( isset( $_POST['post-submit'])) {
	$title = pg_escape_string($con, $_POST['post-title']);
	$category = pg_escape_string($con, $_POST['post-category']);
	$content = pg_escape_string($con, $_POST['post-content']);
	$image = $_FILES['post-image']['name'];
	$author = $_SESSION['username'];
	$dateTime = strftime('%Y-%m-%d',$time);
	$title_length = strlen($title);
	$content_lenght = strlen($content);
	$imageDirectory = "Upload/Image/" . basename($_FILES['post-image']['name']);
	if ( empty($title)) {
		$_SESSION['errorMessage'] = "Title Is Emtpy";
		Redirect_To('blog-add.php');
	}else if ( $title_length > 50) {
		$_SESSION['errorMessage'] = "Title Is Too Long";
		Redirect_To('blog-add.php');
	}else if ( empty($content)) {
		$_SESSION['errorMessage'] = "Content Is Empty";
		Redirect_To('blog-add.php');
	}else if ( $content_lenght > 4000) {
		$_SESSION['errorMessage'] = "Content Is Too Long";
		Redirect_To('blog-add.php');
	}else {
		$query = "INSERT INTO test.cms_post (post_date_time, title, category, author, image, post) 
		VALUES ('$dateTime', '$title', '$category', '$author', '$image', '$content')";
		$exec = pg_query($query);
		if ($exec) {
			move_uploaded_file($_FILES['post-image']['tmp_name'], $imageDirectory);
			$_SESSION['successMessage'] = "Post Added Successfully";
		}else {
			$_SESSION['errorMessage'] = "Something Went Wrong Please Try Again";

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

</nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
           <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"> BLOG</h1>
   
                        <h1 class="page-subhead-line">INFORMATION SERVICES DIVISION (ISD) </h1>
                    </div>
                </div>
				<div class="col-lg-12">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
							<div class="col-lg-12">
				<div>
				
				
					<div class="table-responsive">
						
							<?php
							$sql = "SELECT * FROM test.cms_post ORDER BY post_date_time";
							$exec = pg_query($sql);
							$postNo = 1;
							if(pg_num_rows($exec) < 1	) {
								?>
									<p class="lead">You Have 0 Post For The Moment</p>
									<a href="NewPost.php"><button class="btn btn-info">Add Post</button></a>
								<?php
							}else{ ?>
							<table class="table table-hover">
							<tr>
								<th>Post No.</th>
								<th>Post Date</th>
								<th>Date Title</th>
								<th>Author</th>
								<th>Department</th>
								<th>Feature Image</th>
								<th>Comments</th>
								<th>Action</th>
								<th>Details</th>
							</tr>
							<?php
								while ($post = pg_fetch_assoc($exec)) {
									$post_id = $post['post_id'];
									$post_date = $post['post_date_time'];
									$post_title = $post['title'];
									$category = $post['category'];
									$author = "Admin";
									$image = $post['image'];
									?>
									<tr>
									<td><?php echo $postNo; ?></td>
									<td><?php echo $post_date; ?></td>
									<td><?php 
									if(strlen($post_title) > 20 ) {
										echo substr($post_title,0,20) . '...';
									}else {
										echo $post_title;
									}
					
									?></td>
									<td><?php echo $author; ?></td>
									<td><?php echo $category; ?></td>
									<td><?php echo "<img class='img-responsive' src='Upload/Image/$image' width='100px' height='150px'>"; ?></td>
									<td><?php echo 'Ongoing'; ?></td>
									<td><?php echo "<a href='editpost.php?post_id=$post_id'>Edit</a> | <a href='deletepost.php?delete_post_id=$post_id'>Delete</a>"; ?></td>
									<td><a href="Post.php?id=<?php echo $post_id; ?>"><button class="btn btn-primary">Live Preview</button></a></td>
									</tr>
									<?php
									$postNo++;
								}
							}
							?>
						</table>
					</div>
					</div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
            </div>
            <!-- /.container-fluid -->

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
