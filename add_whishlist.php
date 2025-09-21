<?php
session_start();
include('includes/config.php');

$product_id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : 0;

if ($product_id > 0) {

    // ✅ If user is logged in, save to database
    if (isset($_SESSION['user_id'])) {
        $user_id = (int)$_SESSION['user_id'];

        $stmt = $conn->prepare("SELECT id FROM wishlist WHERE user_id = ? AND product_id = ?" );
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

    // ✅ If user is not logged in, store in session wishlist

if ($product_id > 0) {
    if (!isset($_SESSION['wishlist'])) {
        $_SESSION['wishlist'] = [];
    }
    if (!in_array($product_id, $_SESSION['wishlist'])) {
        $_SESSION['wishlist'][] = $product_id;
    }
}
}

// ✅ Redirect back to the same page
$redirect_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header("Location: " . $redirect_url);
exit;
