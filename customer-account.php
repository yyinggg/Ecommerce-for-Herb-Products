<?php
session_start();
error_reporting(-1);
include('includes/connection.inc.php');
include('customer-changepassword.php');
?>
<?php
//change profile
$user_username = $user_email = $user_fullname = $user_contactno = $user_password = $user_password1 = $errors = $logintype = "";
  



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

$user_username = $_POST['username'];
$user_fullname = $_POST['fullname'];
$user_email = $_POST['email'];
$user_contactno = $_POST['contactno'];

$logintype = $_POST['logintype'];
$errors = [];

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
		

<script type="text/javascript">
function valid()
{
if(document.chngpwd.currentpass.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.currentpass.focus();
return false;
}
else if(document.chngpwd.newpass.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpass.focus();
return false;
}
else if(document.chngpwd.confirmpass.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmpass.focus();
return false;
}
else if(document.chngpwd.newpass.value!= document.chngpwd.confirmpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpass.focus();
return false;
}
return true;
}
</script>

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
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	          <span>1</span>My Profile
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
			 <input type="email" class="form-control unicase-form-control text-input" name="email" id="Email" value="<?php echo $row['user_email']?>" required="required">
					  </div>

					  <div class="form-group">
					    <label class="info-title" for="Contact No.">Contact No. <span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contactno" required="required" value="<?php echo $row['user_contactno'];?>"  maxlength="10">
					  </div>
					  <button type="submit" name="update" class="btn-upper btn btn-primary checkout-page-button">Update</button>
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
					    <!-- checkout-step-02  -->
					  	<div class="panel panel-default checkout-step-02">
						    <div class="panel-heading">
						      <h4 class="unicase-checkout-title">
						        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
						          <span>2</span>Change Password
						        </a>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse">
						      <div class="panel-body">
						     
					<form class="register-form" role="form" method="post" name="chngpwd" onSubmit="return valid();">
<div class="form-group">
					    <label class="info-title" for="Current Password">Current Password<span>*</span></label>
					    <input type="password" class="form-control unicase-form-control text-input" id="currentpass" name="currentpass" required="required">
					  </div>



						<div class="form-group">
					    <label class="info-title" for="New Password">New Password <span>*</span></label>
			 <input type="password" class="form-control unicase-form-control text-input" id="newpass" name="newpass">
					  </div>
					  <div class="form-group">
					    <label class="info-title" for="Confirm Password">Confirm Password <span>*</span></label>
					    <input type="password" class="form-control unicase-form-control text-input" id="confirmpass" name="confirmpass" required="required" >
					  </div>
					  <button type="submit" name="change2" class="btn-upper btn btn-primary checkout-page-button">Change </button>
					</form> 




						      </div>
						    </div>
					  	</div>
					  	<!-- checkout-step-02  -->
					  	
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
