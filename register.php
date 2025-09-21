<?php
session_start();
include_once('includes/config.php');

$message = [];

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
  
    

        $select = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'") or die(mysqli_error($conn));

        if (mysqli_num_rows($select) > 0) {
            $message[] = 'User already exists!';
        } else {
            mysqli_query($conn, "INSERT INTO user(name, email, password) VALUES ('$name', '$email', '$pass')") or die(mysqli_error($conn));
            $_SESSION['success'] = 'Registered successfully! Please login.';
            header('Location: login.php');
            exit();
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Show messages (errors or success)
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<div class="message" onclick="this.remove();">' . $msg . '</div>';
    }
}
?>

<div class="form-container">
    <form action="" method="post">
        <h3>REGISTER NOW</h3>
        <input type="text" name="name" required placeholder="Enter username" class="box">
        <input type="email" name="email" required placeholder="Enter email" class="box">
        <input type="password" name="password" required placeholder="Enter password" class="box">
        <input type="submit" name="submit" class="btn" value="Register now">
        <p>Already have an account? <a href="login.php">Login now</a></p> <!-- Change if your login file is login.php -->
    </form>
</div>

</body>
</html>
