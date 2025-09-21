<?php
session_start();
if(isset($_SESSION['uname']))
{
include_once('includes/config.php');
extract($_POST);
$filename=time()."_".$_FILES['image']['name'];
$path="../images/categories/".$filename;
$catdescription= mysqli_real_escape_string($conn,$catdescription);
if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
{
    $qry="insert into categories (catname,catdescription,image) values('".$catname."','".$catdescription."','".$filename."')";
    mysqli_query($conn,$qry) or exit("category insert fail".mysqli_error($conn));
    $_SESSION['error'] = "category Added successfully";
   header("location:category_add.php");
}
else{
    $_SESSION['error'] = "file upload fail";
    header("location:category_add.php");
}
}
else{
$_SESSION['error'] = "you are not athorize to this page whithout login";
 header("location:index.php");
}
?>