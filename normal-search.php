<?php
session_start();
error_reporting(0);
include('includes/connection.inc.php');
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
<?php include('includes/b4login-top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/b4login-main-header.php');?>
	<!-- =====================b4login======================== NAVBAR ============================================== -->
<?php include('includes/b4login-menu-bar.php');?>
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
	               <a href="mennutrition.php"  class="accordion-toggle collapsed">
	                   MEN'S NUTRITION 
	                </a>
	                 <a href="womennutrition.php"  class="accordion-toggle collapsed">
	                   WOMEN'S NUTRITION
	                </a>
	                 <a href="heart.php"  class="accordion-toggle collapsed">
	                  HEART HEALTH
	                </a>
	                 <a href="immune.php"  class="accordion-toggle collapsed">
	                  IMMUNE HEALTH
	                </a>
	                 <a href="kidney.php"  class="accordion-toggle collapsed">
	                   KIDNEY HEALTH
	                </a>
	                 <a href="diabetes.php"  class="accordion-toggle collapsed">
	                   DIABETES 
	                </a>
	                 <a href="brain.php"  class="accordion-toggle collapsed">
	                  BRAIN HEALTH 
	                </a>
	                  <a href="liver.php"  class="accordion-toggle collapsed">
	                  LIVER HEALTH
	                </a>
	                  <a href="eye.php"  class="accordion-toggle collapsed">
	                   EYE HEALTH
	                </a>
	                 </a>
	                  <a href="view_allproducts.php"  class="accordion-toggle collapsed">
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
		<center><h3>ALL PRODUCTS</h3></center>
</div>

				<div class="search-result-container">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active " id="grid-container">
							<div class="category-product  inner-top-vs">
							
          <p>
     <div class="row">
  <?php 
if(isset($_POST['search-submit2'])){
    $search = mysqli_real_escape_string($link,$_POST['productnm']);
    $sqlsearch= "SELECT * FROM product WHERE p_name LIKE '%$search%' ";
    $searchResult=mysqli_query($link, $sqlsearch);
    $queryResult=mysqli_num_rows($searchResult);
    
    echo "<h3><left><strong>There are ".$queryResult." search results!</center> </strong><br><h3>" ; 
    
    if($queryResult > 0){
        while ($rowsearch = mysqli_fetch_assoc($searchResult)){
          $rowid=$rowsearch['product_id'];
          $rowname=$rowsearch['p_name'];
          $rowprice=$rowsearch['p_price'];
          $rowimage=$rowsearch['p_image'];

          echo " <div class='col-lg-3 col-md-3 col-sm-12'>
      <form method='post' enctype='multipart/form-data'>
        <div class='card'>
          <h6 class='card-title bg-info text-white p-2 text-uppercase'> </h6>

          <div class='card-body'>
   		
           <center><img src='pro_img/".$rowimage ."' height='300' width='200' class='img-thumnail' ></center>
              <form id='form1'name='form1' method='GET' >
                 
        <input type='hidden' name='pid'  value=' ".$rowid ."'/>
            <h6><center><a href='view-productdetails.php?id=".$rowid ."'> ".$rowname ." </a></center></b></h6>
           <h6> <center>RM ".$rowprice."<center></h6> 

          </div>
	
		
 </div>	
		
		
	
		
	
		
	
		
										</div><!-- /.row -->";  
        }
    } else{
            echo "THERE ARE NO MATCHING PRODUCT ! ";
        
    
    }
}
        
    
    
             
            


?> 
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