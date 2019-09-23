<?php
       

include('header.php');
 ?>
 <?php require_once('Include/functions.php') ?>
<?php require_once('Include/Sessions.php') ?>
<?php ConfirmLogin(); ?>
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
                <div class="col-lg-12">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                
                               
                <div class="col-lg-12">
                        <h2>List of Employees</h2> <a href="add.php?" type="button" class="btn btn-xs btn-info">Add New</a>
                        <br><br> </div>  
                           
                        <div class="col-lg-12">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Designation</th>
                                        <th>Staff No</th>
                                       
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>ext</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM test.people';
                    $result = pg_query($con, $query) or die (pg_error($con));
                  
                        while ($row = pg_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['employee'].'</td>';
                            echo '<td>'. $row['designation'].'</td>';
                            echo '<td>'. $row['staff_no'].'</td>';
                           // echo '<td>'. $row['address'].'</td>';
                            echo '<td>'. $row['contact'].'</td>';
                            echo '<td>'. $row['email'].'</td>' ;
                            echo '<td>'. $row['ext'].'</td>' ;
                           
                            echo ' <td><a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['people_id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=people&delete & id=' . $row['people_id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
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
