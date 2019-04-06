<?php

error_reporting(-1);
include('includes/connection.inc.php');

  //$sqlupdate= "UPDATE  user SET user_password='$user_password' WHERE user_username='$user_username'";

  //table all user
  $name = $_SESSION['username'];
 

  if (isset($_POST['change1'])) {
//check current pass
  $sqlpass1=mysqli_query($link,"SELECT user_password FROM user WHERE user_password='".md5($_POST['currentpass'])."' AND user_username='$name'");
 $rowsqlpass1 = mysqli_fetch_array($sqlpass1);

  if($rowsqlpass1>0){
    $sqlupdate1= "UPDATE  user SET  user_password='".md5($_POST['newpass'])."' WHERE user_username='$name'";

    $resultupdate1=mysqli_query($link,$sqlupdate1);
     echo "<meta http-equiv='refresh' content='0;url=seller-account.php' >";

 //if($resultupdate1){
       
    // $sqlsup1="UPDATE supplier SET s_password='".md5($_POST['newpass'])."' WHERE s_username='$name'";
    //$resultsup1=mysqli_query($link,$sqlsup1);

     //if($resultsup1){
      echo "<script type='text/javascript'>alert('Update Successfully!')</script>";
    }else{
      echo "<script type='text/javascript'>alert('Current Password not match!')</script>";

    }

    }
  //}
  //}

?>