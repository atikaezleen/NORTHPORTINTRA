<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>
<?php include 'header.php';?>
    <script language="JavaScript"><!--
javascript:window.history.forward(1);
//--></script>

<body>
	<?php include 'navbar.php';?>
	<?php include 'menu-tab.php';?>
	
		<div class = "content">
			<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
				<div class = "col-md-9 col-lg-9">
					<div class="widget wgreen">
              

                <div class="widget-content">
                  <div class="padd">

                    <br>
                    <!-- Form starts.  -->
                     <form class="form-horizontal" role="form" action="details_save.php" method="post">
                               

                               <div class="form-group">
    <label class="col-lg-2 control-label"></label>
        <div class="col-lg-5">
<?php
include('includes/dbcon.php');

    $query=pg_query($con,"select * from combo order by combo_name")or die(pg_error($con));
      $count=pg_num_rows($query);
      while ($row=pg_fetch_array($query)){
        $id=$row['combo_id'];
        $name=$row['combo_name'];
        $price=$row['combo_price'];

       
?>     


          <div class="col-md-6">
              <div class="widget">
                <!-- Widget title -->
               
                <div class="widget-content referrer">
                  <!-- Widget content -->
                  
                

                  <div class="widget-foot text-center">
                    <input type="radio" id="inlineCheckbox1" value="<?php echo $id;?>" name="combo_id">
                  </div>
                </div>
              </div>

            </div>
              <!--end widget-->
            <?php }?>  
         </div>
      </div> 
                                <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-6">
                                    
                                    <button type="submit" class="btn btn-sm btn-primary">Next</button>
                                    
                                  </div>
                                </div>
                              </form>
                  </div>
               
                
              </div>		
				</div>
				
			</div>	
		</div>
<?php include 'footer.php';?> 	
<?php include 'script.php';?>
<script>
  $(function () {
  //Initialize Select2 Elements
    $(".select2").select2();
  })
$( "#datepicker" ).datepicker({ minDate: 0});


</script>
</body>
</html>



