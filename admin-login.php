<?php
//include('includes/connection.inc.php');
error_reporting(-1);

if((isset($_POST['login']))){
 
$username = $password = "";

$username = $_POST['username'];
$password = $_POST['password'];


$username = stripslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link,$password);

	$sql_1 =mysqli_query($link,"SELECT * FROM admin WHERE admin_username ='$username' and admin_password ='$password'")
	
		or die("Failed to query database".mysqli_error($link));	
		
	
		$row_1 = mysqli_fetch_array($sql_1);
		
		$_SESSION['username'] = $username;
		$_SESSION['logintype'] = $row_1['logintype'];
		
    if ($row_1['logintype'] == 'admin')
		{	
			?><meta http-equiv="refresh" content="0;view_sellerdetails.php"><?php ;
		}

	}
	
?>