<?php
include_once('includes/config.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header('location:login.php');
    exit;
}

$user_id = (int)$_SESSION['user_id'];
$order_placed = false;
$order_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['proceed_checkout'])) {

    // First step: show form if user details not submitted yet
    if (!isset($_POST['user_name'])) {
        $grand_total = isset($_POST['grand_total']) ? (float)$_POST['grand_total'] : 0;

        if ($grand_total <= 0) {
            $order_message = "Your cart is empty. Cannot proceed to checkout.";
        }

    } else {
        // Second step: form submitted with user details, process order

        // Sanitize inputs
        $user_name = trim(mysqli_real_escape_string($conn, $_POST['user_name'] ?? ''));
        $user_email = trim(mysqli_real_escape_string($conn, $_POST['user_email'] ?? ''));
        $user_phone = trim(mysqli_real_escape_string($conn, $_POST['user_phone'] ?? ''));
        $user_city = trim(mysqli_real_escape_string($conn, $_POST['user_city'] ?? ''));
        $user_address = trim(mysqli_real_escape_string($conn, $_POST['user_address'] ?? ''));
        $grand_total = isset($_POST['grand_total']) ? (float)$_POST['grand_total'] : 0;

        // Validate required fields
        if (!$user_name || !$user_email || !$user_phone || !$user_city || !$user_address) {
            $order_message = "Please fill in all the required fields.";
        } else {
            // Fetch cart items
            $cart_query = mysqli_query($conn, "SELECT product_quantity, product_name FROM cart WHERE user_id = '$user_id'");
            if (mysqli_num_rows($cart_query) == 0) {
                $order_message = "Your cart is empty.";
            } else {
                $order_items = [];
                while ($row = mysqli_fetch_assoc($cart_query)) {
                    $order_items[] = $row['product_name'] . " (x" . $row['product_quantity'] . ")";
                }
                $items_text = mysqli_real_escape_string($conn, implode(", ", $order_items));
                $order_date = date('Y-m-d H:i:s');

                // Insert order
                $insert_order_query = "
                    INSERT INTO orders (
                        user_id, 
                        user_name, 
                        user_email, 
                        user_phone, 
                        user_city, 
                        user_address, 
                        items, 
                        total_amount, 
                        order_date
                    ) VALUES (
                        '$user_id',
                        '$user_name',
                        '$user_email',
                        '$user_phone',
                        '$user_city',
                        '$user_address',
                        '$items_text',
                        '$grand_total',
                        '$order_date'
                    )
                ";

                if (mysqli_query($conn, $insert_order_query)) {
                    // Clear cart
                    mysqli_query($conn, "DELETE FROM cart WHERE user_id = '$user_id'");
                    $order_placed = true;
                } else {
                    $order_message = "Failed to place order: " . mysqli_error($conn);
                }
            }
        }
    }
} else {
    $order_message = "No checkout request detected.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Checkout</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f9f9f9;
        margin: 0; padding: 0;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
    }
    .checkout-container {
        background: white;
        max-width: 500px;
        width: 100%;
        margin: 40px;
        padding: 30px 40px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border-radius: 10px;
    }
    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
    }
    label {
        display: block;
        margin-top: 15px;
        font-weight: 600;
        color: #555;
    }
    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px 12px;
        margin-top: 6px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
        font-size: 15px;
        transition: border-color 0.3s ease;
    }
    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
        border-color: #007bff;
        outline: none;
    }
    textarea {
        resize: vertical;
        min-height: 80px;
    }
    button {
        margin-top: 25px;
        width: 100%;
        background: #007bff;
        border: none;
        color: white;
        padding: 14px;
        font-size: 16px;
        font-weight: 700;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s ease;
    }
    button:hover {
        background: #0056b3;
    }
    .message {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        padding: 12px 15px;
        border-radius: 6px;
        margin-bottom: 20px;
        text-align: center;
        font-weight: 600;
    }
    .success-message {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    a.back-link {
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        color: #007bff;
        font-weight: 600;
        text-align: center;
    }
    a.back-link:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<div class="checkout-container">
<?php if ($order_placed): ?>
    <div class="message success-message">
        <h2>Thank you for your order!</h2>
        <p>Your order has been placed successfully.</p>
    </div>
    <a href="index.php" class="back-link">Go back to Home</a>

<?php elseif (!isset($_POST['user_name']) && isset($_POST['grand_total']) && $_POST['grand_total'] > 0): ?>
    <?php if ($order_message): ?>
        <div class="message"><?php echo htmlspecialchars($order_message); ?></div>
    <?php endif; ?>
    <h1>Enter Your Delivery Details</h1>
    <form method="post" action="checkout.php">
        <input type="hidden" name="grand_total" value="<?php echo htmlspecialchars($_POST['grand_total']); ?>">

        <label for="user_name">Full Name *</label>
        <input type="text" id="user_name" name="user_name" required>

        <label for="user_email">Email Address *</label>
        <input type="email" id="user_email" name="user_email" required>

        <label for="user_phone">Phone Number *</label>
        <input type="text" id="user_phone" name="user_phone" required>

        <label for="user_city">City *</label>
        <input type="text" id="user_city" name="user_city" required>

        <label for="user_address">Full Address *</label>
        <textarea id="user_address" name="user_address" required></textarea>

        <button type="submit" name="proceed_checkout">Place Order</button>
    </form>

<?php else: ?>
    <div class="message"><?php echo htmlspecialchars($order_message); ?></div>
    <a href="cart.php" class="back-link">Go back to Cart</a>
<?php endif; ?>
</div>

</body>
</html>
