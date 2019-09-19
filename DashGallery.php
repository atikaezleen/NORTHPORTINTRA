<?php require_once('Include/Sessions.php') ?>
<?php require_once('Include/functions.php') ?>
<?php ConfirmLogin(); ?>
<?php include('header.php');?>
<!DOCTYPE html>
<html>

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
                        <h1 class="page-head-line">GALLERY</h1>
                        <?php echo SuccessMessage(); ?>
					<?php echo Message(); ?>
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
							$sql = "SELECT * FROM test.gallery ORDER BY post_date_time";
							$exec = pg_query($sql);
							$postNo = 1;
							if(pg_num_rows($exec) < 1	) {
								?>
									<p class="lead">You Have 0 Post For The Moment</p>
									<a href="Newgallery.php"><button class="btn btn-info">Add Images</button></a>
								<?php
							}else{ ?>
							<table class="table table-hover">
							<tr>
								<th>Image No</th>
								<th>Post Date</th>
								<th>Title</th>
							
								<th>Department</th>
								<th>Feature Image</th>
							
								<th>Action</th>
								<th>Details</th>
							</tr>
							<?php
								while ($post = pg_fetch_assoc($exec)) {
									$post_id = $post['image_id'];
									$post_date = $post['post_date_time'];
									$post_title = $post['title'];
									$category = $post['category'];
									//$author = "Admin";
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
								
									<td><?php echo $category; ?></td>
									<td><?php echo "<img class='img-responsive' src='Upload/Image/$image' width='100px' height='150px'>"; ?></td>
									
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