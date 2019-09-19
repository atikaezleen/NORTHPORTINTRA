
<?php

include('db.php');
$result = pg_query($conn, "SELECT * FROM tblblog where status='0' ORDER BY posting_date ASC");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Northport Intranet</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/fav.png" />
</head>
<style>


                        
.ibox-content {
    background-color: #FFFFFF;
    color: inherit;
    padding: 15px 20px 20px 20px;
    border-color: #E7EAEC;
    border-image: none;
    border-style: solid solid none;
    border-width: 1px 0px;
}

.search-form {
    margin-top: 10px;
}

.search-result h3 {
    margin-bottom: 0;
    color: #1E0FBE;
}

.search-result .search-link {
    color: #006621;
}

.search-result p {
    font-size: 12px;
    margin-top: 5px;
}

.hr-line-dashed {
    border-top: 1px dashed #E7EAEC;
    color: #ffffff;
    background-color: #ffffff;
    height: 1px;
    margin: 20px 0;
}

h2 {
    font-size: 24px;
    font-weight: 100;
}

                      

</style>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="assets/images/logo.png" alt="logo" style="width:180px; height:70px;" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="images/" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
         <li class="nav-item active">
            <a href="index.html" class="nav-link">
             <i class="fa fa-home" aria-hidden="true"></i> Home</a>
          </li>
              <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-globe"></i>Website</a>
			  
					 <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
					<br>
					  <a  href="new/CCD/aesthetic/index.html"  class="dropdown-item" target="_blank">
						CCD
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/COMMERCIAL/neos/index.html" class="dropdown-item" target="_blank">
						COMMERCIAL
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/CONTAINER/aesthetic/index.html" class="dropdown-item" target="_blank">
						CONTAINER
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/CONVENTIONAL/cache/index.html" class="dropdown-item" target="_blank">
						CONVENTIONAL
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/CORPORATE/neos/index.html" class="dropdown-item" target="_blank">
						CORPORATE
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/F,E&M/cache/index.html" class="dropdown-item" target="_blank">
						FACILITIES
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/FINANCE/MarkUps-Varsity/Varsity/index.html" class="dropdown-item" target="_blank">
						FINANCE
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/HR/company/index.html" class="dropdown-item" target="_blank">
						HCD
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/HSE/multi/index.html" class="dropdown-item" target="_blank">
						HSE
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/ISD/company/index.html" class="dropdown-item" target="_blank">
						ISD
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/MARINE/MarkUps-Intensely/Intensely/index.html" class="dropdown-item" target="_blank">
						MARINE
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/PMO/bs-multipager-linuji/index.html" class="dropdown-item" target="_blank">
						PMO
					  </a>
					  
					  <div class="dropdown-divider"></div>
					  <a  href="new/PQM/me-and-family/index.html" class="dropdown-item" target="_blank">
						PQM
					  </a>
					</div>
							
          </li>
		   <li class="nav-item">
            <a href="#" class="nav-link">
			<i class="fa fa-home" aria-hidden="true"></i>E-System</a>
          </li>
		  <li class="nav-item">
            <a href="staff.html" class="nav-link">
             <i class="fa fa-user-friends"></i>Staff Directory</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-envelope"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="fa fa-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Username</span>
              <img class="img-xs rounded-circle" src="assets/images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav"><br>
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Username</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
             <i class="fa fa-home" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.html">
             <i class="fa fa-newspaper" aria-hidden="true"></i>
               <span class="menu-title">&nbsp;&nbsp;News & Annoucement</span>
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="blog.php">
              <i class="fa fa-book-open" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;Blogs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.html">
              <i class="fa fa-user-tie" aria-hidden="true"></i>
              <span class="menu-title">&nbsp;&nbsp;Profile</span>
            </a>
          </li>
         
       
       
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
           
          </div>

					<div class="container bootstrap snippet">
						<div class="row">
						<div class="col-lg-12">
							<div class="ibox float-e-margins">
								<div class="ibox-content">
									<h2>
									   
									</h2>
							   
						
									<div class="search-form">
										<form action="#" method="get">
											<div class="input-group">
												<input type="text" placeholder="Search Blog" name="search" class="form-control input-lg">
												<div class="input-group-btn">
													<button class="btn btn-lg btn-primary" type="submit">
														Search
													</button>
												</div>
											</div>
										</form>
									</div>
								<?php		
									while($row=pg_fetch_array($result))
								
									{
							 
								$blogid=$row['postid'];
								 ?>
									<div class="hr-line-dashed"></div>
									<div class="search-result">
										<h3><?php echo"<a href='../website-take-quiz.php?postid=$blogid'> " ?><?php echo $row['title']  ; ?></a></h3>
									   
										<p>
											<?php echo $row['description']  ; ?>                        </p>
									</div>
								<?php
									}
								?>
									
									
									<div class="hr-line-dashed"></div>
						 <button type="button" class="btn btn-success btn-fw"  onclick="window.location.href='addblog.php'" >Add</button>
						
									<div class="text-center">
										<div class="btn-group">
											<button class="btn btn-white" type="button"><i class="glyphicon glyphicon-chevron-left"></i></button>
											<button class="btn btn-white">1</button>
											<button class="btn btn-white  active">2</button>
											<button class="btn btn-white">3</button>
											<button class="btn btn-white">4</button>
											<button class="btn btn-white">5</button>
											<button class="btn btn-white">6</button>
											<button class="btn btn-white">7</button>
											<button class="btn btn-white" type="button"><i class="glyphicon glyphicon-chevron-right"></i> </button>
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Northport (M) Bhd</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
      
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>