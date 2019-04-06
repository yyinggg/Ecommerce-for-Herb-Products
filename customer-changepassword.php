<?php

error_reporting(-1);
include('includes/connection.inc.php');

  //$sqlupdate= "UPDATE  user SET user_password='$user_password' WHERE user_username='$user_username'";

  //table all user
  $name = $_SESSION['username'];
 

  if (isset($_POST['change2'])) {
//check current pass
  $sqlpass2=mysqli_query($link,"SELECT user_password FROM user WHERE user_password='".md5($_POST['currentpass'])."' AND user_username='$name'");
 $rowsqlpass2 = mysqli_fetch_array($sqlpass2);

  if($rowsqlpass2>0){
    $sqlupdate2= "UPDATE  user SET  user_password='".md5($_POST['newpass'])."' WHERE user_username='$name'";

    $resultupdate2=mysqli_query($link,$sqlupdate2);
     echo "<meta http-equiv='refresh' content='0;url=customer-account.php' >";

//if($resultupdate2){
       
    // $sqlsup2="UPDATE customer SET c_password='".md5($_POST['newpass'])."' WHERE c_username='$name'";
    //$resultsup2=mysqli_query($link,$sqlsup2);

     //if($resultsup2){
      echo "<script type='text/javascript'>alert('Update Successfully!')</script>";
    }else{
      echo "<script type='text/javascript'>alert('Current Password not match!')</script>";

    }

    }
  

?>