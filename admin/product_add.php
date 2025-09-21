<?php
session_start();
if(isset($_SESSION['uname'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>project2</title>

  <!-- add your style here -->
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

 <!-- add navbar here -->
  <?php
  include_once('includes/header.php');
  ?>
  <!-- add Sidebar here -->
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
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
              <li class="breadcrumb-item"><a href="products.php">Products</a></li>
              <li class="breadcrumb-item active">Products add</li>
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
                <h3 class="card-title">PRODUCT ADD</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <?php
               include_once('includes/config.php');
               $qry = "SELECT * FROM categories ORDER BY id DESC";
               $result = mysqli_query($conn, $qry) or exit("Category query failed: " . mysqli_error($conn));
               
               ?>
              <form action="product_add_db.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">select Category name</label>
                    <select name="catid" id="catid" class="form-control">
                      <option value=" " selected disabled>select category</option>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $row['id']?>"><?php echo $row['catname'] ?></option>
                    <?php
                    }
                    ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">select Sub category name </label>
                    <select name="subcatid" id="subcatid" class="form-control">
                     <option value=" " selected disabled>select category first</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product name</label>
                    <input type="text" class="form-control" id="productname" name="productname" placeholder="Enter productname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Description</label>
                    <textarea name="productdescription" id="productdescription" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Price</label>
                    <textarea name="productprice" id="productprice" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">select Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">ADD</button>
                </div>
              </form>
            </div>
                
              </div>
              <!-- /.card-header -->
              
          
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- add your footer here -->
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
<!-- add script here -->
<?php
include_once('includes/script.php');
?>
<script>
  $(document).ready(function() {
    $("#catid").change(function() {  // ✅ use .change (not .Change)
      var catid = $(this).val();
      $.ajax({
        url: "getsubcat.php",       // ✅ no semicolon here
        type: "GET",
        cache: false,
        data: {
          id: catid                 // ✅ 'data', not 'date'
        },
        success: function(result) {
          $("#subcatid").html(result); // ✅ use #subcatid
        },
        error: function() {
          alert("Failed to load subcategories.");
        }
      });
    });
  });
</script>

</body>
</html>
<?php
}else{
  $_SESSION['error'] = "you are not authories to access the page without login";
  header("location:index.php");
}
?>