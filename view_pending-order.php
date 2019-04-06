<?php
session_start();
error_reporting(-1);
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

	    <title>ADMIN</title>

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
<?php include('includes/admin-topheader.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/admin-main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/admin-menu-bar.php');?>
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
	            	<h3 class="section-title">MENUS</h3>
	            	<div class="sidebar-filter">
		            	<!-- ============================================== SIDEBAR CATEGORY ============================================== -->
<div class="sidebar-widget wow fadeInUp outer-bottom-xs ">
	<div class="widget-header m-t-20">
		
	</div>
	<div class="sidebar-widget-body m-t-10">
	 
		<div class="accordion">
	    	<div class="accordion-group">
	            <div class="accordion-heading">
	              <a href="view_sellerdetails.php"  class="accordion-toggle collapsed">
	                 SELLER DETAILS
	                </a>
	                 <a href="view_customerdetails.php"  class="accordion-toggle collapsed">
	                  CUSTOMER DETAILS
	                </a>
	                 <a href="view_pending-order.php"   class="accordion-toggle collapsed">
	                  PENDING ORDER DETAILS
	                </a>
	                <a href="view_delivered-order.php"   class="accordion-toggle collapsed">
	                  DELIVERED ORDER DETAILS
	                </a>
	                <a href="view_shipped-order.php"   class="accordion-toggle collapsed">
	                  SHIPPED ORDER DETAILS
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
			<div class='col-md-8'>
					<!-- ========================================== SECTION – HERO ========================================= -->

	<div id="category" class="category-carousel hidden-xs">
		<center><h3>PENDING ORDER</h3></center>
</div>
<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" >
							<thead>
										<tr>
											<th>#</th>
											<th> Name</th>
											<th width="50">Contact no</th>
											<th>Shipping Address</th>
											<th>Product </th>
											<th>Qty </th>
											<th>Amount </th>
											<th>Order Date</th>
											<th>Company Name</th>
										
											
										
										</tr>
									</thead>
								
<tbody>
<?php 
//$st='Delivered';
$query=mysqli_query($link,"select customer.receivername as name,customer.receiver_ph as usercontact,customer.ship_address as shippingaddress,customer.ship_state as shippingstate,customer.ship_city as shippingcity,customer.ship_pcode as shippingpcode,product.p_name as productname,cart.cart_pqty as quantity,cart.cart_prate as rate,cart.companyname as companyname,cart.date as orderdate,product.p_price as productprice,cart.id as id  from cart join customer on  cart.username=customer.c_username join product on product.product_id=cart.cart_pid where cart.order_status='Pending'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>								
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['name']);?></td>
											<td><?php echo htmlentities($row['usercontact']);?></td>
										
											<td><?php echo htmlentities($row['shippingaddress'].",".$row['shippingcity'].",".$row['shippingstate']."-".$row['shippingpcode']);?></td>
											<td><?php echo htmlentities($row['productname']);?></td>
											<td><?php echo htmlentities($row['quantity']);?></td>
											<td><?php echo htmlentities($row['rate']);?></td>
											<td><?php echo htmlentities($row['orderdate']);?></td>
											<td><?php echo htmlentities($row['companyname']);?></td>
											
											</tr>

										<?php $cnt=$cnt+1; } ?>
										</tbody>
								</table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('includes/footer.php');?>
<script src="jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap.min.js" type="text/javascript"></script>
	<script src="jquery.flot.js" type="text/javascript"></script>
	<script src="jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
</html>