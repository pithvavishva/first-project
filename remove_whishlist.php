<?php
session_start();
include_once('includes/config.php');

$product_id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : 0;

if ($product_id <= 0) {
    die("Invalid product ID.");
}

// ✅ 1. Remove from session wishlist
if (isset($_SESSION['wishlist']) && in_array($product_id, $_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = array_diff($_SESSION['wishlist'], [$product_id]);
}

// ✅ 2. If user is logged in, also remove from DB
if (isset($_SESSION['user_id'])) {
    $user_id = (int)$_SESSION['user_id'];

    $stmt = $conn->prepare("DELETE FROM wishlist WHERE user_id = ? AND product_id = ?");
    if ($stmt) {
        $stmt->bind_param("ii", $user_id, $product_id);
        $stmt->execute();
        $stmt->close();
    }
}

// ✅ 3. Redirect back
header("Location: whishlist.php");
exit();
?>
