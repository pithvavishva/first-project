<?php
session_start();
if(isset($_SESSION['uname']))
{
include_once('includes/config.php');
extract($_POST);
$catdes= mysqli_real_escape_string($conn,$catdes);
if($_FILES['image']['error']==0){
    $filename=time()."_".$_FILES['image']['name'];
$path="../images/category2/".$filename;
if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
{
    $qry="update category2 set  catnam='".$catnam."',catdes='".$catdes."',image='".$filename."' where id=$id";
    mysqli_query($conn,$qry) or exit("category2 update fail".mysqli_error($conn));
    $_SESSION['error'] = "category2 Update successfully";
   header("location:category2.php");
}
else{
    $_SESSION['error'] = "file upload fail";
    header("location:category2_add.php");
}
}
else{
    $qry="update category2 set catnam='".$catnam."',catdes='".$catdes."' where id=$id";
    mysqli_query($conn,$qry) or exit("category2 insert fail".mysqli_error($conn));
    $_SESSION['error'] = "category2 Update successfully";
   header("location:category2.php");
}

}
else{
$_SESSION['error'] = "you are not athorize to this page whithout login";
 header("location:index.php");
}
?>