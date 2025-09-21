<?php
include_once('includes/config.php');
session_start();

// Agar admin login check karna ho to yahan add kar sakte hain:
// if (!isset($_SESSION['admin_logged_in'])) {
//     header('Location: admin_login.php');
//     exit;
// }

// Delete order agar ?delete=ID aaya ho to
if (isset($_GET['delete'])) {
    $delete_id = (int)$_GET['delete'];

    $delete_query = "DELETE FROM orders WHERE id = $delete_id";
    if (mysqli_query($conn, $delete_query)) {
        header("Location: order.php?deleted=1");
        exit;
    } else {
        die('Delete failed: ' . mysqli_error($conn));
    }
}

// Sab orders fetch karo
$query = "SELECT * FROM orders ORDER BY order_date DESC";
$result = mysqli_query($conn, $query) or die('Query failed: ' . mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Orders</title>
</head>
<body>

<h2>All Orders</h2>

<?php if (isset($_GET['deleted']) && $_GET['deleted'] == 1): ?>
    <p style="color: green;"></p>
<?php endif; ?>

<?php if (mysqli_num_rows($result) > 0): ?>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Items</th>
                <th>Delivery Place</th>
                <th>Total Amount</th>
                <th>Order Date</th>
                <th>Action</th> <!-- Delete button -->
            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                <td><?php echo htmlspecialchars($row['user_email']); ?></td>
                <td><?php echo nl2br(htmlspecialchars($row['items'])); ?></td>
                <td><?php echo htmlspecialchars($row['delivery_place']); ?></td>
                <td><?php echo number_format($row['total_amount'], 2); ?></td>
                <td><?php echo $row['order_date']; ?></td>
                <td>
                    <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this order?');">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No orders found.</p>
<?php endif; ?>

</body>
</html>
