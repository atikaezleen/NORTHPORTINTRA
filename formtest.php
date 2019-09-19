
<?php

	include('db.php');


   /* if (isset($_REQUEST['submit'])){
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$bday = $_POST["bday"];
	}

	if(isset($_POST['gender'])){
		$gender = $_POST["gender"];
		echo 'debugA';
	}
	else{
		echo 'debugBt';
		$gender = null;
		}

	if(isset($_POST['marital_status'])){
		$marital_status = $_POST["marital_status"];
		echo 'debugA';
	}
	else
	{
		echo 'debugB';
		$marital_status = null;
	}*/
	$first_name = false;
		if(isset($_POST['first_name'])){
    		$first_name = $_POST['first_name'];
 		}

 	$last_name = false;
		if(isset($_POST['last_name'])){
    		$last_name = $_POST['last_name'];
 		}

 	$bday = false;
		if(isset($_POST['bday'])){
    		$bday = $_POST['bday'];
 		}

 	$gender = false;
		if(isset($_POST['gender'])){
    		$gender = $_POST['gender'];
 		}

 	$marital_status = false;
		if(isset($_POST['marital_status'])){
    		$marital_status = $_POST['marital_status'];
 		}

 	$address = false;
		if(isset($_POST['address'])){
    		$address = $_POST['address'];
 		}

 	$email = false;
		if(isset($_POST['email'])){
    		$email = $_POST['email'];
 		}

 	$phone = false;
		if(isset($_POST['phone'])){
    		$phone = $_POST['phone'];
 		}

 	$phone_ext = false;
		if(isset($_POST['phone_ext'])){
    		$phone_ext = $_POST['phone_ext'];
 		}

 	$dept = false;
		if(isset($_POST['dept'])){
    		$dept = $_POST['dept'];
 		}

 	$position = false;
		if(isset($_POST['position'])){
    		$position = $_POST['position'];
 		}

 	$count = false;
		if(isset($_POST['education'])){
    		$count = count($_POST["education"]);
			
 		}
		
		$count1 = false;
		if(isset($_POST['experience'])){
    		$count1 = count($_POST["experience"]);
 		}

 		if (isset($_POST["image"])) {
      		$image = $_POST["image"]; 
      	}  
	//$first_name = $_POST["first_name"];
	//$last_name = $_POST["last_name"];
	//$bday = $_POST["bday"];
	//$gender = $_POST["gender"];
	//$marital_status = $_POST["marital_status"];
	//$address = $_POST["address"];
	//$email = $_POST["email"];
	//$phone = $_POST["phone"];
	//$phone_ext = $_POST["phone_ext"];
	//$dept = $_POST["dept"];
	//$position = $_POST["position"];
	//$count = count($_POST["education"]);
	//$education = ($_POST["education"][0]); 
	//$education1 = count($_POST["education"]);
	//$education = $_POST["education"];
	//echo $education->getSize(); 
	//echo $_POST['education']->getSize();
	//if($education > 0)  
 	  //list($education)= array_pad(explode("#", $_GET["size"]),2,null);
      //for($i=0; $i<$education; $i++)  
      //{  
            //if(trim($_POST["education"][$i] != ''))  
           //{  
		for($i=0; $i < $count; $i++){
			$education[$i] = ($_POST["education"][$i]);

			
			}
			
		for($j=0; $j < $count1; $j++){
			$experience[$j] = ($_POST["experience"][$j]);

			
			}
		
		ini_set('error_reporting', 'E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR');
     			//$education-> setSize(2);
			
			//$education1 = ($_POST["education"][1]);
			//$education2 = ($_POST["education"][$i]);
			 
		//}
              //echo $count;
     		$sql = "INSERT INTO profile (first_name, last_name, bday, gender, marital_status, address, email, phone, phone_ext, dept, position, education, education1, education2, experience, experience1, experience2,image) VALUES ('$first_name','$last_name','$bday','$gender','$marital_status','$address','$email','$phone','$phone_ext','$dept','$position', '$education[0]','$education[1]','$education[2]', '$experience[0]','$experience[1]','$experience[2]','$image')";
	   
	   $result=pg_query($con, $sql); 

               
               //	if($count = 1){
               		//$sql = "INSERT INTO test.users(education) VALUES ('$education')";
               		//	pg_query($db, $sql);
               //	}

               //	else{
               	//	$sql1 = "INSERT INTO test.users(education,education1) VALUES ('$education','$education1')";
               	//		pg_query($db, $sql1);
               //	}
               	
               		
               		
               	
               
			





			if($result){
            echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";
			echo "<script>document.location='index.php'</script>";
        	}
			//$_POST["education"];
		 
        	ini_set('error_reporting', 'E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR');
?>  
