<?php
session_start();
error_reporting(0);

date_default_timezone_set("Asia/Kuala_Lumpur");

include('includes/connection.inc.php');
include('comments.inc.php');
error_reporting(-1);
?>


<?php
//$shopname=$_SESSION['companynm'];
if(isset($_REQUEST["companynm"])){
     $shopname=$_REQUEST["companynm"];
    if(!empty($shopname)){
     $_SESSION['companynm']=$shopname;
     }


   
$sql = mysqli_query($link,"SELECT companyname FROM product WHERE companyname='$shopname' ");
$productCount = mysqli_num_rows($sql); 
if ($productCount > 0) {
  
while($row = mysqli_fetch_array($sql)){ 
    
      $shopname=$row['companyname'];
  
}
}
}
?>

<?php
if(isset($_REQUEST["shopimage"])){
     $shoppic=$_REQUEST["shopimage"];
    if(!empty($shoppic)){
     $_SESSION['shopimage']=$shoppic;
     }
} 
if(isset($_REQUEST["shopimage"])){
     $shoppic=$_REQUEST["shopimage"];
    if(!empty($shoppic)){
     $_SESSION['shopimage']=$shoppic;
     }}

$shoppic=$_SESSION['shopimage'];


$sql = mysqli_query($link,"SELECT image_name FROM shopprofile WHERE companyname='$shopname'");
$productCount = mysqli_num_rows($sql); 
if ($productCount > 0) {
  
while($row = mysqli_fetch_array($sql)){ 
    
      $shoppic=$row['image_name'];
  
  
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

	    <title>Product Category</title>

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
		<!-- Demo Purpose Only. Should be removed in production : END -->

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		
				<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<style>
  
  .button{
      width:100px;
      height:30px;
      background-color: #282828;
      border:#fff;
      cursor:pointer;
      
  }
 
.comment-box {
 border: 1px solid black;
  width: 815px;
  padding: 20px;
  margin-bottom:4px;
  background-color:#fff;
  border-radius:4px;
}
.comment-box p{
  color: #000000;
  font-family: arial;
  font-size: 14px;
  position:left;
}
.edit-form {
  position:absolute;
  top:0px;
  right:0px;
}
.edit-btn {
  position:absolute;
  top:0px;
  right:0px;
}
</style>
		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
    <body class="cnt-home">
	
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<?php include('includes/customer-top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/customer-main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/customer-menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>
<!-- ============================================== HEADER : END ============================================== -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row outer-bottom-sm'>
			<div class='col-md-3 sidebar'>
	            <!-- ================================== TOP NAVIGATION ================================== -->

<!-- ================================== TOP NAVIGATION : END ================================== -->	            <div class="sidebar-module-container">
	            	<h3 class="section-title">Back to</h3>
	            	<div class="sidebar-filter">
		            	<!-- ============================================== SIDEBAR CATEGORY ============================================== -->
<div class="sidebar-widget wow fadeInUp outer-bottom-xs ">
	<div class="widget-header m-t-20">
	
	</div>
	<div class="sidebar-widget-body m-t-10">
	 
		<div class="accordion">
	    	<div class="accordion-group">
	            <div class="accordion-heading">
	            
	                  <a href="customer-viewshopprofile.php?companynm=<?php echo $shopname ;?>&shopimage=<?php echo $shoppic;?>"  class="accordion-toggle collapsed">
	                   VIEW PROFILE
	                </a>
	                 </a>
	                  <a href="customer-viewshop.php?companynm=<?php echo $shopname;?>"  class="accordion-toggle collapsed">
	                 VIEW ALL PRODUCTS
	                </a>

	            </div>  
	        </div>
	    </div>
	   
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->



    
<!-- ============================================== COLOR: END ============================================== -->

	            	</div><!-- /.sidebar-filter -->
	            </div><!-- /.sidebar-module-container -->
            </div><!-- /.sidebar -->
			<div class='col-md-9'>
					<!-- ========================================== SECTION – HERO ========================================= -->

	<div id="category" class="category-carousel hidden-xs">
		<div class="item">	
			<div class="image">
				<a href="customer-viewshop.php?companynm=<?php echo $shopname;?>&shopimage=<?php echo $shoppic;?>"><?php echo '<img src="shop_img/'.$shoppic.'" height="250" width="900" align="center" >';?> 
				<a href="customer-viewshopprofile.php?companynm=<?php echo $shopname ;?>&shopimage=<?php echo $shoppic;?>"><h5 style="text-align:right;">View Profile</h5></a>
			</div>
			<div class="container-fluid">
				<div class="caption vertical-top text-left">
					<div class="big-text">
						<br />
					</div>

					     
				</div><!-- /.caption -->
			</div><!-- /.container-fluid -->
		</div>
</div>

				<div class="search-result-container">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active " id="grid-container">
							<div class="category-product  inner-top-vs">
							<div class="row">
<div id="pageContent">
          
          <td width="68%" valign="top" style="">
          <center><h3>Seller Ratings and Reviews </h3></center>
           
 
       <br><br>
   <?php 
  $name= $_SESSION['username'];
  echo"
    <form method='POST' action='".setCustomerComments($link)."'>
    <input type='hidden' name='uid' value='".$name ."'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'> 
    <center><textarea name='message'  placeholder='What do you think... ?' rows='5' cols='80'></textarea></center>  <br>
    <center><button type='submit' name='submitpost'>Post</button></center> </form><br><h4>All Comments:</h4><br>
";
 getCustomerComments($link);
 
 ?>
 </p>
<br><br><br><br><br><br>  
 
      </td>
		
	
		
		
	
		
	
		
	
		
										</div><!-- /.row -->
							</div><!-- /.category-product -->
						
						</div><!-- /.tab-pane -->
						
				

				</div><!-- /.search-result-container -->

			</div><!-- /.col -->
		</div></div>
		

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
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>