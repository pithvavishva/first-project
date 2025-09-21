<?php
include_once('includes/config.php');
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){
   $product_name = $_POST['product_name'] ?? '';
   $product_price = $_POST['product_price'] ?? 0;
   $product_image = $_POST['product_image'] ?? '';
   $product_quantity = $_POST['product_quantity'] ?? 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE product_name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'Product already in cart!';
   } else {
      mysqli_query($conn, "INSERT INTO cart(user_id, product_name, product_price, product_image, product_quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
      $message[] = 'Product added to cart!';
   }
}

if(isset($_POST['update_cart'])){
   $update_quantity = $_POST['cart_quantity'];
   $update_id = $_POST['cart_id'];
   mysqli_query($conn, "UPDATE cart SET product_quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
   $message[] = 'Cart updated successfully!';
}

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM cart WHERE id = '$remove_id'") or die('query failed');
   header('location:cart.php');
}

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM cart WHERE user_id = '$user_id'") or die('query failed');
   header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Shopping Cart</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $msg){
      echo '<div class="message" onclick="this.remove();">'.$msg.'</div>';
   }
}
?>

<div class="container">

   <!-- User Profile -->
   <div class="user-info">
      <?php
      $select_user = mysqli_query($conn, "SELECT * FROM user WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      }
      ?>
      <div class="user-info-box">
      <p>Username: <span><?php echo $fetch_user['name']; ?></span></p>
      <p>Email: <span><?php echo $fetch_user['email']; ?></span></p>
      </div>
      <div class="auth-links">
         <a href="login.php" class="btn">Login</a>
         <a href="register.php" class="option-btn">Register</a>
         <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Are you sure you want to logout?');" class="delete-btn">Logout</a>
      </div>
   </div>

   <!-- Products -->


   <!-- Shopping Cart -->
   <div class="shopping-cart">
     <center> <h1 class="heading">Shopping Cart</h1></center>
      <table>
         <thead>
            <tr>
               <th>Image</th>
               <th>Name</th>
               <th>Price</th>
               <th>Quantity</th>
               <th>Total</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
         <?php
         $cart_query = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '$user_id'") or die('query failed');
         $grand_total = 0;
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
         ?>
            <tr>
               <td><img src="images/products/<?php echo $fetch_cart['product_image']; ?>" class="cart-image" alt="">
<img src="images/<?php echo $fetch_cart['product_image']; ?>" class="cart-image" alt="">

               <td><?php echo $fetch_cart['product_name']; ?></td>
               <td>$<?php echo $fetch_cart['product_price']; ?>/-</td>
             
               <td>
                  <form method="post" action="">
                     <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                     <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['product_quantity']; ?>">
                     <input type="submit" name="update_cart" value="Update" class="option-btn">
                  </form>
               </td>
               <td>$<?php echo $sub_total = ($fetch_cart['product_price'] * $fetch_cart['product_quantity']); ?>/-</td>
               <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('Remove item from cart?');">Remove</a></td>
            </tr>
         <?php
            $grand_total += $sub_total;
            }
         } else {
            echo '<tr><td colspan="6" style="padding:20px; text-align:center;">No items added</td></tr>';
         }
         ?>
         <tr class="grand-total">
            <td colspan="4">Grand Total :</td>
            <td>$<?php echo $grand_total; ?>/-</td>
            <td>
<a href="cart.php?delete_all=true" onclick="return confirm('Delete all items from cart?');" class="delete-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">Delete All</a>
            </td>
         </tr>
         </tbody>
      </table>

   
   <form action="checkout.php" method="POST" style="max-width: 600px; margin: auto;">

      <input type="hidden" name="grand_total" value="<?php echo $grand_total; ?>">

     

      <div style="text-align:center;">
         <button type="submit" name="proceed_checkout" class="btn" <?php echo ($grand_total <= 1) ? 'disabled' : ''; ?>>
            ✅ Proceed to Checkout
         </button>
      </div>
   </form>
</div>


   </div>

</div>

</body>
</html>
