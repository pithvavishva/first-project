<?php
session_start();
if(isset($_SESSION['uname']))
{
include_once('includes/config.php');
extract($_POST);
$filename=time()."_".$_FILES['image']['name'];
$path="../images/products2/".$filename;
$prodescription= mysqli_real_escape_string($conn,$prodescription);
if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
{
    $qry="insert into products2(id,proname,prodescription,proprice,image) values('".$id."','".$proname."','".$prodescription."','".$proprice."' ,'".$filename."')";
    mysqli_query($conn,$qry) or exit("Products2 insert fail".mysqli_error($conn));
    $_SESSION['error'] = "Products2 Added successfully";
   header("location:category2_add.php");
}
else{
    $_SESSION['error'] = "file upload fail";
    header("location:category2_add.php");
}
}
else{
$_SESSION['error'] = "you are not athorize to this page whithout login";
 header("location:index.php");
}
?>