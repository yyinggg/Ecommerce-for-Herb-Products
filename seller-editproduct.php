<?php
session_start();
error_reporting(-1);

include('includes/connection.inc.php');
?>
<?php
if(isset($_REQUEST["edit"])){
                                     $p_id=$_REQUEST["edit"];
                                     if(!empty($p_id)){
                                     $_SESSION['edit']=$p_id;
                                     }

     
  if (isset($_POST['updateProduct'])){
        $name = $_SESSION['username'];
        $user="SELECT s_username FROM supplier WHERE s_username='$name'";
        $result = mysqli_query($link,$user);
        
          
        $pnm=$_POST['pnm'];
        $pprice=$_POST['pprice'];
        $pqty=$_POST['pqty'];
        $pcategory=$_POST['pcategory'];
        $pavailable=$_POST['pavailable'];
        $pdescription=$_POST['pdescription'];
        //$companyname=$row['s_companyname'];

       
       //upload image
		//the path store the uploaded image
		$target= "pro_img/".basename($_FILES['pimg']['name']);


		//get all submmited data from form
		$image =$_FILES['pimg']['name'];

        
        
    	$sqlupdate="UPDATE product SET p_name='$pnm',p_price='$pprice',p_quantity='$pqty',p_image='$image',p_category='$pcategory',p_available='$pavailable',p_description='$pdescription' WHERE product_id='$p_id'";
	    $result=mysqli_query($link,$sqlupdate) or mysqli_error($link);
 
             
		if(move_uploaded_file($_FILES['pimg']['tmp_name'], $target)){
		    echo"<script type='text/javascript'>alert('Update product successfully!')</script>";
           
		}
		else{
		     echo"<script type='text/javascript'>alert('There was a problem update the product!')</script>";
	
		}

 }

}
?>   

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Manage Product</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>


	</head>
    <body class="cnt-home">
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<?php include('includes/seller-top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/seller-main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/seller-menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="checkout-box inner-bottom-sm">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	      
	          <span></span>MANAGE PRODUCT
	        
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
			<div class="row">		
<h4>EDIT PRODUCT</h4>

                                  <?php 
                                    if(isset($_REQUEST["edit"])){
                                     $p_id=$_REQUEST["edit"];
                                     if(!empty($p_id)){
                                     $_SESSION['edit']=$p_id;
                                     }
                                }
                              
                                
                                $query1="SELECT * FROM product WHERE product_id='$p_id'";
                                $result2=mysqli_query($link,$query1);
                              
                            	if(!$result2)
                            	{
                            		echo ("Error: ".mysqli_error($link));
                            		exit();
                            	} 
                                while ($row7=mysqli_fetch_array($result2)){
                                   
                                
                                ?>
				<div class="col-md-12 col-sm-12 already-registered-login">

                               

					<form class="register-form" role="form" method="post" enctype="multipart/form-data">
						
						<div class="form-group">
					    <label class="info-title" for="name" >Product Name<span>*</span></label>
					    <input type="text" id="pnm" name="pnm" value="<?php echo $row7['p_name'] ?>"required="required">
						</div>

						<div class="form-group">
					    <label class="info-title" for="price">Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span></label>
					    <input type="text" id="pprice" name="pprice" value="<?php echo $row7['p_price'] ?>"required="required">
						</div>

						<div class="form-group">
					    <label class="info-title" for="quantity">Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span></label>
					    <input type="text" id="pqty" name="pqty" value="<?php echo $row7['p_quantity'] ?>" required="required">
						</div>

						<div class="form-group">
					    <label class="info-title" >Image<span>*</span></label>
					   
					    <input type="file" id="pimg" name="pimg" ><center><?php echo  '<img src="pro_img/'.($row7['p_image'] ).'" height="300" width="200"  class="img-thumnail" >';?></center>
						</div>


						<div class="form-group">
					    <label class="info-title">Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span></label>
					    <td><input type="text" id="Category" name="Category" value="<?php echo $row7['p_category'] ?>" READONLY>
					    
                  <select name="pcategory">
                  	<option name="pcategory" value="">---Select Category---</option>
                   <option name="pcategory"value="Men's Nutrition">Mens Nutrition</option>
                    <option name="pcategory"value="Women's Nutrition">Womens Nutrition</option>
                    <option name="pcategory"value="Heart Health">Heart Health</option>
                    <option name="pcategory"value="Immune Support">Immune Support</option>
                    <option name="pcategory"value="Kidney Health">Kidney Health</option>
                    <option name="pcategory"value="Diabetes">Diabetes</option>
                    <option name="pcategory"value="Brain Health">Brain Health</option>
                    <option name="pcategory"value="Liver Health">Liver Health</option>
                    <option name="pcategory"value="Eye Health">Eye Health</option>
                  </select>
                </td>
                		
						</div>
						<div class="form-group">
					    <label class="info-title">Stock Availability&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span></label>
					    <td><input type="text" id="stock" name="stock" value="<?php echo $row7['p_available'] ?>" READONLY>
                  <select name="pavailable">
                  	<option name="pavailable"value="">---Select Availability---</option>
                    <option name="pavailable"value="In Stock">In Stock</option>
                    <option name="pavailable"value="Out Of Stock">Out Of Stock</option>
                    
                  </select>
                </td>
						</div>

						<div class="form-group">
					   <label class="info-title" >Product Description<span>*</span></label>
					    <textarea name="pdescription" rows="40" cols="100" width="300px"height="150px"><?php echo $row7['p_description']?></textarea>
						</div>

					  <button type="submit" name="updateProduct" class="btn-upper btn btn-primary checkout-page-button">Update</button>
					 <?php }?>
					</form>
				
				</div>	
				<!-- already-registered-login -->		

			</div>			
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->

					  	<!-- checkout-step-02  -->
					  	
					</div><!-- /.checkout-steps -->
				</div>
			<?php include('includes/seller-myaccount-sidebar.php');?>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
	<?php include('includes/brands-slider.php');?>

</div>
</div>
<?php include('includes/footer.php');?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
</body>
</html>
