<?php 
include('includes/connection.inc.php');
error_reporting(-1);


    
function setCustomerComments($link){
    
if(isset($_REQUEST["companynm"])){
     $shopname=$_REQUEST["companynm"];
    if(!empty($shopname)){
     $_SESSION['companynm']=$shopname;
     }


   
$sql = mysqli_query($link,"SELECT companyname FROM product WHERE companyname='$shopname' ");
$productCount = mysqli_num_rows($sql); 
if ($productCount > 0) {
  
while($row = mysqli_fetch_array($sql)){ 
    
      
      $shopname=$row['companyname'];
  
}
}
}
$shoppic=$_SESSION['shopimage'];
if(isset($_REQUEST["shopimage"])){
     $shoppic=$_REQUEST["shopimage"];
    if(!empty($shoppic)){
     $_SESSION['shopimage']=$shoppic;
     }
} 
if(isset($_REQUEST["shopimage"])){
     $shoppic=$_REQUEST["shopimage"];
    if(!empty($shoppic)){
     $_SESSION['shopimage']=$shoppic;
     }}

$shoppic=$_SESSION['shopimage'];


$sql = mysqli_query($link,"SELECT image_name FROM shopprofile WHERE companyname='$shopname'");
$productCount = mysqli_num_rows($sql); 
if ($productCount > 0) {
  
while($row = mysqli_fetch_array($sql)){ 
    
      $shoppic=$row['image_name'];
  
  
}

}

 if(isset($_POST['submitpost'])){
     $uid=$_POST['uid'];
     $date=$_POST['date'];
     $message=$_POST['message'];
     
    
     $sql= "INSERT INTO comments (uid,date,message,companyname,shoppic) VALUES ('$uid','$date','$message','$shopname','$shoppic')";
     $resultsql=mysqli_query($link,$sql);
    }     
}


function getCustomerComments($link){

if(isset($_REQUEST["companynm"])){
     $shopname=$_REQUEST["companynm"];
    if(!empty($shopname)){
     $_SESSION['companynm']=$shopname;
     }


   
$sql = mysqli_query($link,"SELECT companyname FROM product WHERE companyname='$shopname' ");
$productCount = mysqli_num_rows($sql); 
if ($productCount > 0) {
  
while($row = mysqli_fetch_array($sql)){ 
    
      
      $shopname=$row['companyname'];
  
}
}
}

    $sql =" SELECT * FROM comments WHERE companyname='$shopname'";
    $resultsql=mysqli_query($link,$sql);
    while($row=mysqli_fetch_assoc($resultsql)){
         echo " <div class='comment-box'><p>";
             echo $row['uid']."<br>";
             echo $row['date']."<br>";
             echo nl2br($row['message']);
         echo " </p></div>";
    }
   
}
function editCustomerComments($link){
    $sql =" SELECT * FROM comments";
    $resultsql=mysqli_query($link,$sql);
    while($row=mysqli_fetch_assoc($result)){
         echo " <div class='comment-box'><p>";
             echo $row['uid']."<br>";
             echo $row['date']."<br>";
             echo nl2br($row['message']);
         echo " </p>
         <form class='edit-btn' method='POST' action='editcomment.php'>
             <input type='hidden' name='id' value='".$row['id'] ."'>
             <input type='hidden' name='uid' value='".$row['uid'] ."'>
             <input type='hidden' name='date' value='".$row['date'] ."'>
             <input type='hidden' name='message' value='".$row['message'] ."'>
            <button>Edit</button>
         </form>
         
         
         </div>";
    }
   
}
?>


