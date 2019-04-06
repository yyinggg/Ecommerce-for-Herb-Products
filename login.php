<?php
session_start();
ob_start();
error_reporting(-1);
include ('includes/connection.inc.php');


// Code user Registration
  $user_username = $user_email = $user_fullname = $user_contactno = $user_password = $user_password2 = $errors = $logintype = "";
  
if (isset($_POST['register'])) {
  $user_username = $_POST['username'];
  $user_fullname = $_POST['fullname'];
  $user_email = $_POST['email'];
  $user_contactno = $_POST['contactno'];
  $user_password1 = $_POST['password1'];
  $user_password = md5($user_password1);
  $logintype = $_POST['logintype'];
  $errors = [];
  

  //ensure the user keyin data
if(($logintype==NULL)){
      $errors['login']='choose login type';
  }
  if(empty($user_username)){
      $errors['username']='Username required';
  }
 if (empty($user_fullname)) {
      $errors['fullname']='Name is required';
  
  }
  if(empty($user_email)){
      $errors['email']='email required';
  }
  if (empty($user_contactno)) {
      $errors['contactno']='Contact Number is required';
  
  }
  if(empty($user_password)){
      $errors['password']='Password required';
    
  }
  
  if ($user_password1!== $_POST['password2']) {
      $errors['password2']='Passwords does not match!';

  }

 //check existing field
  $sql_user="SELECT * FROM user WHERE user_username='$user_username' ";
  $resultuser=mysqli_query($link,$sql_user);
  
 

  $sql_email="SELECT * FROM user WHERE user_email='$user_email' ";
  $resultemail=mysqli_query($link,$sql_email);

  if(mysqli_num_rows($resultuser)>0){

    $errors['username']="Username already existed!";
   
  }else if(mysqli_num_rows($resultemail)>0){
   
    $errors['email']="Email had been registered!";
  
  }else{

    if (count($errors) === 0) {
    $sql= "INSERT INTO user (logintype,user_username,user_name,user_email,user_contactno,user_password)
          VALUES ('$logintype','$user_username','$user_fullname','$user_email','$user_contactno','$user_password')";

    $result=mysqli_query($link,$sql);
    
     if($result){
    $sqlcustomer="INSERT INTO customer(c_username,c_fullname,c_contactno,c_email,c_password,logintype) 
                  SELECT user_username,user_name,user_contactno,user_email,user_password,logintype FROM user WHERE user_username NOT IN (SELECT c_username FROM customer) AND logintype='customer'";
    $resultcustomer=mysqli_query($link,$sqlcustomer);
    
    $sqlsupplier="INSERT INTO supplier(s_username,s_companyname,s_contactno,s_email,s_password,logintype) 
                  SELECT user_username,user_name,user_contactno,user_email,user_password,logintype FROM user WHERE user_username NOT IN (SELECT s_username FROM supplier) AND logintype='supplier'";
    $resultsupplier=mysqli_query($link,$sqlsupplier);

      
    $sqladmin=    "INSERT INTO admin(admin_username,admin_password,logintype)
                     SELECT user_username,user_password,logintype FROM user WHERE FROM user WHERE user_username NOT IN (SELECT admin_username FROM admin) AND logintype='admin'";
    $resultadmin=mysqli_query($link,$sqladmin);
}

  }
    
    if( $sqlcustomer && $sqlsupplier && $sqladmin){
      echo "<script type='text/javascript'>alert('Register successfully! Please re-login the system.')</script>";

    }else{
      echo $sql;

    }
  
    }
   }
 
 

// Code for User login


if((isset($_POST['login']))){
 
$username = $password = "";

$username = $_POST['username'];
$password = $_POST['password'];
$user_password = md5($password);

$username = stripslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link,$password);

	$sql1=mysqli_query($link,"SELECT * FROM user WHERE user_username ='$username' and user_password ='$user_password'")
	
		or die("Failed to query database".mysqli_error($link));	
		
if(mysqli_num_rows($sql1) == 0)
	{
		 echo"<script type='text/javascript'>alert('Invalied Username/Password !')</script>";
	}
	else{
		$row1 = mysqli_fetch_array($sql1);
		
		$_SESSION['username'] = $username;
		$_SESSION['logintype'] = $row1['logintype'];
		
    if ($row1['logintype'] == 'customer')
		{	
			?><meta http-equiv="refresh" content="0;customerpage.php"><?php ;
		}
		else if ($row1['logintype'] == 'supplier'){
			?><meta http-equiv="refresh" content="0;sellerpage.php"><?php ;
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

	    <title>Signin | Signup</title>

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
		
	




	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<?php include('includes/b4login-topheader.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/b4login-main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/b4login-menu-bar.php');?>
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
		<div class="sign-in-page inner-bottom-sm">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">sign in</h4>
	<p class="">Hello, Welcome to your account.</p>
	<form class="register-form outer-top-xs" method="post">
	<span style="color:red;" >

	</span>
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Username<span>*</span></label>
		    <input type="username" name="username" class="form-control unicase-form-control text-input"  >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
		 <input type="password" name="password" class="form-control unicase-form-control text-input"  >
		</div>
		<div class="radio outer-xs">
		  	<a href="user-forgot-password.php" class="forgot-password pull-right">Forgot your Password?</a>
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button" name="login">Login</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">create a new account</h4>
	
	<form class="register-form outer-top-xs" role="form" method="post" ">
<div class="form-group">
	   <tr>
	   
              <td width="66" height="62"></td>
              <td width="847"><p><b> Please select your Usertype.</p><b>
            <span style="text left"></span></td>
   
          </tr>
            <tr>
              <td height="80"></td>
              <td><label>
                <input type="radio" name="logintype" value="customer" id="Customer" required="" value="<?php echo $logintype;?>">
                Customer</label>
                <br>
                <label>
                  <input type="radio" name="logintype" value="supplier" id="Supplier" required="" value="<?php echo $logintype;?>">
              Supplier</label></td>
 
            </tr>
          </table></td>
      </tr><br><br>

<div  <?php if(isset($errors['username'])):?> class="form-group"  <?php endif?>>
	    	<label class="info-title" for="username">Username <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="username"  name="username" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" required="">
	    	<?php if (isset($errors['username'])):?> <span style="color: #ff0000"><?php echo $errors['username']; ?></span> 
              <?php endif?>
	  	</div>
	    	<label class="info-title" for="fullname">Full Name/Company Name <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="fullname" name="fullname" required="required">
	  	</div>


		<div  <?php if(isset($errors['username'])):?> class="form-group"  <?php endif?>>
	    	<label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
	    	<input type="email" class="form-control unicase-form-control text-input" id="email"  name="email" required >
	    	        <?php if (isset($errors['email'])):?> 
                <span style="color: #ff0000"><?php echo $errors['email']; ?></span> 
              <?php endif?>  
	  	</div>

<div class="form-group">
	    	<label class="info-title" for="contactno">Contact No. <span>*</span></label>
	    	<input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contactno" maxlength="10" required >
	  	</div>

<div  <?php if(isset($errors['password2'])):?> class="form-group" <?php endif?>>
	    	<label class="info-title" for="password">Password. <span>*</span></label>
	    	<input type="password" class="form-control unicase-form-control text-input" id="password1" name="password1" pattern=".{8,12}" required title="8 to 12 characters" oninvalid="this.setCustomValidity('Password is required')" oninput="setCustomValidity('')" required ><?php if (isset($errors['password2'])):?> <span style="color: #ff0000"><?php echo $errors['password2']; ?></span> 
              <?php endif?>  
	  	</div>

<div  class="form-group"   >
	    	<label class="info-title" for="confirmpassword">Confirm Password. <span>*</span></label>
	    	<input type="password" class="form-control unicase-form-control text-input" id="password2" name="password2"   required pattern=".{8,12}" required title="8 to 12 characters" oninvalid="this.setCustomValidity('Password is required')" oninput="setCustomValidity('')"> 
	  	</div>
  By signing up, you agree to Herb2U's<a href="termscondition.php"> Terms and Conditions</a> &<a href="policy.php"> Privacy Policies</a>   <br>

	  	<button type="submit" name="register" class="btn-upper btn btn-primary checkout-page-button" id="register">Sign Up</button>
	</form>
	
<!-- create a new account -->			</div><!-- /.row -->
		</div>

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