<?php require_once('Include/Sessions.php') ?>
<?php require_once('Include/functions.php') ?>
<?php ConfirmLogin(); ?>
<?php include('header.php');?>
<?php
if ( isset( $_POST['post-update'])) {
	date_default_timezone_set('Asia/Manila');
	$time = time();
	$title = pg_escape_string($con, $_POST['post-title']);
	$category = pg_escape_string($con, $_POST['post-category']);
	$content = pg_escape_string($con, $_POST['post-content']);
	$image = $_FILES['post-image']['name'];
	$author = $_SESSION['username'];
	$dateTime = strftime('%Y-%m-%d',$time);
	$title_length = strlen($title);
	$content_lenght = strlen($content);
	$updatedImage = $image;
	if( empty($image)) {
		$updatedImage = $_POST['currentImage'];
		$newImage = false;
	}
	$imageDirectory = "Upload/Image/" . basename($_FILES['post-image']['name']);
	$sql = "UPDATE test.cms_post SET post_date_time ='$dateTime', title = '$title', category = '$category', author ='$author', image = '$updatedImage', post = '$content' WHERE post_id = '$_POST[idFromUrl]' ";
	$exec = pg_query($sql);
	if($exec) {
		move_uploaded_file($_FILES['post-image']['tmp_name'], $imageDirectory);
		$_SESSION['successMessage'] = 'Post Edit Successfully';
		Redirect_To('Dashboard.php');
	}else {
		$_SESSION['errorMessage'] = 'Something Went Wrong Please Try Again Later';
		Redirect_To('Dashboard.php');
	}

}else if( isset($_GET['post_id'])) {
	if (!empty($_GET['post_id'])) {
		$sql = "SELECT * FROM test.cms_post WHERE post_id = '$_GET[post_id]'";
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
}else {
	Redirect_To('dashboard.php');
}

?>
<!DOCTYPE html>
<html>
<body>
    <div id="wrapper">
    <div class="main" id="dashboard">
        <nav class="navbar navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                    <img src="img/logo.png" style="" height="95" width="">
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
                        <a class="active-menu" href="#"><i class="fa fa-yelp "></i>News <span class="fa arrow"></span></a>
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
                        <a  href="#"><i class="fa fa-yelp "></i>Blog <span class="fa arrow"></span></a>
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
                            <a href="#"><i class="fa fa-anchor "></i>Gallery<span class="fa arrow"></span></a>
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
                        <a href="Lagout.php"><i class="fa fa-anchor "></i>Logout</a>
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
                        <h1 class="page-head-line"> ADMIN DASHBOARD</h1>
                        <?php echo SuccessMessage(); ?>
					<?php echo Message(); ?>
                        <h1 class="page-subhead-line">INFORMATION SERVICES DIVISION (ISD) </h1>
                    </div>
                </div>
			<div class="col-xs-10">
				<div class="page-title"><h1>Update Post</h1></div>
					<?php echo Message(); ?>
					<?php echo SuccessMessage(); ?>
					<form action="editpost.php" method="POST" enctype="multipart/form-data">
						<fieldset>
							<div class="form-group">
								<labal for="post-title">Title</labal>
								<input type="text" name="post-title" class="form-control" id="post-title" value="<?php echo $post_title ?>">
							</div>
							<div class="form-group">
								<label>Existing Category : <?php echo htmlentities($post_category); ?></label><br>
								<labal for="post-category">Change Category</labal>
								<select class="form-control" name="post-category" id="post-category" value="<?php echo $post_category ?>">
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
								<input type="File" name="post-image" class="form-control">
							</div>
							<div class="form-group">
								<labal for="post-content">Existing Content</labal>
								<textarea rows="20" class="form-control" name="post-content" id="post-content"><?php echo htmlentities($post_content);  pg_close($con); ?></textarea>
							</div>
							<input type="hidden" name="idFromUrl" value="<?php echo $_GET['post_id']; ?>">
							<input type="hidden" name="currentImage" value="<?php echo $post_image; ?>">
							<div class="form-group">
								<button name="post-update" class="btn btn-primary form-control">UPDATE</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row" id="footer">
		<div class="col-sm-12">
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
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    </div>
    <div id="footer-sec">
        &copy; 2019 Northport (Malaysia) BHD </a>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

    </body>

</html>