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

      <title>Summary Order</title>
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
<?php include('includes/customer-top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/customer-main-header.php');?>
  <!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/customer-menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        
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
    
      <tbody>


         <div id="page-wrapper" >
            <div id="page-inner">
       <div class="row">
                    <div class="col-md-12">
                      
                         
                       
                    </div>
                </div> 
                 <!-- /. ROW  -->
 <div class="container"  border="1">  
<div class="col-md-4 col-sm-12 estimate-ship-tax">
  <table class="table table-bordered" style="width:1000px;">
    <thead>
      <tr>
        <th>
          <span class="estimate-title">Shipping Details</span>
        </th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>
            <div class="form-group">
               
          <form class="register-form" role="form" method="post" enctype="multipart/form-data">
                              <?php
                              
                                $name= $_SESSION['username'];
                                $query1="SELECT * FROM customer WHERE c_username='$name'";
                                $result2=mysqli_query($link,$query1);
                              
                              if(!$result2)
                              {
                                echo ("Error: ".mysqli_error($link));
                                exit();
                              }
                                while ($row7=mysqli_fetch_array($result2)){
                                   
                                ?>
                                             
                    <div class="form-group">
                        <div class="form-group">
  
              <label class="info-title" for="Billing State ">Receiver Name<span>*</span></label>
       <input type="text" class="form-control unicase-form-control text-input" id="shipreceiver" name="sreceivername" value="<?php echo $row7['receivername'];?>" >
            </div>
            <label class="info-title" for="Billing State ">Contact Number <span>*</span></label>
       <input type="text" class="form-control unicase-form-control text-input" id="shipcontactno" name="sreceiver_ph" value="<?php echo $row7['receiver_ph'];?>" >
            </div>
            <div class="form-group">
            <label class="info-title" for="Billing State ">Shipping Address<span>*</span></label>
              <textarea class="form-control unicase-form-control text-input"  name="sship_address" ><?php echo $row7['ship_address'];?></textarea>
            </div>
            <div class="form-group">
              <label class="info-title" for="Billing State ">Shipping State  <span>*</span></label>
       <input type="text" class="form-control unicase-form-control text-input" id="shippingstate" name="sship_state" value="<?php echo $row7['ship_state'];?>" >
            </div>
            <div class="form-group">
              <label class="info-title" for="Billing City">Shipping City <span>*</span></label>
              <input type="text" class="form-control unicase-form-control text-input" id="shippingcity" name="sship_city"  value="<?php echo $row7['ship_city'];?>" >
            </div>
 <div class="form-group">
              <label class="info-title" for="Billing Pincode">Shipping Postcode <span>*</span></label>
              <input type="text" class="form-control unicase-form-control text-input" id="shippingpincode" name="sship_pcode"  value="<?php echo $row7['ship_pcode'];?>" >
            </div>
<?php } ?>
          <button type="submit" name="shipupdate" class="btn-upper btn btn-primary checkout-page-button">Update</button>
        
        </form>



                  </div>
                </div>
              </div>
              <!-- checkout-step-02  -->
              
          </div><!-- /.checkout-steps -->
        </div>
            </div>
          
          </td>
        </tr>
    </tbody><!-- /tbody -->
  </table>
</div>
</div>

  

<div class="body-content outer-top-bd">
  <div class="container">
    <div class="checkout-box faq-page inner-bottom-sm">
      <div class="row">
        <div class="col-md-12">
          <center><h2>Choose Payment Method</h2></center>
          <div class="panel-group checkout-steps" id="accordion">
            <!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

  <!-- panel-heading -->
    <div class="panel-heading" border="1">
      <h4 class="unicase-checkout-title">
         <br><br>
           Select your Payment Method
          </a>
       </h4>
    </div>
    <!-- panel-heading -->
 <?php 
 if (isset($_POST['submitpayment'])) {
        //$date = date('m/d/Y h:i:s', time());
        $confirmPayment=$_POST['paymethod'];
        $name= $_SESSION['username'];
    $paymentsql=mysqli_query($link,"update cart set payment_method='".$confirmPayment."' where username='".$name."' ");
    unset($_SESSION['cart']);
    header('location:customer-summaryorder.php');
      
  }
?>

    <!-- panel-body  -->
      <div class="panel-body">
      <form name="payment" method="post">
      <input type="radio" name="paymethod" value="COD" checked="checked"> COD
       <input type="radio" name="paymethod" value="Internet Banking"> Internet Banking
       <input type="radio" name="paymethod" value="Debit / Credit card"> Debit / Credit card <br /><br />
       <input type="submit" value="submit" name="submitpayment" class="btn btn-primary">
        

      </form>   
  
    <!-- panel-body  -->
</div>
  </div><!-- row -->
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
