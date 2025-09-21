<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_GET['product_id']) && is_numeric($_GET['product_id'])) {
    include_once('includes/config.php');
    
    $user_id = $_SESSION['user_id'];
    $product_id = (int)$_GET['product_id'];

    // Check if product already in cart
    $checkQry = "SELECT * FROM cart WHERE user_id = ? AND product_id = ?";
    $stmt = $conn->prepare($checkQry);
    $stmt->bind_param("ii", $user_id, $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Product exists, optionally update quantity
        $updateQry = "UPDATE cart SET quantity = quantity + 1 WHERE user_id = ? AND product_id = ?";
        $stmtUpdate = $conn->prepare($updateQry);
        $stmtUpdate->bind_param("ii", $user_id, $product_id);
        $stmtUpdate->execute();
    } else {
        // Insert new product
        $insertQry = "INSERT INTO cart (user_id, product_id, quantity) VALUES (?, ?, 1)";
        $stmtInsert = $conn->prepare($insertQry);
        $stmtInsert->bind_param("ii", $user_id, $product_id);
        $stmtInsert->execute();
    }

    echo "1";  // success
} else {
    echo "0";  // not logged in or invalid product_id
}
?>
