
<?php
 error_reporting( ~E_NOTICE ); // avoid notice
 require_once 'db.php';
 include('header.php');
 
 if(isset($_POST['btnsave']))
 {
  $article = $_POST['article'];// user name
  $source = $_POST['source'];// user email
  
  $imgFile = $_FILES['img']['img'];
  $tmp_dir = $_FILES['img']['img'];
  $imgSize = $_FILES['user_image']['size'];
  
  
  if(empty($article)){
   $errMSG = "Please Enter Username.";
  }
  else if(empty($source)){
   $errMSG = "Please Enter Your Job Work.";
  }
  else if(empty($imgFile)){
   $errMSG = "Please Select Image File.";
  }
  else
  {
   $upload_dir = 'img/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
   // rename uploading image
   $userpic = rand(1000,1000000).".".$imgExt;
    
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '5MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else{
     $errMSG = "Sorry, your file is too large.";
    }
   }
   else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   }
  }
  
  
  // if no error occured, continue ....
  if(!isset($errMSG))
  {
   $stmt = $db->prepare("INSERT INTO test.news(article,source) VALUES(:uname, :ujob)");
   $stmt->bindParam(':uname',$article);
   $stmt->bindParam(':ujob',$source);
  // $stmt->bindParam(':upic',$userpic);
   
   if($stmt->execute())
   {
    $successMSG = "new record succesfully inserted ...";
    header("refresh:5;index.php"); // redirects image view page after 5 seconds.
   }
   else
   {
    $errMSG = "error while inserting....";
   }
  }
 }
?>
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
                                <a href="news.php"><i class="fa fa-send"></i>Announcement</a>
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
                <div class="col-lg-12">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">


                            <!-- edit kat sini -->
                            <form method="post" enctype="multipart/form-data" class="form-horizontal">
     
 <table class="table table-bordered table-responsive">
 
    <tr>
     <td><label class="control-label">Article Title</label></td>
        <td><input class="form-control" type="text" name="article" placeholder="Enter Article" value="" /></td>
    </tr>
    
    <tr>
     <td><label class="control-label">Source</label></td>
        <td><input class="form-control" type="text" name="source" placeholder="Source" value="" /></td>
    </tr>
    <tr>
     <td><label class="control-label">Date</label></td>
        <td><input class="form-control" type="date" name="date" placeholder="date" value="" /></td>
    </tr>
    <tr>

     <td><label class="control-label">Images</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
    <tr>
     <td><label class="control-label">Description</label></td>
        <td><input class="form-control" type="text" name="description" placeholder="description" value="" /></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
    </tr>
    
    </table>
    
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
