<?php
session_start();
if(isset($_SESSION['uname'])){
?>

<?php

include_once('includes/header.php');
include_once('includes/sidebar.php');
include_once('includes/footer.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project2</title>
    <!-- Add your styles here -->
    <?php include_once('includes/style.php'); ?>
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Add navbar and sidebar here -->
        <?php include_once('includes/header.php'); ?>
        <?php include_once('includes/sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Products2</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
                                <li class="breadcrumb-item active">Products2</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
             <!-- Search Form -->

            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><b>SubCategory List</b></h3>
                                    <a href="product2_add.php"><button class="btn btn-primary float-right">Add New</button></a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Images</th>
                                                <th>Category2 name</th>
                                                <th>Product2 Name</th>
                                                <th>Product2 Description</th>
                                                <th>Product2 Price</th>
                                                <th>Action</th>          
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include_once('includes/config.php');
                                            $qry = "SELECT * FROM products2 ORDER BY id DESC";
                                            $result = mysqli_query($conn, $qry) or exit("product query failed: " . mysqli_error($conn));
                                            while ($row = mysqli_fetch_array($result)) {
                                           
                                            $catqry = "SELECT catnam FROM category2 where id='".$row['id']."'";
                                            $catresult = mysqli_query($conn, $catqry) or exit("Category query failed: " . mysqli_error($conn));
                                            $catrow = mysqli_fetch_array($catresult);
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><img src="../images/products2/<?php echo $row['image']; ?>" alt="" width="200px"></td>
                                                    <td><?php echo $catrow['catnam']; ?></td>
                                                    <td><?php echo $row['proname']; ?></td>
                                                    <td><?php echo $row['prodescription']; ?></td>
                                                    <td><?php echo $row['proprice'];?></td>
                                                    <td>
                                                    <a href="product2_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this category?')"><i class="fas fa-trash"></i></a>
                                                    
                                                    <a href="product2_edit.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
                                                    </td>
                                                  
                                                    
                                                </tr>
                                                
                                            <?php
                                            }
                                            ?>   
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>Id</th>
                                                <th>Images</th>
                                                <th>Category2 name</th>
                                                <th>product2 Name</th>
                                                <th>product2 Description</th>
                                                <th>Product2 Price</th>
                                                <th>Action</th>
                                                 
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
                                        </div>
            <!-- /.content -->
             <?php include_once('includes/footer.php'); ?>
        <!-- /.content-wrapper -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
        <!-- Footer -->

    </div><!-- ./wrapper -->
                                    
    <!-- jQuery, Bootstrap, and DataTables Scripts -->
    <?php include_once('includes/script.php'); ?>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
<?php
}else{
  $_SESSION['error'] = "you are not authories to access the page withot login";
  header("location:index.php");
}
?>

