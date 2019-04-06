<?php
$user_username = $user_email = $user_fullname = $user_contactno = $user_password = $user_password1 = $errors = $logintype = "";
  

$user_username = $_POST['username'];
$user_fullname = $_POST['fullname'];
$user_email = $_POST['email'];
$user_contactno = $_POST['contactno'];
$user_password1 = $_POST['password1'];
$user_password = md5($user_password1);
$logintype = $_POST['logintype'];
$errors = [];


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
   if ($user_password1!== $_POST['password2']) {
      $errors['password2']='Passwords does not match!';
 
  }


if (isset($_POST['update'])) {
    if (count($errors) === 0) {
    $sqlupdate= "UPDATE  user SET  user_email='$user_email', user_contactno='$user_contactno'WHERE user_username='$name'";
    $resultupdate=mysqli_query($link,$sqlupdate);
    echo "<meta http-equiv='refresh' content='0;url=customer_editprofile.php' >";
     if($resultupdate){
         //echo"success";
        $sqlcustomer="UPDATE customer SET c_password='$user_password',c_email='$user_email',c_contactno='$user_contactno' WHERE c_username='$name'";
    $resultcustomer=mysqli_query($link,$sqlcustomer);
     if( $resultcustomer){
      echo "<script type='text/javascript'>alert('Update Successfully!')</script>";
    }else{
      echo "failed".$sqlupdate;

    }
    }
  }
}
?>