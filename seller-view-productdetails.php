<?php 
session_start();
error_reporting(-1);
include('includes/connection.inc.php');



//$pid=$_SESSION['id'];

if(isset($_REQUEST["id"])){
     $p_id=$_REQUEST["id"];
     if(!empty($p_id)){
     $_SESSION['id']=$p_id;
     }
}
        $name = $_SESSION['username'];
        $user="SELECT s_username FROM supplier WHERE s_username='$name'";
        $result = mysqli_query($link,$user);
        $row= mysqli_fetch_array($result); 

      
$sql = mysqli_query($link,"SELECT * FROM product WHERE product_id='$p_id'");  
$productCount = mysqli_num_rows($sql); 

if ($productCount > 0) {
  
  while($row = mysqli_fetch_array($sql)){ 
    
      $p_id=$row['product_id'];
      $p_name=$row['p_name'];
      $p_price=$row['p_price'];
      $p_image=$row['p_image'];
      $p_category=$row['p_category'];
      $p_available=$row['p_available'];
      $p_description=$row['p_description'];
      $shopname=$row['companyname'];
  
}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">
	    <title>Product Details</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
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

<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product outer-bottom-sm '>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">


					<!-- ==============================================CATEGORY============================================== -->
<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
	<h3 class="section-title">Category</h3>
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
	            </div>
	          
	        </div>
	  
	    </div>
	</div>
</div>
	<!-- ============================================== CATEGORY : END ============================================== -->					<!-- ============================================== HOT DEALS ============================================== -->


<!-- ============================================== COLOR: END ============================================== -->
				</div>
			</div><!-- /.sidebar -->




			
			<div class='col-md-9'>
				<div class="row  wow fadeInUp">
					     <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">

 <div class="single-product-gallery-item" id="slide1">
                <a data-lightbox="image-1" data-title="<?php echo $p_name ;?>" href="pro_img/<?php echo $p_image ;?>">
                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="pro_img/<?php echo $p_image ;?>" width="370" height="350" />
                </a>
            </div>





        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
            

               
               
                
            </div><!-- /#owl-single-product-thumbnails -->

            

        </div>

    </div>
</div>     			





<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name"><?php echo $p_name;?></h1>
<?php $rt=mysqli_query($link,"select * from productreviews where pro_id='$p_id'");
$num=mysqli_num_rows($rt);
{
?>
<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
										<div class="rating rateit-small"></div>
									</div>
									<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk">(<?php echo $num;?> Reviews)</a>
										</div>
									</div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->
<?php } ?>
							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-3">
										<div class="stock-box">
											<span class="label">Availability :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value"><?php echo $p_available;?></span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div>



<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-3">
										<div class="stock-box">
											<span class="label">Product Brand :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value"><?php echo $shopname;?></span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div>


<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-3">
										<div class="stock-box">
											
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											
										</div>	
									</div>
								</div><!-- /.row -->	
							</div>

							<div class="price-container info-container m-t-20">
								<div class="row">
									

									<div class="col-sm-6">
										<div class="price-box">
											<span class="price">RM <?php echo $p_price ;?></span>
											
										</div>
									</div>




									

								</div><!-- /.row -->
							</div><!-- /.price-container -->

	




							<div class="quantity-container info-container">
								<div class="row">
									
									<div class="col-sm-2">
									
									</div>
									
									<div class="col-sm-2">
										<div class="cart-quantity">
											<div class="quant-input">
								                <div class="arrows">
								                  <div class="arrow plus gradient"></div>
								                  <div class="arrow minus gradient"></span></div>
								                </div>
								                
							              </div>
							            </div>
									</div>
								<div class="col-sm-7">
										
									</div>

									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							

							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->

				
				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
					<div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
								<li><a data-toggle="tab" href="#review">REVIEW</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
						<div class="col-sm-9">

							<div class="tab-content">
								
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<p class="text"><?php echo $p_description;?></p>
									</div>	
								</div><!-- /.tab-pane -->

								<div id="review" class="tab-pane">
									<div class="product-tab">
																				
										<div class="product-reviews">
											<h4 class="title">Customer Reviews</h4>
<?php $qry=mysqli_query($link,"select * from productreviews where pro_id='$p_id'");
while($rvw=mysqli_fetch_array($qry))
{
?>

											<div class="reviews" style="border: solid 1px #000; padding-left: 2% ">
												<div class="review">

													<div class="text">"<?php echo htmlentities($rvw['review']);?>"</div>
													<div class="text"><b>Quality :</b>  <?php echo htmlentities($rvw['quality']);?> Star</div>
													<div class="text"><b>Price :</b>  <?php echo htmlentities($rvw['price']);?> Star</div>
													<div class="text"><b>value :</b>  <?php echo htmlentities($rvw['value']);?> Star</div>
                                                <div class="author m-t-15"><i class="fa fa-pencil-square-o"></i> <span class="name"><?php echo htmlentities($rvw['name']);?></span></div>													</div>
											
											</div>
											<?php } ?><!-- /.reviews -->
										</div><!-- /.product-reviews -->
										<form role="form" class="cnt-form" name="review" method="post">

										
										<div class="product-add-review">
											<h4 class="title">Write your own review</h4>
											<div class="review-table">
												<div class="table-responsive">
													<table class="table table-bordered">	
														<thead>
															<tr>
																<th class="cell-label">&nbsp;</th>
																<th>1 star</th>
																<th>2 stars</th>
																<th>3 stars</th>
																<th>4 stars</th>
																<th>5 stars</th>
															</tr>
														</thead>	
														<tbody>
															<tr>
																<td class="cell-label">Quality</td>
																<td><input type="radio" name="quality" class="radio" value="1"></td>
																<td><input type="radio" name="quality" class="radio" value="2"></td>
																<td><input type="radio" name="quality" class="radio" value="3"></td>
																<td><input type="radio" name="quality" class="radio" value="4"></td>
																<td><input type="radio" name="quality" class="radio" value="5"></td>
															</tr>
															<tr>
																<td class="cell-label">Price</td>
																<td><input type="radio" name="price" class="radio" value="1"></td>
																<td><input type="radio" name="price" class="radio" value="2"></td>
																<td><input type="radio" name="price" class="radio" value="3"></td>
																<td><input type="radio" name="price" class="radio" value="4"></td>
																<td><input type="radio" name="price" class="radio" value="5"></td>
															</tr>
															<tr>
																<td class="cell-label">Value</td>
																<td><input type="radio" name="value" class="radio" value="1"></td>
																<td><input type="radio" name="value" class="radio" value="2"></td>
																<td><input type="radio" name="value" class="radio" value="3"></td>
																<td><input type="radio" name="value" class="radio" value="4"></td>
																<td><input type="radio" name="value" class="radio" value="5"></td>
															</tr>
														</tbody>
													</table><!-- /.table .table-bordered -->
												</div><!-- /.table-responsive -->
											</div><!-- /.review-table -->
											
											<div class="review-form">
												<div class="form-container">
													
														
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="exampleInputName">Your Name <span class="astk">*</span></label>
																<input type="text" class="form-control txt" id="exampleInputName" placeholder="" name="name" required="required">
																</div><!-- /.form-group -->
																<div class="form-group">
																	<label for="exampleInputSummary">Summary <span class="astk">*</span></label>
																	<input type="text" class="form-control txt" id="exampleInputSummary" placeholder="" name="summary" required="required">
																</div><!-- /.form-group -->
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputReview">Review <span class="astk">*</span></label>

<textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder="" name="review" required="required"></textarea>
																</div><!-- /.form-group -->
															</div>
														</div><!-- /.row -->
														
														<div class="action text-right">
															<button name="submit" class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
														</div><!-- /.action -->

													</form><!-- /.cnt-form -->
												</div><!-- /.form-container -->
											</div><!-- /.review-form -->

										</div><!-- /.product-add-review -->										
										
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

				

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->


				<!-- ============================================== UPSELL PRODUCTS ============================================== -->



<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
			
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div>
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
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>