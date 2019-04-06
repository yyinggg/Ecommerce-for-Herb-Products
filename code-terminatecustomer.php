<?php
include 'includes/connection.inc.php';



  //table all user
  $name = $_SESSION['username'];
  $sqluser = "SELECT * FROM user WHERE user_username = '$name' ";
  $resultupdate = mysqli_query($link,$sqluser);
  $row= mysqli_fetch_array($resultupdate); 

  //table customer
  $sql_tb1 = "SELECT * FROM customer WHERE c_username='$name'";
  $result_tb1 = mysqli_query($link,$sql_tb1);
  $row_tb1 = mysqli_fetch_array($result_tb1);

if(isset($_REQUEST['deleteacc1'])) {

$deletesql="DELETE FROM user WHERE user_username='" . $_SESSION["username"] . "'";


$resultdel=mysqli_query($link, $deletesql);
    if($resultdel){
    $delcustomer="DELETE FROM customer WHERE c_username='". $_SESSION["username"] ."'";
    $resultcustomer=mysqli_query($link,$delcustomer);


    if($resultcustomer)   { 
    echo '<script type="text/javascript">
    alert(\'Remove this user successfully!\');
    location="logout.php"; </script>';

      mysqli_close($link);

}
}
}
?>
