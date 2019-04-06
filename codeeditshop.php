<?php

include('includes/connection.inc.php');
error_reporting(-1);
   $companyname= $shopimg="";

$name = $_SESSION['username'];
        $user="SELECT  s_username , s_companyname FROM supplier WHERE s_username='$name' ";
        $result = mysqli_query($link,$user);
        $row= mysqli_fetch_array($result); 
        

if (isset($_POST['upload2'])){

$companyname=$_POST['companyname'];


  //user
  


//upload image
		//the path store the uploaded image
		$target= "shop_img/".basename($_FILES['shopimg']['name']);


		//get all submmited data from form
		$shopimg = $_FILES['shopimg']['name'];

        //recognize which user upload the product
      
      //how to display company name?//
        
  
	    
       

		$sql=("INSERT INTO shopprofile VALUES ('','$companyname','$shopimg','$name')");
	    mysqli_query($link,$sql)or die(mysqli_connect_error($link));
               
	           
			//move the uploaded image into folder:image
			if(move_uploaded_file($_FILES['shopimg']['tmp_name'], $target)){
			    echo"<script type='text/javascript'>alert('Shop profile picture added successfully!')</script>";
			    //echo"Image uploaded successfully!";

			}
			else{
			     echo"<script type='text/javascript'>alert('There was a problem uploading profile picture!')</script>";
			    //echo"There was a problem uploading image!";

	
			}

		
	
        
	}
	





?>
