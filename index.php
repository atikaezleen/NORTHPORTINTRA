
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
						header("location:login/index.php");
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
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/fav.png" />
</head>
<style>
.row-striped:nth-of-type(odd){
  background-color: ;
  border-left: 4px #000000 solid;
}

.row-striped:nth-of-type(even){
  background-color: #ffffff;
  border-left: 4px  solid;
}

.row-striped {
    padding: 3px 0;
}

t {
  text-align: center;
  font-size: 1px;
  margin-top: 0px;
}
table,
td {
    border: 0px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}
.italic{
font-style:italic;
}

</style>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          <img src="images/logo.png" alt="logo" style="width:180px; height:70px;" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.php">
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
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
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
                  <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
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
                  <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
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
                  <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
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
              <i class="mdi mdi-bell"></i>
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
              <a class="dropdown-item" href="logout.php" class="dropdown-item">
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
                  <p class="profile-name"> <?php echo $first_name; ?></p>
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
            <a class="nav-link" href="sybarmagazine/index.html">
              <i class="menu-icon mdi mdi-newspaper"></i>
              <span class="menu-title ital">News Portal</span>
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="blog.php">
              <i class="menu-icon mdi mdi-book-open"></i>
              <span class="menu-title">Blogs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">
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
          <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
            
                    </div>
                 
                     <i> <h4><p class="mb-0 text-right">Quotes of the Day</p></h4></i>
                      <div class="fluid-container">
				
                       <h6 class="font-weight-medium text-right mb-0 italic">"Day by day what you do is who you become"</h6></i>
                      </div>
                  
                  </div>
               
                </div>
              </div>
            </div>
			
          
			
         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                   
                    <div class="float-right">
                      <h3><p class="mb-0 text-right" >Countdowns to Fun</p></h3>
                      <div class="fluid-container">
                       <i> <h6 class="font-weight-medium text-right mb-0 italic"><i>"Majlis Sambutan Raya Northport 2019"</i></h6></i>
                      </div>
					  <br>
					  <center><i><div class="t" id="demo"></div></i></center>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
			 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-table-edit text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">New Users</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $total_user; ?></h3>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    
                    <div class="float-right">
                  
                      <div class="fluid-container">
<script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","//s.bookcdn.com//css/cl/bw-cl-150x70.css"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_1_293794127"><div style="width:150px; height:70px; margin: 0 auto;"><a href="https://booked.net/time/pelabuhan-klang-40668">Pelabuhan Klang</a><br/></div></div> <script type="text/javascript"> function setWidgetData_293794127(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_293794127 = -1; </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/time/info?ver=2&domid=209&type=1&id=293794127&scode=124&city_id=40668&wlangid=1&mode=1&details=0&background=ffffff&color=1925a8&add_background=ffffff&add_color=2071c9&head_color=ffffff&border=0&transparent=0"></script>
                      </div>
                    </div>
                  </div>
               
                </div>
              </div>
            </div>
			
          </div>
          <div class="row">
            <div class="col-lg-7 grid-margin stretch-card">
              <!--weather card-->
		
    
			<div class="container">
	<div class="row">
	   <div class="card border-danger golge">
	   <br>
   <center> <a href="#default" class="logo">Upcoming Events</a> </center>
		  <hr>
            <div class="card-body">
              <div class="carousel vert slide" data-ride="carousel" data-interval="2000">
                <div class="carousel-inner">
                  
                   	<div class="container">
	
			
			<div class="col-10">
				<h4 class="text-uppercase"><strong>Sambutan Hari Keselamatan Sedunia 2019 Northport</strong></h4>
				<ul class="list-inline">
				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Marine Training Hall</li>
				</ul>
				<p></p>
			</div>
	
	
			
			<div class="col-10">
				<h4 class="text-uppercase"><strong>TownHall session with CEO</strong></h4>
				<ul class="list-inline">
				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Friday</li>
					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:30 PM - 4:00 PM</li>
					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> CBM Training Hall</li>
				</ul>
				<p></p>
			</div>
		
	
	
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
           
			
			
          </div>
		  
		
          <div class="row">
		   
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                 <div class="header">
  <center><a href="#default" class="logo">Favourite Links</a></center>
  
</div>
                <style>
.checked {
  color: orange;
}
</style>   
                    
            <hr>
       
     <table>

    <tbody>
        <tr>
		 <td><span class="fa fa-star checked"></span>&nbsp;&nbsp;&nbsp;<a href="http://localhost/NORTHPORTINTRA/new/HR/company/index.html" style="color: #6BC3F5"/>Online Resort Booking </a></td> 
           
        
        </tr>
		
		 <tr>
		 
		 <td><span class="fa fa-star checked"></span>&nbsp;&nbsp;&nbsp;<a href="http://localhost/NORTHPORTINTRA/new/HR/company/index.html" style="color: #6BC3F5"/>Contract System </a></td> 
           
        
        </tr>
		 <tr>
		 
	 <td><span class="fa fa-star checked"></span>&nbsp;&nbsp;&nbsp;<a href="http://localhost/NORTHPORTINTRA/new/HR/company/index.html" style="color: #6BC3F5"/>Employee Incentive System</a></td> 
           
        
        </tr>
    </tbody>
</table>
   </body>
	
</html>
       
                </div>
              </div>
            </div>
          </div>
       
		
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                 <center><a href="#default" class="logo">Recent Articles</a></center>
  
				  <hr>
                  <div class="fluid-container">
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces-clipart/pic-1.png" alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Emmanuel Joseph :</p>
                          <p class="text-primary mr-1 mb-0"></p>
                          <p class="mb-0 ellipsis">Evernote and Google Driver Deliver a Smarter Way to Work.</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Likes :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">4 Likes</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Posted on :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">19/06/2019</small>
                          </div>
                        </div>
                      </div>
                     <div class="ticket-actions col-md-2">
                        <button type="button "class="btn btn-rounded btn-primary btn-fw" onclick="window.location.href='blogview.html'" >View</button>
                      </div>
                    </div>
					
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces-clipart/pic-1.png" alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Selvakumar Karupiah :</p>
                          <p class="text-primary mr-1 mb-0"></p>
                          <p class="mb-0 ellipsis">The Key to Business Success in 2019.</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Likes</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">1 Likes</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Posted on :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">13/05/2019</small>
                          </div>
                        </div>
                      </div>
                   <div class="ticket-actions col-md-2">
                        <button type="button" class="btn btn-rounded btn-primary btn-fw" onclick="window.location.href='blogview.html'" >View</button>
                      </div>
                    </div>
					
                    <div class="row ticket-card mt-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces-clipart/pic-1.png" alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Syamsul Amriz :</p>
                          <p class="text-primary mr-1 mb-0"></p>
                          <p class="mb-0 ellipsis">A look back at the previous year in your industry or target market.</p>
                        </div>
                        <p class="text-gray ellipsis mb-2"></p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Likes :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">0 Likes</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Posted on :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">1/03/2019</small>
                          </div>
                        </div>
                      </div>
                    <div class="ticket-actions col-md-2">
                        <button type="button" class="btn btn-rounded btn-primary btn-fw" onclick="window.location.href='blogview.html'" >View</button>
                      </div>
                    </div>
					
                </div>
				 <br><br><center> <button type="button" class="btn btn-rounded btn-primary btn-fw" onclick="window.location.href='blog.html'" >View More</button></center>
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
// Set the date we're counting down to
var countDownDate = new Date("June 28, 2019 15:00:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
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