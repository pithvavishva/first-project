<?php
include_once('includes/config.php');
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
    exit;
}

// Fetch user details
$user_query = mysqli_query($conn, "SELECT * FROM user WHERE id = '$user_id'") or die('Query failed');
$user = mysqli_fetch_assoc($user_query);

// Fetch cart items
$cart_query = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '$user_id'") or die('Query failed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Account | Jewellery Store</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #fefaf7;
        margin: 0;
        padding: 0;
    }

    .dashboard-container {
        display: flex;
        max-width: 1200px;
        margin: 50px auto;
        border: 1px solid #eee;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        background-color: #fff;
    }

    .sidebar {
        width: 250px;
        background-color: #fff2e6;
        padding: 30px 20px;
        box-sizing: border-box;
        border-right: 1px solid #eee;
    }

    .sidebar h2 {
        margin-top: 0;
        color: #a87b4d;
        font-size: 22px;
        margin-bottom: 30px;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li {
        padding: 12px;
        margin-bottom: 10px;
        background-color: #fff;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.3s;
    }

    .sidebar ul li:hover {
        background-color: #ffe8d6;
    }

    .main-content {
        flex: 1;
        padding: 30px;
        box-sizing: border-box;
    }

    .section {
        margin-bottom: 40px;
    }

    .section h3 {
        color: #b08d57;
        margin-bottom: 15px;
        font-size: 20px;
    }

    .user-info-box p {
        margin: 8px 0;
        font-size: 16px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    table th, table td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    table img {
        width: 50px;
        border-radius: 6px;
    }

    .btn {
        background: #b08d57;
        color: #fff;
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn:hover {
        background: #9c733f;
    }

    @media (max-width: 768px) {
        .dashboard-container {
            flex-direction: column;
        }

        .sidebar {
            width: 100%;
            border-right: none;
            border-bottom: 1px solid #eee;
        }
    }
  </style>
</head>
<body>

<div class="dashboard-container">

    <!-- Sidebar Menu -->
    <div class="sidebar">
        <h2>My Account</h2>
        <ul>
            <li>👤 Profile Info</li>
          <a href="cart.php">  <li>🛒 My Cart</li></a>
                     <a href="cart.php"><li>📦 My Orders</li></a>
                     <a href="whishlist.php"> <li>💖 Wishlist</li></a>
            <li><a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Logout?');" style="color:red; text-decoration:none;">🚪 Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">

        <!-- User Info Section -->
        <div class="section user-info-box">
            <h3>👤 Profile Information</h3>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($user['phone'] ?? 'Not provided'); ?></p>
            <p><strong>Address:</strong> <?php echo nl2br(htmlspecialchars($user['address'] ?? 'Not provided')); ?></p>
        </div>

        <!-- Cart Section -->
        <div class="section">
            <h3>🛒 Items in Your Cart</h3>
            <?php if(mysqli_num_rows($cart_query) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $grand_total = 0;
                    while($item = mysqli_fetch_assoc($cart_query)):
                        $sub_total = $item['product_price'] * $item['product_quantity'];
                        $grand_total += $sub_total;
                    ?>
                    <tr>
                        <td><img src="images/products/<?php echo htmlspecialchars($item['product_image']); ?>" alt=""></td>
                        <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                        <td>$<?php echo number_format($item['product_price'], 2); ?></td>
                        <td><?php echo (int)$item['product_quantity']; ?></td>
                        <td>$<?php echo number_format($sub_total, 2); ?></td>
                    </tr>
                    <?php endwhile; ?>
                    <tr style="font-weight: bold;">
                        <td colspan="4" style="text-align: right;">Grand Total:</td>
                        <td>$<?php echo number_format($grand_total, 2); ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <a href="cart.php" class="btn">Go to Cart</a>
            <?php else: ?>
                <p>Your cart is empty.</p>
            <?php endif; ?>
        </div>

    </div>
</div>

</body>
</html>
