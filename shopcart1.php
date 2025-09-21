<?php

include_once('includes/config.php');

session_start();
if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
} else {
    header('Location: login.php');
    exit;
}



if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_description = $_POST['product_description'];

   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE productname = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO cart(user_id, productname, productdescription, productprice, image, quantity) VALUES('$user_id', '$product_name', '$product_description', '$product_price', '$product_image', '$product_quantity')") or die('query failed');

      $message[] = 'product added to cart!';
   }

};

// if(isset($_POST['update_cart'])){
//    $update_quantity = $_POST['cart_quantity'];
//    $update_id = $_POST['cart_id'];
//    mysqli_query($conn, "UPDATE cart SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
//    $message[] = 'cart quantity updated successfully!';
// }

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM cart WHERE id = '$remove_id'") or die('query failed');
   header('location:shopcart1.php');
}
  
// if(isset($_GET['delete_all'])){
//    mysqli_query($conn, "DELETE FROM cart WHERE user_id = '$user_id'") or die('query failed');
//    header('location:viewproduct.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="container">





<div class="shopping-cart">

   <h1 class="heading">proceed to checkout</h1>

   <table>
      <thead>
         <th>image</th>
         <th>name</th>
         <th>description</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>
      <tbody>
      <?php
         $cart_query = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '$user_id'") or die('query failed');
         $grand_total = 0;
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
      ?>
         <tr>
            <td><img src="images/products/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['productname']; ?></td>
             <td><?php echo $fetch_cart['productdescription']; ?></td>
            <td>$<?php echo $fetch_cart['productprice']; ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                  <input type="number"  name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                  <!-- <input type="submit" name="update_cart" value="update" class="option-btn"> -->
               </form>
            </td>
            <td>$<?php echo $sub_total = ($fetch_cart['productprice'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="shopcart1.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">cancel</a></td>
         </tr>
      <?php
         $grand_total += $sub_total;
            }
         }else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
         }
      ?>
      <tr class="table-bottom">
         <td colspan="6">grand total :</td>
         <td>$<?php echo $grand_total; ?>/-</td>
         <!-- <td><a href="viewproduct.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">delete all</a></td> -->
      </tr>
   </tbody>
   </table>

   <div class="cart-btn">  
      <a href="#" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>"></a>
   </div>

</div>

</div>


</body>
</html>