<?php include ('db.php'); ?>



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
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/fav.png" />
  
</head>
<style>
<style>
.field_wrapper div {
    margin-bottom: 10px;
}
.remove_input_button {
    margin-top: 10px;
    margin-left: 15px;
    vertical-align: text-bottom;
}
.add_input_button {
    margin-top: 10px;
    margin-left: 10px;
    vertical-align: text-bottom;
}
</style>
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
            <a href="staff.html" class="nav-link">
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
              <span class="profile-text">Hello, Username</span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
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
	
	
	<div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
				<div class="card">
                <div class="card-body">
                 <img src ="images/faces/face21.jpg">
                
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4> 
                    <div class="mt-2">
                       <div class="form-group">
    <label for="exampleFormControlFile1">Change Photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

                    </div>
				
 
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">administrator</span>
                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                  </div>
                </div>
              </div>
                
			 
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Edit profile</a></li>
              </ul>
			  <br>
						  <form method="POST" action="formtest.php">
			<div class="tab-content pt-3">
                <div class="tab-pane active">         
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>First Name</label>
                              <input class="form-control" type="text" name="first_name" placeholder="" value="">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group" >
                              <label>Last Name</label>
                              <input class="form-control" type="text" name="last_name" placeholder="" value="">
                            </div>
                          </div>
                        </div>
                 
				  
                    <div class="form-group" >
                     <label>Birth Date</label>
						<div class="form-control"> 
							<input type="date" id="start" name="bday"/>
						</div>
					</div>
				
					
				<div class="form-group" >
						<label>Gender:</label>		
					<input type="radio" id="male" name="gender" value="male"style="border-style:none;margin-left:30px;font-size:11px;"/> <label style="font-size: 12px;">         Male</label>
					<input type="radio" id="female" name="gender" value="female" style="border-style:none;font-size:11px;"/> <label style="font-size: 12px;">       Female</label>
				</div>
				
				<div class="form-group" >
						<label>Marital Status:</label>		
					<input type="radio" id="male" name="marital_status" value="married" style="border-style:none;margin-left:30px;font-size:11px;"/> <label style="font-size: 12px;">         Married</label>
					<input type="radio" id="female" name="marital_status" value="single" style="border-style:none;font-size:11px;"/> <label style="font-size: 12px;">       Single</label>
				</div>
				
				<div class="row">
					<div class="col">
						<div class="form-group">
                              <label>Address</label>
                              <input class="form-control" name="address" type="text" id="address" >
                          </div> 
						</div>
					</div>
					
				 <div class="row">
					<div class="col">
						<div class="form-group">
                              <label>Email</label>
                              <input class="form-control" name="email" type="text" id="email" >
                          </div> 
						</div>
					</div>
				
				 <div class="row">
					<div class="col">
						<div class="form-group">
                              <label>Phone</label>
                              <input class="form-control"name="phone" type="text" id="phone" >
                          </div> 
						</div>
					<div class="col">
						<div class="form-group">
                              <label>Phone Extension</label>
                              <input class="form-control" name="phone_ext" type="text" id="phone_ext" >
                          </div> 
						</div>
					</div>
					
				 <div class="row">
					<div class="col">
						<div class="form-group">
                              <label>Department</label>
                              <input class="form-control" name="dept" type="text" id="dept" >
                          </div> 
						</div>
					<div class="col">
						<div class="form-group">
                              <label>Position</label>
                              <input class="form-control" name="position" type="text" id="position" >
                          </div> 
						</div>
					</div>
			
			
			
			
			       <br />  
                <div class="form-group">  
					<div class="mb-2"><b>Education</b></div>
					  <form name="add_education" id="add_education"> 
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="education[]" placeholder="e.g. Diploma of Digital Technology" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">✚</button></td>  
                                    </tr>  
                               </table> 
                          </div>  
						  
						  
			        <div class="form-group">  
					<div class="mb-2"><b>Experience</b></div>
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field2">  
                                    <tr>  
                                         <td><input type="text" name="experience[]" placeholder="Supervisor at Samsung" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add2" class="btn btn-success">✚</button></td>  
                                    </tr>  
                               </table> 
                          </div>      
				 </div>
<form>						  
					  
				 </div>
			
				<input type="submit" name="submit" id="submit" class="btn btn-info" value="SAVE" />       
					
           
</form>		   
		


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
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="education[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"formtest.php",  
                method:"POST",  
                data:$('#add_education').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_education')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
 
  <script>  
 $(document).ready(function(){  
      var i=1;  
      
	  $('#add2').click(function(){  
           i++;  
           $('#dynamic_field2').append('<tr id="row'+i+'"><td><input type="text" name="experience[]" placeholder="Supervisor at Samsung" class="form-control name_list" /></td><td><button type="button" name="remove2" id="'+i+'" class="btn btn-danger btn_remove">✖</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove2();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_experience').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_experience')[0].reset();  
                }  
           });  
      });  
 });  
 </script>


   
 <?php ini_set('error_reporting', 'E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR');
?>  




</body>

</html>