<?php include('header.php');?>
<?php require_once('Include/functions.php') ?>
<?php require_once('Include/Sessions.php') ?>
<?php ConfirmLogin(); ?>

<?php
   if ( isset( $_POST['post-submit'])) {        
                //   $zz =pg_escape_string($con,$_POST['people_id']);
                       $emp = pg_escape_string($con, $_POST['employee']);
                       $desi = pg_escape_string($con, $_POST['designation']);
                       $staff = pg_escape_string($con, $_POST['staffno']);
                       $address = pg_escape_string($con, $_POST['address']);
                       $contct =pg_escape_string($con,  $_POST['contact']);
                       $email = pg_escape_string($con, $_POST['email']);
                       $ext = pg_escape_string($con, $_POST['ext']);

                  



                   if ( empty($emp)) {
                       $_SESSION['errorMessage'] = "Employee Name Is Emtpy";
                       Redirect_To('add.php');
                   }else if ( empty($desi)) {
                       $_SESSION['errorMessage'] = "Designation Is Empty";
                       Redirect_To('add.php');
                   }else if ( empty($staff)) {
                       $_SESSION['errorMessage'] = "Staff Number Is Empty";
                       Redirect_To('add.php');
                   }else if ( empty($contct)) {
                       $_SESSION['errorMessage'] = "Contact Is Too Empty";
                       Redirect_To('add.php');
                   } else if ( empty($email)) {
                       $_SESSION['errorMessage'] = "Email Is Empty";
                       Redirect_To('add.php');
                   }else if ( empty($ext)) {
                       $_SESSION['errorMessage'] = "Ext Is Empty";
                       Redirect_To('add.php');
                   }
                   else{





                               $query = "INSERT INTO test.people
                               (employee, designation, staff_no,contact, email,ext)
                               VALUES ('".$emp."','".$desi."','".$staff."','$contct','".$email."','".$ext."')";
                              // pg_query($con,$query)or die ('Error in updating Database');
                           
                       //break;
                       $exec = pg_query($query);
                            if($exec) {
                                $_SESSION['successMessage']="Record Added Successfully";
                            }       else{
                                $_SESSION['errorMessage'] ="Something Went Wrong Please Try Again";
                            }
                       
                   }
                }
            
            
        
    
?> 
     


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


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
                        <a  href="dashboardnew.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu" href="#"><i class="fa fa-desktop "></i>Form<span class="fa arrow"></span></a>
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
                        <h1 class="page-subhead-line">INFORMATION SERVICES DIVISION(ISD) </h1>
                    </div>
                </div>
                <div class="container">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">

                            <!-- /.editttttt sini  -->
                            <div class="col-lg-12">
                  <h2>Add New Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="add.php">
                            
                            <div class="form-group">
                            <label>Employee Name </label>
                              <input class="form-control" placeholder="Name" name="employee">
                            </div>
                            <div class="form-group">
                            <label>Designation</label>
                              <input class="form-control" placeholder="Designation" name="designation">
                            </div> 
                            <div class="form-group">
                            <label>Staff No</label>
                              <input class="form-control" placeholder="staff no" name="staffno">
                            </div> 
                            <div class="form-group">
                            <label>Address</label>
                              <input class="form-control" placeholder="Address" name="address">
                            </div> 
                            <div class="form-group">
                            <label>Contact</label>
                              <input class="form-control" placeholder="Contact" name="contact">
                            </div> 
                            <div class="form-group">
                            
                             <label>Email</label>
                             <input class="form-control" placeholder="Email" name="email">
                            </div>  
                            <div class="form-group">
                            <label>Ext</label>
                             <input class="form-control" placeholder="Ext" name="ext">
                            </div>  
                            <button name ="post-submit" type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
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
