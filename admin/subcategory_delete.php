<?php
session_start();
if(isset($_SESSION['uname']))
{
include_once('includes/config.php');
$id=$_REQUEST["id"];
$qry=" delete from subcategories where id=$id";
mysqli_query($conn,$qry);
$_SESSION['error'] = "Sub Category delete Successfully";
 header("location:subcategory.php");
}
else{
$_SESSION['error'] = "you are not athorize to this page whithout login";
 header("location:index.php");
}
?>