<?php
session_start();
error_reporting(-1);
include('seller-addproduct.php');

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
<h4>ADD NEW PRODUCT</h4>
				<div class="col-md-12 col-sm-12 already-registered-login">



					<form class="register-form" role="form" method="post" enctype="multipart/form-data" action="">
						
						<div class="form-group">
					    <label class="info-title" for="name" >Product Name<span>*</span></label>
					    <input type="text" id="pnm" name="pnm" required="required">
						</div>

						<div class="form-group">
					    <label class="info-title" for="price">Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span></label>
					    <input type="text" id="pprice" name="pprice" required="required">
						</div>

						<div class="form-group">
					    <label class="info-title" for="quantity">Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span></label>
					    <input type="text" id="pqty" name="pqty" required="required">
						</div>

						<div class="form-group">
					    <label class="info-title" >Image<span>*</span></label>
					   
					    <input type="file" id="pimg" name="pimg" required="required">
						</div>


						<div class="form-group">
					    <label class="info-title">Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span></label>
					    <td>
                  <select name="pcategory">
                  	<option >---Select Category---</option>
                    <option value="Mens Nutrition">Men's Nutrition</option>
                    <option value="Womens Nutrition">Women's Nutrition</option>
                    <option value="Heart Health">Heart Health</option>
                    <option value="Immune Support">Immune Support</option>
                    <option value="Kidney Health">Kidney Health</option>
                    <option value="Diabetes">Diabetes</option>
                    <option value="Brain Health">Brain Health</option>
                    <option value="Liver Health">Liver Health</option>
                    <option value="Eye Health">Eye Health</option>
                  </select>
                </td>
						</div>
						<div class="form-group">
					    <label class="info-title">Stock Availability&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>*</span></label>
					    <td>
                  <select name="pavailable">
                  	<option >---Select Availability---</option>
                    <option value="In Stock">In Stock</option>
                    <option value="Out Of Stock">Out Of Stock</option>
                    
                  </select>
                </td>
						</div>

						<div class="form-group">
					   <label class="info-title" >Product Description<span>*</span></label>
					    <textarea name="pdescription" rows="40" cols="100" width="300px"height="150px"></textarea>
						</div>

					  <button type="submit" name="upload1" class="btn-upper btn btn-primary checkout-page-button">Upload</button>
					 
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
