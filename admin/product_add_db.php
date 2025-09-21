<?php
session_start();
if(isset($_SESSION['uname']))
{
include_once('includes/config.php');
extract($_POST);
$filename=time()."_".$_FILES['image']['name'];
$path="../images/products/".$filename;
$productdescription= mysqli_real_escape_string($conn,$productdescription);
if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
{
    $qry="insert into products (catid,subcatid,productname,productdescription,productprice,image) 
    values('".$catid."','".$subcatid."','".$productname."','".$productdescription."','".$productprice."','".$filename."')";
    mysqli_query($conn,$qry) or exit("product insert fail".mysqli_error($conn));
    $_SESSION['error'] = "product Added successfully";
   header("location:product_add.php");
}
else{
    $_SESSION['error'] = "file upload fail";
    header("location:product_add.php");
}
}
else{
$_SESSION['error'] = "you are not athorize to this page whithout login";
 header("location:index.php");
}
?>