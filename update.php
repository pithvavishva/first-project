<?php
session_start();
include 'includes/config.php';

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Prepare MySQLi statement
$sql = "SELECT c.quantity, i.name, i.price, i.image 
        FROM cart c 
        JOIN items i ON c.item_id = i.id 
        WHERE c.user_id=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Fetch all cart items
$cart_items = [];
while($row = mysqli_fetch_assoc($result)){
    $cart_items[] = $row;
}
?>
<?php foreach($cart_items as $item): ?>
<tr>
  <td><img src="uploads/<?= $item['image'] ?>" width="50"></td>
  <td><?= $item['name'] ?></td>
  <td>₹<?= $item['price'] ?></td>
  <td><?= $item['quantity'] ?></td>
  <td>₹<?= $item['price'] * $item['quantity'] ?></td>
</tr>
<?php endforeach; ?>
</table>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div class="cart-page">
  <div class="cart-container">
    <h1><center>Shopping Cart</center></h1><br><br>

    <form action="checkout.php" method="POST">

      <!-- Cart Table -->
      <table class="cart-table">
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tbody id="cart-items">
          <!-- Dynamic rows will be inserted here -->
          <!-- Example (remove when dynamic): 
          <tr>
            <td class="product-info">
              <button type="button" class="remove-btn">×</button>
              <img src="images/tshirt.jpg" alt="T-shirt">
              <span>Summer T-Shirt</span>
            </td>
            <td>$177.00</td>
            <td><input type="number" name="qty[]" value="1" min="1"></td>
            <td>$177.00</td>
          </tr>
          -->
        </tbody>
      </table>

      <!-- Coupon + Totals -->
      <div class="cart-footer">

        <!-- Totals -->
        <div class="cart-totals">
          <h3>Cart Totals</h3>
          <table>
            <tr>
              <td>Subtotal</td>
              <td id="subtotal">$0.00</td>
            </tr>
            <tr>
              <td>Total</td>
              <td id="total"><strong>$0.00</strong></td>
            </tr>
          </table>
          <button type="submit" class="checkout-btn">Proceed to Checkout</button>
        </div>

      </div>

    </form>
  </div>
</div>

</body>
</html>