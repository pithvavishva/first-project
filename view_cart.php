<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        img {
            width: 100px;
            height: 80px;
            object-fit: cover;
        }

        h2 {
            text-align: center;
            margin: 20px 0;
        }

        .top-bar {
            background: #eee;
            padding: 10px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        Logged in as: <b><?php echo $_SESSION['user']; ?></b>
        | <a href="products.php">Continue Shopping</a>
        | <a href="logout.php">Logout</a>
    </div>

    <h2>Your Cart</h2>

    <?php if (count($cart) > 0): ?>
        <table>
            <tr>
                <th>Product</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <?php
            $total = 0;
            foreach ($cart as $item):
                $subtotal = $item['price'] * $item['qty'];
                $total += $subtotal;
            ?>
                <tr>
                    <td><?= $item['name'] ?></td>
                    <td><img src="<?= $item['image'] ?>" alt=""></td>
                    <td>₹<?= $item['price'] ?></td>
                    <td><?= $item['qty'] ?></td>
                    <td>₹<?= $subtotal ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4"><strong>Total</strong></td>
                <td><strong>₹<?= $total ?></strong></td>
            </tr>
        </table>
    <?php else: ?>
        <p style="text-align:center;">Your cart is empty.</p>
    <?php endif; ?>
</body>
</html>
