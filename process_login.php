<?php
session_start();
include 'config.php'; // <-- Make sure this contains your DB connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitize input
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query to check credentials (you should hash passwords in production!)
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION['user'] = $email;

        // Redirect to index.php
        header("Location: index.php");
        exit();
    } else {
        // Login failed
        echo "<script>alert('Invalid email or password'); window.location.href='login.php';</script>";
        exit();
    }
}
?>
