<?php

  include('header.php');
  //session_start();
  //$user = $_SESSION['user_id'];

?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39365077-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    //var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- signature -->

  <style>
    label{
      display: inline-block;
      width: 100%;
    }
    input{
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }
    .registerbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }
  </style>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 35%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 8px;
}

/* Right column (page content) */
.right {
  flex: 65%;
  padding: 15px;
}

.vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #3BB9FF;
    color: white;
}
</style>

     <script type="text/javascript">
    var canvas, ctx, flag = false,
        prevX = 0,
        currX = 0,
        prevY = 0,
        currY = 0,
        dot_flag = false;

    var x = "black",
        y = 2;
    
    function init() {
        canvas = document.getElementById('can');
        ctx = canvas.getContext("2d");
        w = canvas.width;
        h = canvas.height;
    
        canvas.addEventListener("mousemove", function (e) {
            findxy('move', e)
        }, false);
        canvas.addEventListener("mousedown", function (e) {
            findxy('down', e)
        }, false);
        canvas.addEventListener("mouseup", function (e) {
            findxy('up', e)
        }, false);
        canvas.addEventListener("mouseout", function (e) {
            findxy('out', e)
        }, false);
    }
    
    function color(obj) {
        switch (obj.id) {
            case "green":
                x = "green";
                break;
            case "blue":
                x = "blue";
                break;
            case "red":
                x = "red";
                break;
            case "yellow":
                x = "yellow";
                break;
            case "orange":
                x = "orange";
                break;
            case "black":
                x = "black";
                break;
            case "white":
                x = "white";
                break;
        }
        if (x == "white") y = 14;
        else y = 2;
    
    }
    
    function draw() {
        ctx.beginPath();
        ctx.moveTo(prevX, prevY);
        ctx.lineTo(currX, currY);
        ctx.strokeStyle = x;
        ctx.lineWidth = y;
        ctx.stroke();
        ctx.closePath();
    }
    
    function erase() {
        var m = confirm("Want to clear");
        if (m) {
            ctx.clearRect(0, 0, w, h);
            document.getElementById("canvasimg").style.display = "none";
        }
    }
    
    function save() {
        document.getElementById("canvasimg").style.border = "2px solid";
        var dataURL = canvas.toDataURL();
        document.getElementById("canvasimg").src = dataURL;
        document.getElementById("canvasimg").style.display = "inline";
    }
    
    function findxy(res, e) {
        if (res == 'down') {
            prevX = currX;
            prevY = currY;
            currX = e.clientX - canvas.offsetLeft;
            currY = e.clientY - canvas.offsetTop;
    
            flag = true;
            dot_flag = true;
            if (dot_flag) {
                ctx.beginPath();
                ctx.fillStyle = x;
                ctx.fillRect(currX, currY, 2, 2);
                ctx.closePath();
                dot_flag = false;
            }
        }
        if (res == 'up' || res == "out") {
            flag = false;
        }
        if (res == 'move') {
            if (flag) {
                prevX = currX;
                prevY = currY;
                currX = e.clientX - canvas.offsetLeft;
                currY = e.clientY - canvas.offsetTop;
                draw();
            }
        }
    }
    </script>
  

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

  <link rel="stylesheet" href="assets/jquery.signaturepad.css">
  <link rel="stylesheet" href="assets/jquery.signaturepad.css">
  <!--[if lt IE 9]><script src="signature-pad/build/flashcanvas.js"></script><![endif]-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <link href="./css/jquery.signaturepad.css" rel="stylesheet">
   

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./js/numeric-1.2.6.min.js"></script> 
    <script src="./js/bezier.js"></script>
    <script src="./js/jquery.signaturepad.js"></script> 
    
    <script type='text/javascript' src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
    <script src="./js/json2.min.js"></script>

</head>

<style type="text/css">
      body{
        font-family:monospace;
        text-align:center;
      }
      #btnSaveSign {
        color: #fff;
        background: #f99a0b;
        padding: 5px;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        margin-top: 10px;
      }
      #signArea{
        width:304px;
        margin: 50px auto;
      }
      .sign-container {
        width: 60%;
        margin: auto;
      }
      .sign-preview {
        width: 150px;
        height: 50px;
        border: solid 1px #CFCFCF;
        margin: 10px 5px;
      }
      .tag-ingo {
        font-family: cursive;
        font-size: 12px;
        text-align: left;
        font-style: oblique;
      }
    </style>

<body>
  
  <?php include 'menu-tab.php';?>
  
    <div class = "content">
    
      <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
      
      

    <div class="row"> 
<div class="vertical-menu">
 <h3> <b><a href="#">MENU</a></b></h3>
  <a href="reservation.php"  class="active">E-mail Account Application</a>
  <a href="index.php">Check Inquiry Status</a>
 

</div>
      
  
  
        <div class = "col-md-9 col-lg-9">
          <div class="widget wgreen">
                
                <div class="widget-head">
                  <div class="pull-left">E-mail Account Application</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">

                    <br>
                    <!-- Form starts.  -->
                     <form class="form-horizontal" role="form" action="reservation_save.php" method="post">
                              
                                           
                
               <div class="form-group">
                                  <label class="col-lg-2 control-label">Name</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Your Name" name="first" required>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Staff Number</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Staff Number" name="r_staff" required>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Position</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Position" name="position" required>
                                  </div>
                                </div>    

                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Department</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Department" name="department" required>
                                  </div>
                                </div>
                
                <div class="form-group">
                                  <label class="col-lg-2 control-label">Division</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Division" name="division" required>
                                  </div>
                                </div> 

                 <div class="form-group">
                                  <label class="col-lg-2 control-label">Tel Ext/DID No</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Tel Ext" name="tel_ext" required>
                                  </div>
                                </div> 
                                
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Mobile Phone No</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="Phone" name="contact"  required>
                                  </div>
                                </div>
                
                <div class="form-group">
                                  <label class="col-lg-2 control-label">PC IP Address</label>
                                  <div class="col-lg-5">
                                    <input type="text" class="form-control" placeholder="PC IP Address" name="pc_ip"  required>
                                  </div>
                                </div>
                
                <div class="form-group">
                                  <label class="col-lg-2 control-label">Is the PC assigned to you</label>
                                  <div class="col-lg-5">
                                    <select class="form-control" id="exampleSelect1" name="pc_assign" required>
                                      <option>Yes</option>
                                      <option>No</option>                                     
                                    </select>
                                  </div>
                                </div> 
  
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Date</label>
                                  <div class="col-lg-5">
                                    <input type="date" class="form-control" name="date" required>
                                    <span class = "label label-warning"></span>
                                  </div>
                                </div>
    
                <div class="form-group">
                                  <label class="col-lg-2 control-label">Your Signature</label>

  <!-- Sign  starts.  -->

     
      <!-- Signature Pad Here -->
      <div id="signature-pad" class="signature-pad">
        <div class="signature-pad--body" style="position:relative;right:150px">
          <canvas id="signCanvas" ></canvas>
        </div>
    
  
     
          <label>Sign above</label>

            <div>
              <button type="button" class="button clear" data-action="clear" onclick="document.getElementById('Sign').value=''">Clear</button>
              <!-- <button type="button" class="button" data-action="change-color">Change color</button> -->
              <button type="button" class="button" data-action="undo">Undo</button>
               <button type="button" class="button save" data-action="save-png">Confirm</button>
            </div>
            <div>
              <!--
                <button type="button" class="button save" data-action="save-jpg">Save as JPG</button>
                <button type="button" class="button save" data-action="save-svg">Save as SVG</button>
              -->
              
            </div>
        
   
      </div>
      <!-- Signature Pad Here -->
      <input placeholder="Your Signature in Raw from will be in here" type="hidden" name="signature" id="Sign">
      <p>Confirmed Signature : </p>
      <img id="imgSign" style="width: 30%; height: 30%;">
  
<br><br><br><br>
  <div class="form-group">
    <label class="col-lg-2 control-label">Email</label>
    <div class="col-lg-5">
      <input type="text" class="form-control" placeholder="Email" name="email"  >
                              
    </div>
  </div>
              
   <div class="form-group">
    <label class="col-lg-2 control-label">Are you sure want to submit ?</label>
        <div class="col-lg-5">


<?php

include('db.php');

    $query=pg_query($con,"select * from combo order by combo_name")or die(pg_last_error($con));
      $count=pg_num_rows($query);
      while ($row=pg_fetch_array($query)){
        $id=$row['combo_id'];
      
?>     
              
                
<?php }?>            

                    <input type="radio" id="inlineCheckbox1" value="<?php echo $id;?>" name="combo_id" required>
                 
                </div>
              </div>
                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-6">
                                    
                                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                    
                                  </div>
                                </div>
                              </form>
                  </div>
                </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
              </div>    
        </div>
        
    
       </div>   
        </div> </div>   
  <script src="js/signature_pad.umd.js"></script>
    <script src="js/app.js"></script>
</body>
</html>



