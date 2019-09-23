<?php include('header.php');?>
<?php require_once('Include/functions.php') ?>
<?php require_once('Include/Sessions.php') ?>
<?php ConfirmLogin(); ?>
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<body>
    <div id="wrapper">
        <nav class="navbar navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                    <img src="img/logo.png" style="background-color: #f9f9f9; margin-top: 2px;margin-bottom: 2px;"
                        height="95" width="">
                </div>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i
                        class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i
                        class="fa fa-bars fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/p.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Naziatul Atika Ezleen
                                <br />
                                <small> Intern Student </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Form Control<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="formm.html"><i class="fa fa-desktop"></i>form builder</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>News <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="baru.html"><i class="fa fa-send"></i>Announcement</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Blog <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blog.html"><i class="fa fa-send"></i>Article</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="gallery.html"><i class="fa fa-anchor "></i>Gallery</a>
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
                            <?php 
$peopid = $_GET['id'];
//echo 'Debug'.$peopid;
$query = "SELECT * FROM test.people WHERE people_id ='$peopid'";
            
            $result = pg_query($con, $query) or die(pg_error($con));
              while($row = pg_fetch_array($result))
              {   
                $zz= $row['people_id'];
                $i= $row['employee'];
                $a=$row['designation'];
                $b=$row['staff_no'];
               // $c=$row['address'];
                $d=$row['contact'];
                $e=$row['email'];
                $f=$row['ext'];
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                            <label>Employee Name </label>
                              <input class="form-control" placeholder="Name" name="employee" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                            <label>Designation</label>
                            <input class="form-control" placeholder="Designation" name="designation" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                            <label>Staff No</label>
                            <input class="form-control" placeholder="staff no" name="staffno" value="<?php echo $b; ?>">
                            </div> 
                          
                        
                            <div class="form-group">
                            <label>Contact</label>
                            <input class="form-control" placeholder="Contact" name="contact" value="<?php echo $d; ?>">
                            </div> 
                            <div class="form-group">
                             <label>Email</label>
                              <input class="form-control" placeholder="Email"  name="email" value="<?php echo $e; ?>">
                            </div>  
                            <div class="form-group">
                             <label>Ext</label>
                             <input class="form-control" placeholder="Ext"  name="ext" value="<?php echo $f; ?>">
                            </div>  
                            <button type="submit" class="btn btn-default">Update Record</button>

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