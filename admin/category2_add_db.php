<?php
session_start();
if(isset($_SESSION['uname']))
{
include_once('includes/config.php');
extract($_POST);
$filename=time()."_".$_FILES['image']['name'];
$path="../images/category2/".$filename;
$catdes= mysqli_real_escape_string($conn,$catdes);
if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
{
    $qry="insert into category2 (catnam,catdes,image) values('".$catnam."','".$catdes."','".$filename."')";
    mysqli_query($conn,$qry) or exit("category2 insert fail".mysqli_error($conn));
    $_SESSION['error'] = "category2 Added successfully";
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