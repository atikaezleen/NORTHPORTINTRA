<?php
	 $db = pg_connect("host=localhost dbname=db_intra user=postgres password=abc123");
     session_start();
					
					if(isset($_SESSION['emp_staff_no']))
					{
						$emp_staff_no=$_SESSION['emp_staff_no'];
	                    $first_name=pg_fetch_result(pg_query("SELECT first_name FROM tbl_employee WHERE emp_staff_no='$emp_staff_no'"),0);
                        $total_user = pg_fetch_result(pg_query("SELECT count( * ) as  total_record FROM tbl_employee"),0);
					}
					else
					{
						header("location:login_intra/index.php");
					}


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
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
   <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/fav.png" />
</head>
<style>

</style>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="images/logo.png" alt="logo" style="width:180px; height:70px;" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="images/" alt="logo" />
        </a>
      </div>
     <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
           <li class="nav-item active">
            <a href="index.php" class="nav-link">
              <i class="mdi mdi-home-outline"></i>Home</a>
          </li>
		  

		  
		    <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-web"></i>Website</a>
			  
					 <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <br>
            <a  href="websites/CCD/aesthetic/index.html"  class="dropdown-item" target="_blank">
            CCD
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/COMMERCIAL/neos/index.html" class="dropdown-item" target="_blank">
            COMMERCIAL
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/CONTAINER/aesthetic/index.html" class="dropdown-item" target="_blank">
            CONTAINER
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/CONVENTIONAL/cache/index.html" class="dropdown-item" target="_blank">
            CONVENTIONAL
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/CORPORATE/neos/index.html" class="dropdown-item" target="_blank">
            CORPORATE
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/F,E&M/cache/index.html" class="dropdown-item" target="_blank">
            FACILITIES
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/FINANCE/MarkUps-Varsity/Varsity/index.html" class="dropdown-item" target="_blank">
            FINANCE
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/HR/company/index.html" class="dropdown-item" target="_blank">
            HCD
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/HSE/multi/index.html" class="dropdown-item" target="_blank">
            HSE
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/ISD/company/index.html" class="dropdown-item" target="_blank">
            ISD
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/MARINE/MarkUps-Intensely/Intensely/index.html" class="dropdown-item" target="_blank">
            MARINE
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/PMO/bs-multipager-linuji/index.html" class="dropdown-item" target="_blank">
            PMO
            </a>
            
            <div class="dropdown-divider"></div>
            <a  href="websites/PQM/me-and-family/index.html" class="dropdown-item" target="_blank">
            PQM
            </a>
          </div>
							
          </li>
		  
		   <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>E-System</a>
          </li>
		  
		  <li class="nav-item">
            <a href="staffdirectory.php" class="nav-link">
              <i class="mdi mdi-account-multiple"></i>Staff Directory</a>
          </li>
        </ul>
		
		

        <ul class="navbar-nav navbar-nav-right">
    
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text"></span>
              <img class="img-xs rounded-circle" src="images/faces-clipart/pic-3.png" alt="Profile image">
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
                  <img src="images/faces-clipart/pic-3.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $first_name; ?></p>
                  <div>
                    <small class="designation text-muted">Software Engineer</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-home-outline"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.html">
              <i class="menu-icon mdi mdi-newspaper"></i>
              <span class="menu-title">News Portal</span>
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="blog.php">
              <i class="menu-icon mdi mdi-book-open"></i>
              <span class="menu-title">Blogs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="myprofile.php">
              <i class="menu-icon mdi mdi-face"></i>
              <span class="menu-title">My Profile</span>
            </a>
          </li>
         
       
       
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
          </div>
		  <div class="search-form">
			<form action="#" method="get">
				<div class="input-group">
					<input type="text" placeholder="Search Staff" name="search" class="form-control input-lg">
						<div class="input-group-btn"><button class="btn btn-lg btn-primary" type="submit">Search</button>
						</div>
					</div>
				</form>
			</div>
		<br>
          <div class="row">
		   
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                 <center>
                 <img src ="images/faces-clipart/pic-3.png">
				<br><br>   <h5 class="text-info">Emmanuel Joseph</h5>
				<p>Head Of Information Services </p>
				<i class="mdi mdi-cellphone-android"></i> 012 - 3456789
				<br><i class="mdi mdi-phone-classic"></i> 03 - 21456789
				<br><i class="mdi mdi-email-outline"></i><h6> emmanuel@northport.com.my</h6>
					
				<br><br><button type="button" class="btn btn-warning btn-rounded btn-fw"><a href = "" target="_self">View Profile</button></a>
               </center> 
                </div>
              </div>
            </div>
			
			  <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                 <center>
                 <img src ="images/faces-clipart/pic-2.png">
				<br><br>   <h5 class="text-info">Fahim Bin Zaki</h5>
				<p>Software Engineer </p>
				<i class="mdi mdi-cellphone-android"></i> 012 - 3456789
				<br><i class="mdi mdi-phone-classic"></i> 03 - 21456789
				<br><i class="mdi mdi-email-outline"></i><h6> fahim@northport.com.my</h6>
					
				<br><br><button type="button" class="btn btn-warning btn-rounded btn-fw"><a href = "" target="_self">View Profile</button></a>
               </center> 
                </div>
              </div>
            </div>
			
			  <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                 <center>
          <img src ="images/faces-clipart/pic-1.png">
				<br><br>   <h5 class="text-info">Khaizatul Azreen</h5>
				<p>Sr Manager HCD </p>
				<i class="mdi mdi-cellphone-android"></i> 012 - 3456789
				<br><i class="mdi mdi-phone-classic"></i> 03 - 21456789
				<br><i class="mdi mdi-email-outline"></i> <h6>khaizatul@northport.com.my</h6>
					
				<br><br><button type="button" class="btn btn-warning btn-rounded btn-fw"><a href = "" target="_self">View Profile</button></a>
               </center> 
                </div>
              </div>
            </div>
		</div>
		
		<div class="row">
		   
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                 <center>
                 <img src ="images/faces-clipart/pic-1.png">
				<br><br>   <h5 class="text-info">Low Len Toong</h5>
				<p>Head,Procurement </p>
				<i class="mdi mdi-cellphone-android"></i> 012 - 3456789
				<br><i class="mdi mdi-phone-classic"></i> 03 - 21456789
				<br><i class="mdi mdi-email-outline"></i><h6>low@northport.com.my</h6>
					
				<br><br><button type="button" class="btn btn-warning btn-rounded btn-fw"><a href = "" target="_self">View Profile</button></a>
               </center> 
                </div>
              </div>
            </div>
			
			  <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                 <center>
               <img src ="images/faces-clipart/pic-4.png">
				<br><br>   <h5 class="text-info">Roslina Tormodi</h5>
				<p>Manager,ISD </p>
				<i class="mdi mdi-cellphone-android"></i> 012 - 3456789
				<br><i class="mdi mdi-phone-classic"></i> 03 - 21456789
				<br><i class="mdi mdi-email-outline"></i><h6>roslina@northport.com.my</h6>
					
				<br><br><button type="button" class="btn btn-warning btn-rounded btn-fw"><a href = "" target="_self">View Profile</button></a>
               </center> 
                </div>
              </div>
            </div>
			
			  <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                 <center>
                <img src ="images/faces-clipart/pic-3.png">
				<br><br>   <h5 class="text-info">Zarina Zainal</h5>
				<p>Asst Manager , HCD </p>
				<i class="mdi mdi-cellphone-android"></i> 012 - 3456789
				<br><i class="mdi mdi-phone-classic"></i> 03 - 21456789
				<br><i class="mdi mdi-email-outline"></i><h6>zarina@northport.com.my</h6>
					
				<br><br><button type="button" class="btn btn-warning btn-rounded btn-fw"><a href = "" target="_self">View Profile</button></a>
               </center> 
                </div>
              </div>
            </div>
		</div>
		<div class="row">
		   
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                 <center>
                <img src ="images/faces-clipart/pic-2.png">
				<br><br>   <h5 class="text-info">Ahmad Fauzi</h5>
				<p>CIC ,Conventional </p>
				<i class="mdi mdi-cellphone-android"></i> 012 - 3456789
				<br><i class="mdi mdi-phone-classic"></i> 03 - 21456789
				<br><i class="mdi mdi-email-outline"></i> <h6>afauzi@northport.com.my</h6>
					
				<br><br><button type="button" class="btn btn-warning btn-rounded btn-fw"><a href = "" target="_self">View Profile</button></a>
               </center> 
                </div>
              </div>
            </div>
			
			  <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                 <center>
                 <img src ="images/faces-clipart/pic-3.png">
				<br><br>   <h5 class="text-info">Helmy Firdaus B Che May</h5>
				<p>Executive Technical</p>
				<i class="mdi mdi-cellphone-android"></i> 012 - 3456789
				<br><i class="mdi mdi-phone-classic"></i> 03 - 21456789
				<br><i class="mdi mdi-email-outline"></i><h6>helmy@northport.com.my</h6>
					
				<br><br><button type="button" class="btn btn-warning btn-rounded btn-fw"><a href = "" target="_self">View Profile</button></a>
               </center> 
                </div>
              </div>
            </div>
			
			  <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                 <center>
                <img src ="images/faces-clipart/pic-2.png">
				<br><br>   <h5 class="text-info">Pavithra Ganisan</h5>
				<p>Software Engineer </p>
				<i class="mdi mdi-cellphone-android"></i> 012 - 3456789
				<br><i class="mdi mdi-phone-classic"></i> 03 - 21456789
				<br><i class="mdi mdi-email-outline"></i><h6> pavithra@northport.com.my</h6>
					
				<br><br><button type="button" class="btn btn-warning btn-rounded btn-fw"><a href = "" target="_self">View Profile</button></a>
               </center> 
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

  <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
</body>

</html>