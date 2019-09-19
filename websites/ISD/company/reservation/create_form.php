<?php include 'header.php';?>



<body>
	<?php include 'navbar.php';?>
	<?php include 'menu-tab.php';?>
	
		<div class = "content">
			<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class = "col-md-9 col-lg-9">
					<div class="widget wgreen">
                
                <div class="widget-head">
                  <div class="pull-left">Create Form</div>
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
                     <form class="form-horizontal" role="form" action="" method="post">
                              
                                           
								
					
					
					
					
					
					
					
					
					
					
					
					
								
								
								
								
								 <div class="form-group">
    <label class="col-lg-2 control-label">Are you sure want to submit button?</label>
        <div class="col-lg-5">
<?php
include('includes/dbcon.php');

    $query=mysqli_query($con,"select * from combo order by combo_name")or die(mysqli_error($con));
      $count=mysqli_num_rows($query);
      while ($row=mysqli_fetch_array($query)){
        $id=$row['combo_id'];
      
?>     
              
                
<?php }?>            

								

              
                    <input type="radio" id="inlineCheckbox1" value="<?php echo $id;?>" name="combo_id">
                 
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
		</div>

<?php include 'script.php';?>
<script>
         $(function () {
         //Initialize Select2 Elements
         $(".select2").select2();
         

     })
    </script>
</body>
</html>



