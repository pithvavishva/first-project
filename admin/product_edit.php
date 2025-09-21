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
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
              <li class="breadcrumb-item"><a href="products.php">products</a></li>
              <li class="breadcrumb-item active">product Add<li>
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
                <h3 class="card-title">PRODUCT EDIT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <?php
              include_once('includes/config.php');

              $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : die("Invalid ID");

              // Get product data
              $qry = "SELECT * FROM products WHERE id = $id";
              $result = mysqli_query($conn, $qry) or die("Query failed: " . mysqli_error($conn));
              $productrow = mysqli_fetch_assoc($result);

              // Get category list
              $catqry = "SELECT * FROM categories";
              $catresult = mysqli_query($conn, $catqry) or die("Query failed: " . mysqli_error($conn));

              // Get subcategory data (optional)
             $subcatqry = "SELECT * FROM subcategories";
            $subcatresult = mysqli_query($conn, $subcatqry) or die("Query failed: " . mysqli_error($conn));

              ?>

              <form action="product_update_db.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
                 <!-- Category -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Category name</label>
                    <select name="catid" id="catid" class="form-control">
                      <option value=" " selected disabled>Select category</option>
                     <?php
                      while ($catrow = mysqli_fetch_array($catresult)) {
                        $selected = ($productrow['catid'] == $catrow['id']) ? "selected" : "";
                      ?>
                        <option value="<?php echo htmlspecialchars($catrow['id']); ?>" <?php echo $selected; ?>>
                          <?php echo htmlspecialchars($catrow['catname']); ?>
                        </option>
                      <?php } ?>
                    </select>
                  </div>
                <!-- Subcategory -->
                  
                         <div class="form-group">
  <label for="exampleInputEmail1">Select subcategory name</label>
  <select name="catid" id="catid" class="form-control">
    <option value="" selected disabled>Select subcategory</option>
    <?php
    while ($subcatrow = mysqli_fetch_array($subcatresult)) {
      $selected = ($productRow['subcatid'] == $subcatrow['id']) ? "selected" : "";
    ?>
      <option value="<?php echo htmlspecialchars($subcatrow['id']); ?>" <?php echo $selected; ?>>
        <?php echo htmlspecialchars($subcatrow['subcatname']); ?>
      </option>
    <?php } ?>
  </select>
</div>

                  <!-- Product Name -->
                  <div class="form-group">
                    <label for="productname">Product Name</label>
                    <input type="text" class="form-control" id="productname" name="productname" value="<?php echo htmlspecialchars($productrow['productname']); ?>" required>
                    <input type="hidden" name="id" value="<?php echo (int)$productrow['id']; ?>">
                  </div>

                  <!-- Product Description -->
                  <div class="form-group">
                    <label for="productdescription">Product Description</label>
                    <textarea name="productdescription" id="productdescription" class="form-control" rows="4" required><?php echo htmlspecialchars($productrow['productdescription']); ?></textarea>
                  </div>
                   <div class="form-group">
                    <label for="productprice">Product PRICE</label>
                    <textarea name="productprice" id="productpriceE" class="form-control" rows="4" required><?php echo htmlspecialchars($productrow['productprice']); ?></textarea>
                  </div>

                  <!-- New Image -->
                  <div class="form-group">
                    <label for="newImage">Select New Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="newImage" name="image">
                        <label class="custom-file-label" for="newImage">Choose file</label>
                      </div>
                    </div>
                  </div>

                  <!-- Old Image --> 
                  <div class="form-group">
                    <label>Old Image</label><br>
                    <input type="hidden" name="oldimage" value="<?php echo htmlspecialchars($productrow['image']); ?>">
                    <?php
                      $imagePath = "../images/products/" . $productrow['image'];
                      if (!empty($productrow['image']) && file_exists($imagePath)) {
                          echo '<img src="' . $imagePath . '" width="200px" alt="Old Image">';
                      } else {
                          echo '<p class="text-danger">Image not found.</p>';
                      }
                    ?>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Product</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
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