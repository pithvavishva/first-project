<?php
session_start();
if(isset($_SESSION['uname']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Master layout | Dashboard</title>

  <!-- add your style here  -->
   <?php
 include_once('includes/style.php');
 ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <!-- add navbar here  -->
   <?php
 include_once('includes/header.php');
 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <!-- add your sidebar here  -->
<?php
 include_once('includes/sidebar.php');
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
              <li class="breadcrumb-item"><a href="category2.php">Category2</a></li>
              <li class="breadcrumb-item active">category2 Add<li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> 
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">CATEGORY2 EDIT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <?php
                include_once('includes/config.php');
                      $id=$_REQUEST["id"];
                      $qry=" select * from category2 where id=$id";
                     $result= mysqli_query($conn,$qry) or exit("category select fail".mysqli_error($conn));
                     $row = mysqli_fetch_array($result);
               ?>
              <form action="category2_update_db.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category2 name</label>
                    <input type="text" class="form-control" id="catnam" placeholder="Category2 name" name="catnam" value="<?php echo $row['catnam'];?>">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category2 Description</label>
                   <textarea  class="form-control" name="catdes" id="catdes"><?php echo $row['catdes'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Select image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Old image</label>
                    <input type="hidden" name="oldimage"  value="<?php echo $row['image'];?>">
                    <td><img src="../images/category2/<?php echo $row['image'] ?> " alt="" width="100px"></td>

                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">update</button>
                </div>
              </form>
            </div>
      </div>
         <!-- your content here  -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- add your footer here  -->
<?php
 include_once('includes/footer.php');
 ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- add script here  -->
 <?php
 include_once('includes/script.php');
 ?>
</body>
</html>
<?php
}
$_SESSION['error'] = "you are not athorize to this page whithout login";
header("location:index.php");
?>