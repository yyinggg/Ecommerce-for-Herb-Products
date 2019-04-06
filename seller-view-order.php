<?php
session_start();
error_reporting(-1);
include('includes/connection.inc.php');
?>
<!DOCTYPE html>
<html lang="en">

         <?php
         
                             if(isset($_POST['update_status'])){
                            if(!empty($_POST['tick'])){
                                foreach((array)$_POST['tick'] as $selected){
                                    echo $selected. "</br>";
                                    
                                         $shipstatus=$_POST['shipstatus'];
                                        $row4="UPDATE cart SET order_status='$shipstatus' WHERE id= '$selected' ";
                                        $rowresult4= mysqli_query($link,$row4);
                                    
                                }
                                    
                                
                                
                            }
                             }
                             ?>
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>My Order</title>
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
				<li><a href="home.html">Home</a></li>
				<li class='active'>View Order</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="my-wishlist-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12 my-wishlist">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th colspan="4">Order List</th>
				</tr>
			</thead>
			<tbody>


				 <div id="page-wrapper" >
            <div id="page-inner">
       <div class="row">
                    <div class="col-md-12">
                      
                         
                       
                    </div>
                </div> 
                 <!-- /. ROW  -->
 <div class="container" style="width:3000px;" border="1">  
                <div style="clear:both"></div>  
                <br />  
                            

                <div class="table-responsive">  
                <form  method="POST"enctype="multipart/form-data">
                 
                     <table class="table table-bordered" border="1">  
                          <tr> 
                              
                                <th width="20%">Order Date</th>
                                <th width="20%">Order Id</th>
                               <th width="20%">Image</th> 
                               <th width="20%">Item Name</th>  
                               <th width="5%">Quantity</th>  
                               <th width="10%">Unit Price</th>  
                               <th width="11%">Total</th>  
                               <th width="5%">Payment Method</th>
                               <th width="5%">Order Status</th>
                               <th width="5%">      </th>
                          </tr> 
                      <?php 
                       include('seller-list-my-order.php');
                       $i=1;
                       while ($row=mysqli_fetch_array($result)){
                           
                      ?>
                      
             
                         <tr>
                              
                             <th width="30%"><?php echo $row['date'] ;?></th> 
                              <th width="30%">HTY2019<?php echo $row['id'] ;?></th> 
                              <th width="20%"><?php echo '<img src="pro_img/'.$row['cart_pimage'].'" height="200" width="100" class="img-thumnail" >';?></th> 
                               <th width="50%"><?php echo $row['cart_pname'];?></th>  
                               <th width="5%">  <?php echo $row['cart_pqty'];?></th>  
                               <th width="10%">RM<?php echo $row['cart_pprice'];?></th>  
                               <th width="10%">RM<?php echo $row['cart_prate'] ;?></th>
                                <th width="10%"><?php echo $row['payment_method'] ;?></th>
                      
                                <th width="10%"><?php echo $row['order_status'] ;?></th>
                                <th width="30%"><input type="checkbox" name="tick[<?php echo $i;?>]" value="<?php echo $row['id'] ;?>" > <br>
                                 <?php
                                 $i++;
                                 }?>         
                               
                                
            
                        
                
                    <td>
                              
                          </tr>  
                          </tr>
                         
                     </table> 
                     
              
               
                </div>  

<div class="cart-checkout-btn pull-right">
    <select name="shipstatus">
                                <option name="shipstatus" value="">---select--- </option>
                                <option name="shipstatus" value="Pending">Pending</option>
                                <option name="shipstatus" value="Processing">Processing</option>
                                <option name="shipstatus" value="Shipped">Shipped</option>
                                </select>
    <button type="submit" name="update_shipping" "><a href="payment.php">TRACK SHIPPING</button></a>
                            <button type="submit" name="update_status" ">UPDATE</button></a>
                 </div>
             </div>
		</div><!-- /.sigin-in-->
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
