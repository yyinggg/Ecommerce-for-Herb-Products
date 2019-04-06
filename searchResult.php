<?php
session_start();
error_reporting(0);

include('includes/connection.inc.php');

include('seller-editshop.php');

?>
<?php



if(isset($_REQUEST["delete"])){
    $delItem= $_REQUEST["delete"];
    $sqldel="DELETE FROM product WHERE product_id='$delItem'"; 
    $resultdel=mysqli_query($link,$sqldel);
    if($resultdel){
    echo '<script type="text/javascript">
    alert(\'Remove this prouduct successfully!\');
    location="seller_allproducts.php"; </script>';

     
}else{
    echo "fail";
}

}


?>

<?php

$sql = mysqli_query($link,"SELECT image_name FROM shopprofile WHERE user='$name'");
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
		
		

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

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
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row outer-bottom-sm'>
			<div class='col-md-3 sidebar'>
	            <!-- ================================== TOP NAVIGATION ================================== -->

<!-- ================================== TOP NAVIGATION : END ================================== -->	            <div class="sidebar-module-container">
	            	<h3 class="section-title">shop by</h3>
	            	<div class="sidebar-filter">
		            	<!-- ============================================== SIDEBAR CATEGORY ============================================== -->
<div class="sidebar-widget wow fadeInUp outer-bottom-xs ">
	<div class="widget-header m-t-20">
		<h4 class="widget-title">Category</h4>
	</div>
	<div class="sidebar-widget-body m-t-10">
	 
		<div class="accordion">
	    	<div class="accordion-group">
	            <div class="accordion-heading">
	               <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
	                   HIGH BLOOD PRESSURE 
	                </a>
	                 <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
	                   FLU & COLD
	                </a>
	                 <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
	                  HEART HEALTH
	                </a>
	                 <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
	                  IMMUNE HEALTH
	                </a>
	                 <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
	                   KIDNEY HEALTH
	                </a>
	                 <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
	                   DIABETES 
	                </a>
	                 <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
	                  BRAIN HEALTH 
	                </a>
	                  <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
	                  LIVER HEALTH
	                </a>
	                  <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
	                   EYE HEALTH
	                </a>
	                 </a>
	                  <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
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
				<a href="seller-view-allproduct.php?companynm=<?php echo $shopname;?>&shopimage=<?php echo $shoppic;?>"><?php echo '<img src="shop_img/'.$shoppic.'" height="250" width="1450" align="center" class="img-responsive">';?> 
				<a href="seller_shopprofile.php?companynm=<?php echo $shopname ;?>&shopimage=<?php echo $shoppic;?>"><h5 style="text-align:right;">View Profile</h5></a>
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
         <?php 
if(isset($_POST['search-submit'])){
    $search = mysqli_real_escape_string($link,$_POST['productnm']);
    $sqlsearch= "SELECT * FROM product WHERE p_name LIKE '%$search%' ";
    $searchResult=mysqli_query($link, $sqlsearch);
    $queryResult=mysqli_num_rows($searchResult);
    
    echo "There are ".$queryResult." results! " ; 
    
    if($queryResult > 0){
        while ($rowsearch = mysqli_fetch_assoc($searchResult)){
          
          echo "  <div class='col-lg-3 col-md-3 col-sm-12'>
      <form method='post' enctype='multipart/form-data'>
        <div class='card'>
          <h6 class='card-title bg-info text-white p-2 text-uppercase'> </h6>

          <div class='card-body'>
   
           <center><img src='pro_img/".$rowsearch['p_image'] ."' height='300' width='200' class='img-thumnail' ></center>
              <form id='form1'name='form1' method='GET' >
                 
        <input type='hidden' name='pid'  value=' ".$rowsearch['product_id'] ."'/>
            <h6><center><a href='seller_viewproductdetails.php?id=".$rowsearch['product_id'] ."'> ".$rowsearch['p_name'] ." </a></center></b></h6>
           <h6> <center>RM ".$rowsearch['p_price']."<center></h6> 

          </div>
          <div class='btn-group d-flex'>
            <form id='form1' name='form1' method='post' >
                
                <button type='button'><a href='seller-editproduct.php?edit=id=".$rowsearch['product_id'] ."'>Edit</a></button><button><a href='seller_allproducts.php?delete=id=".$rowsearch['product_id'] ."''>Delete</button>
          </div>";  
        }
    } else{
            echo "THERE ARE NO MATCHING PRODUCT ! ";
        
    
    }
}
        
    
    

               
            


?> 
          </div>
	
		
	
		
		
	
		
	
		
	
		
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