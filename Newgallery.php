<?php require_once('Include/Sessions.php'); ?> 
<?php require_once('Include/functions.php') ?> 
<?php ConfirmLogin(); ?>
<?php
       

include('header.php');
 ?>
<?php

date_default_timezone_set('Asia/Manila');
$time = time();
if ( isset( $_POST['post-submit'])) {
	$title = pg_escape_string($con, $_POST['post-title']);
	$category = pg_escape_string($con, $_POST['post-category']);
	//$content = pg_escape_string($con, $_POST['post-content']);
	$image = $_FILES['post-image']['name'];
	//$author = $_SESSION['username'];
	$dateTime = strftime('%Y-%m-%d',$time);
	$title_length = strlen($title);
	//$content_lenght = strlen($content);
	$imageDirectory = "Upload/Gallery/" . basename($_FILES['post-image']['name']);
	if ( empty($title)) {
		$_SESSION['errorMessage'] = "Title Is Emtpy";
		Redirect_To('Newgallery.php');
	}else if ( $title_length > 50) {
		$_SESSION['errorMessage'] = "Title Is Too Long";
		Redirect_To('Newgallery.php');
	}else if ( empty($category)) {
		$_SESSION['errorMessage'] = "category Is Empty";
		Redirect_To('Newgallery.php');
	}else {
		$query = "INSERT INTO test.gallery (post_date_time, title, category, image) 
		VALUES ('$dateTime', '$title', '$category',  '$image')";
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
<html xmlns="http://www.w3.org/1999/xhtml">


<body>
<div id="wrapper">
        <nav class="navbar  navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ADMIN ISD</a>
            </div>
            <div class="header-right">
            <div class="dropdown" style="float:right;">
  <button class="dropbtn">ADMIN</button>
  <div class="dropdown-content">
  <a href="Admin.php">Mange Admin</a>
  <a href="Lagout.php">Logout</a>
 
  </div>
</div>
</div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class=" navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                
                    <li>
                        <a href="dashboardnew.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Form<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="formm.html"><i class="fa fa-desktop"></i>Form Builder</a>
                            </li>
                            <ul class="nav nav-second-level">
                            <li>
                                <a href="index.php"><i class="fa fa-send"></i>List Staff</a>
                            </li>
                        </ul>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>News <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add-post.php"><i class="fa fa-plus"></i>Add News</a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="manage-posts.php"><i class="fa fa-send"></i>News</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Blog <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="NewPost.php"><i class="fa fa-plus"></i>Add Article</a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Dashboard.php"><i class="fa fa-send"></i>Article</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                            <a class="active-menu"  href="#"><i class="fa fa-anchor "></i>Gallery<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="Newgallery.php"><i class="fa fa-plus"></i>Add Gallery</a>
                                </li>
                               <ul class="nav nav-second-level">
                                   <li>
                                       <a href="DashGallery.php"><i class="fa fa-anchor"></i>Gallery</a>
                                   </li>
                               </ul>
                               
                            </ul>
                        </li>
                       
                        <li>
                            <a href="#"><i class="fa fa-desktop "></i>Approval<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="Newgallery.php"><i class="fa fa-plus"></i>Comfirmed</a>
                                </li>
                               <ul class="nav nav-second-level">
                                   <li>
                                       <a href="DashGallery.php"><i class="fa fa-anchor"></i>Pending</a>
                                   </li>
                               </ul>
                               <ul class="nav nav-second-level">
                                   <li>
                                       <a href="DashGallery.php"><i class="fa fa-anchor"></i>Finished</a>
                                   </li>
                               </ul>
                               <ul class="nav nav-second-level">
                                   <li>
                                       <a href="DashGallery.php"><i class="fa fa-anchor"></i>Cancelled</a>
                                   </li>
                               </ul>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-anchor "></i>Maintenance<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="Newgallery.php"><i class="fa fa-plus"></i>Add Member</a>
                                </li>
                               <ul class="nav nav-second-level">
                                   <li>
                                       <a href="DashGallery.php"><i class="fa fa-anchor"></i>Add User</a>
                                   </li>
                               </ul>
                               
                            </ul>
                        </li>
                </ul>
                </li>



            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
           <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"> ADD GALLERY</h1>
                        <?php echo SuccessMessage(); ?>
					<?php echo Message(); ?>
                        <h1 class="page-subhead-line">INFORMATION SERVICES DIVISION(ISD) </h1>
                    </div>
                </div>
			<div class="col-xs-10">
			
					<?php echo Message(); ?>
					<?php echo SuccessMessage(); ?>
					<form action="Newgallery.php" method="POST" enctype="multipart/form-data">
						<fieldset>
							<div class="form-group">
								<labal for="post-title">Title</labal>
								<input type="text" name="post-title" class="form-control" id="post-title">
							</div>
							<div class="form-group">
								<labal for="post-category">Department</labal>
								<select class="form-control" name="post-category" id="post-category">
								<?php
										$sql = "SELECT * FROM test.cms_category";
										$exec = pg_query($sql);
										while($row = pg_fetch_assoc($exec)){
											echo "<option>$row[cat_name]</option>";
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<labal for="post-image">Feature Image</labal>
								<input type="File" name="post-image" class="form-control">
							</div>
							
							<div class="form-group">
								<button name="post-submit" class="btn btn-primary form-control">Publish</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2019 Northport (Malaysia) BHD </a> </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
     <!-- CUSTOM Gallery Call SCRIPTS -->
    <script src="assets/js/galleryCustom.js"></script>
</body>
</html>