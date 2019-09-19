<html>
<head>
  <meta charset="utf-8" />
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- signature -->
  <link rel="stylesheet" href="css/signature-pad.css">

<!--[if IE]>
  <link rel="stylesheet" type="text/css" href="css/ie9.css">
<![endif]-->

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
</head>
<body>
  <div style="padding: 16px; width: 100%; box-sizing: border-box;">
    <h2>Sign Up</h2>
    <form action="regconfig.php" method="post">
      <label>First Name</label>
      <input type="text" name="first_name" required>

      <label>Middle Name</label>
      <input type="text" name="middle_name">

      <label>Last Name</label>
      <input type="text" name="last_name" required>

      <label>Email</label>
      <input type="text" name="email"  maxlength="30" required>

      <label>Staff Number</label>
      <input type="text" name="staff_no" maxlength="6" required>

      <label>Department</label>
      <input type="text" name="staff_dept" maxlength="30" required>

      <label>Division</label>
      <input type="text" name="staff_div" maxlength="30" required>

      <label>Extension Number</label>
      <input type="text" name="staff_ext" maxlength="5" required>
        
      <label>Phone Number(mobile)</label>
      <input type="text" name="phone_no" maxlength="15" required>
      
      <label>Username</label>
      <input type="text" name="username" maxlength="30" required>

      <label>Password</label>
      <input type="password" name="password" maxlength="30" required>
        
      <label>Signature</label>
      <!-- Signature Pad Here -->
      <div id="signature-pad" class="signature-pad">
        <div class="signature-pad--body">
          <canvas id="signCanvas"></canvas>
        </div>
        <div class="signature-pad--footer">
          <div class="description">Sign above</div>

          <div class="signature-pad--actions">
            <div>
              <button type="button" class="button clear" data-action="clear" onclick="document.getElementById('Sign').value=''">Clear</button>
              <!-- <button type="button" class="button" data-action="change-color">Change color</button> -->
              <button type="button" class="button" data-action="undo">Undo</button>
            </div>
            <div>
              <!--
                <button type="button" class="button save" data-action="save-jpg">Save as JPG</button>
                <button type="button" class="button save" data-action="save-svg">Save as SVG</button>
              -->
              <button type="button" class="button save" data-action="save-png">Confirm</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Signature Pad Here -->
      <input placeholder="Your Signature in Raw from will be in here" type="hidden" name="signature" id="Sign">
      <p>Confirmed Signature : </p>
      <img id="imgSign" style="width: 30%; height: 30%; display:none;" src="">

      <input type="submit" value="Submit" class="registerbtn">
    </form>

    <!-- signature -->
    <script src="js/signature_pad.umd.js"></script>
    <script src="js/app.js"></script>
    <!-- signature -->
  </div>
</body>
</html>