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
                        <h1 class="page-subhead-line">INFORMATION SERVICES DIVISION(ISD) </h1>
                    </div>
                </div>
                <div class="container">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">

                             <div class="col-lg-12">
                <?php
                       
						$emp = $_POST['employee'];
					    $desi = $_POST['designation'];
						$staff = $_POST['staffno'];
						$address = $_POST['address'];
						$contct = $_POST['contact'];
						$email = $_POST['email'];
                        $ext = $_POST['ext'];
					switch($_GET['action']){
                        case 'add':	
                        $var1 =pg_query($con,"select * from test.people")	;
                        if(pg_num_rows($var1)==0 ) { $zz = 1;

                        }	else { $var2 = pg_query($con,"select people_id from test.people order by people_id  desc limit 1");
                        $var3 = pg_fetch_assoc($var2);
                            $zz = $var3['people_id'];
                            $zz++;
                    }



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
								(people_id,employee, designation, staff_no, address,contact, email,ext)
								VALUES ('$zz','".$emp."','".$desi."','".$staff."','".$address."','$contct','".$email."','".$ext."')";
								pg_query($con,$query)or die ('Error in updating Database');
							
						//break;
									
                        }
                    }
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "index.php";
		</script>
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

