<?php
session_start();
if(isset($_SESSION['uname']))
{
include_once('includes/config.php');
$id=$_REQUEST["id"];
$qry=" delete from category2 where id=$id";
mysqli_query($conn,$qry);
$_SESSION['error'] = "category2 delete Successfully";
 header("location:category2.php");
}
else{
$_SESSION['error'] = "you are not athorize to this page whithout login";
 header("location:index.php");
}
?>