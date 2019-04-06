<?php

include('includes/connection.inc.php');

error_reporting(-1);
$pnm= $pprice= $pqty= $pcategory= $pdescription= $target= $image= $companyname="";


//how to display company name?
	    $name = $_SESSION['username'];
        $user="SELECT s_username, s_companyname FROM supplier WHERE s_username='$name'";
        $result = mysqli_query($link,$user);
        $row= mysqli_fetch_array($result); 

if (isset($_POST['upload1'])){

 $pnm=$_POST['pnm'];
 $pprice=$_POST['pprice'];
 $pqty=$_POST['pqty'];
 $pcategory=$_POST['pcategory'];
 $pavailable=$_POST['pavailable'];
$pdescription=addslashes($_POST['pdescription']);
$companyname=$row['s_companyname'];

 //user
  


//upload image
		//the path store the uploaded image
		$target= "pro_img/".basename($_FILES['pimg']['name']);


		//get all submmited data from form
		$image = $_FILES['pimg']['name'];

        //recognize which user upload the product
      
        
       if($user){
        
		$sql=("INSERT INTO product VALUES ('','$pnm','$pprice','$pqty','$image','$pcategory','$pavailable','$pdescription','$name','$companyname')");
	    $test=mysqli_query($link,$sql);
		
        }        
	      //if($test){
	      	//echo "success";
	     // }else{
	      //	echo "fail";
	     // }     
		//move the uploaded image into folder:image
		if(move_uploaded_file($_FILES['pimg']['tmp_name'], $target)){
		    echo"<script type='text/javascript'>alert('New product added successfully!')</script>";
		    //echo"Image uploaded successfully!";
		    

		}
		else{
		     echo"<script type='text/javascript'>alert('There was a problem uploading new product!')</script>";

		    //echo"There was a problem uploading image!";

	
		}
	
	
	
}




?>
