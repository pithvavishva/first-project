<?php
session_start();
if(isset($_SESSION['uname']))
{
include_once('includes/config.php');
extract($_POST);
$prodescription= mysqli_real_escape_string($conn,$prodescription);
if($_FILES['image']['error']==0){
    $filename=time()."_".$_FILES['image']['name'];
$path="../images/products2/".$filename;
if(move_uploaded_file($_FILES['image']['tmp_name'],$path))
{
    $qry="update products2 set id='".$id."' ,proname='".$proname."',prodescription='".$prodescription."',proprice='".$proprice."',image='".$filename."' where id=$id";
    mysqli_query($conn,$qry) or exit("Sub Category update fail".mysqli_error($conn));
    $_SESSION['error'] = "products2 Update successfully";
   header("location:category2.php");
}
else{
    $_SESSION['error'] = "file upload fail";
    header("location:category2_add.php");
}
}
else{
    $qry="update products2 set  id='".$id."' ,proname='".$proname."',prodescription='".$prodescription."',proprice='".$proprice."' where id=$id";
    mysqli_query($conn,$qry) or exit("category insert fail".mysqli_error($conn));
    $_SESSION['error'] = "category2 Update successfully";
   header("location:category2.php");
}

}
else{
$_SESSION['error'] = "you are not athorize to this page whithout login";
 header("location:index.php");
}
?>