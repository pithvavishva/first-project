<?php
session_start();
include_once('includes/config.php');

// ✅ Setup session wishlist if not already set
if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = [];
}

$product_id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : 0;

// ✅ If product ID provided via GET, add to session
if ($product_id > 0 && !in_array($product_id, $_SESSION['wishlist'])) {
    $_SESSION['wishlist'][] = $product_id;

    // ✅ If logged in, also insert into database
    if (isset($_SESSION['user_id'])) {
        $user_id = (int)$_SESSION['user_id'];

        $stmt = $conn->prepare("SELECT id FROM wishlist WHERE user_id = ? AND product_id = ?");
        $stmt->bind_param("ii", $user_id, $product_id);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 0) {
            $stmt->close();
            $stmt = $conn->prepare("INSERT INTO wishlist (user_id, product_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $user_id, $product_id);
            $stmt->execute();
        }
        $stmt->close();
    }
}

// ✅ Fetch products based on user login/session
$products = [];

if (isset($_SESSION['user_id'])) {
    // ✅ Logged-in user: fetch from DB
    $user_id = (int)$_SESSION['user_id'];
    $sql = "SELECT p.* FROM products p 
            INNER JOIN wishlist w ON p.id = w.product_id 
            WHERE w.user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // ✅ Guest user: fetch from session
    if (!empty($_SESSION['wishlist'])) {
        $ids = implode(',', array_map('intval', $_SESSION['wishlist']));
        $result = $conn->query("SELECT * FROM products WHERE id IN ($ids)");
    } else {
        $result = false;
    }
}

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Wishlist</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
</head>
<body class="wishlist-page">
    <h2 class="wishlist-title">Your Wishlist</h2>

    <?php if (empty($products)): ?>
        <p class="empty-message">Your wishlist is empty.</p>
    <?php else: ?>
    <table class="wishlist-table">
        <thead>
            <tr>
                <th class="table-heading">Image</th>
                <th class="table-heading">Name</th>
                <th class="table-heading">Description</th>
                <th class="table-heading">Price</th>
                <th class="table-heading">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr class="wishlist-item">
                <td><img src="images/products/<?php echo htmlspecialchars($product['image']); ?>" height="100"></td>
                <td><?php echo htmlspecialchars($product['productname']); ?></td>
                <td><?php echo htmlspecialchars($product['productdescription']); ?></td>
                <td>$<?php echo htmlspecialchars($product['productprice']); ?>/-</td>
                <td>
                    <a href="remove_whishlist.php?product_id=<?php echo (int)$product['id']; ?>" onclick="return confirm('Remove this product?');">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
</body>
</html>
