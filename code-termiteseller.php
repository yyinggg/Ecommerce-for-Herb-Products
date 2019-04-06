<?php
include 'includes/connection.inc.php';
session_start();


  //table all user
  $name = $_SESSION['username'];
  $sqluser = "SELECT * FROM user WHERE user_username = '$name' ";
  $resultupdate = mysqli_query($link,$sqluser);
  $row= mysqli_fetch_array($resultupdate); 

  //table customer
  $sql_tb1 = "SELECT * FROM supplier WHERE s_username='$name'";
  $result_tb1 = mysqli_query($link,$sql_tb1);
  $row_tb1 = mysqli_fetch_array($result_tb1);

if(isset($_REQUEST['deleteacc'])) {

$deletesql="DELETE FROM user WHERE user_username='" . $_SESSION["username"] . "'";


$resultdel=mysqli_query($link, $deletesql);
    if($resultdel){
    $delsupplier="DELETE FROM supplier WHERE s_username='". $_SESSION["username"] ."'";
    $resultsupplier=mysqli_query($link,$delsupplier);


    if($resultsupplier)   { 
    echo '<script type="text/javascript">
    alert(\'Remove this user successfully!\');
    location="logout.php"; </script>';

      mysqli_close($link);

}
}
}
?>
