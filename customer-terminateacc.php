<?php
session_start();
error_reporting(-1);
include('includes/connection.inc.php');
include('code-terminatecustomer.php');
?>
<?php
//change profile



  //$sqlupdate= "UPDATE  user SET user_password='$user_password' WHERE user_username='$user_username'";

  //table all user
  $name = $_SESSION['username'];
  $sqluser = "SELECT * FROM user WHERE user_username = '$name' ";
  $resultupdate = mysqli_query($link,$sqluser);
  $row= mysqli_fetch_array($resultupdate); 

  //table customer
  $sql_tb1 = "SELECT * FROM customer WHERE c_username='$name'";
  $result_tb1 = mysqli_query($link,$sql_tb1);
  $row_tb1 = mysqli_fetch_array($result_tb1);
  //if($row_tb1){
     // echo "success";
   // }else
   //   echo"failed"; 
  // if ($user_password1!== $_POST['password2']) {
     // $errors['password2']='Passwords does not match!';
 
 // }


if (isset($_POST['update'])) {
    if (count($errors) === 0) {
    $sqlupdate= "UPDATE  user SET  user_email='$user_email', user_contactno='$user_contactno' WHERE user_username='$name'";
    $resultupdate=mysqli_query($link,$sqlupdate);
    echo "<meta http-equiv='refresh' content='0;url=customer-account.php' >";
     if($resultupdate){
         //echo"success";
        $sqlcustomer="UPDATE customer SET c_email='$user_email',c_contactno='$user_contactno' WHERE c_username='$name'";
    $resultcustomer=mysqli_query($link,$sqlcustomer);
     if( $resultcustomer){
      echo "<script type='text/javascript'>alert('Profile Info Update Successfully!')</script>";
    }else{
      echo "failed".$sqlupdate;

    }
    }
  }
}

//change password
if(isset($_POST['change']))
{
$sql=mysqli_query($link,"SELECT user_password FROM  user where user_password='".md5($_POST['cpass'])."' && user_username='$name'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $userpass="UPDATE user SET user_password='".md5($_POST['newpass'])."' WHERE user_username='$name'";
$userresult=mysqli_query($link,$userpass);
    echo "<meta http-equiv='refresh' content='0;url=customer-account.php' >";
     if($userresult){
         //echo"success";
        $customerpass="UPDATE customer SET c_password='".md5($_POST['newpass'])."' WHERE c_username='$name'";
    $customerresult=mysqli_query($link,$customerpass);
    echo $customerpass;
     if( $customerresult){
     	echo "<script type='text/javascript'>alert('Update Password Successfully!')</script>";
     	
     }
 }else
{
	echo "<script>alert('Current Password not match !!');</script>";

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

	    <title>My Account</title>

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
		<div class="checkout-box inner-bottom-sm">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	          My Profile
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
			<div class="row">		
<h4>Personal info</h4>
				<div class="col-md-12 col-sm-12 already-registered-login">

<?php
$query=mysqli_query($link,"select * from user where user_username='$name'");
while($row=mysqli_fetch_array($query))


{

?>

					<form class="register-form" role="form" method="post"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
						<div class="form-group">
					    <label class="info-title" for="name">Username<span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row['user_username'];?>" id="username" name="username" required="required" readonly>

					  </div>
						<div class="form-group">
					    <label class="info-title" for="name">Full Name/Company Name<span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row['user_name'];?>" id="fullname" name="fullname" required="required" readonly>
					  </div>



						<div class="form-group">
					    <label class="info-title" for="Email">Email Address <span>*</span></label>
			 <input type="email" class="form-control unicase-form-control text-input" name="email" id="Email" value="<?php echo $row['user_email']?>" required="required" readonly>
					  </div>

					  <div class="form-group">
					    <label class="info-title" for="Contact No.">Contact No. <span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contactno" required="required" value="<?php echo $row['user_contactno'];?>"  maxlength="10" readonly>
					  </div>
					  <button type="submit" name="deleteacc1" class="btn-upper btn btn-primary checkout-page-button">Delete Account</button>
					</form>
					<?php } ?>
				</div>	
				<!-- already-registered-login -->		

			</div>			
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->

					  	
					</div><!-- /.checkout-steps -->
				</div>
			<?php include('includes/customer-myaccount-sidebar.php');?>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->


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