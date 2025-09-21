<?php
session_start();
include_once('includes/config.php');

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND password='$pass'") or die('Query failed: ' . mysqli_error($conn));

    if (mysqli_num_rows($select) > 0) {
    $row = mysqli_fetch_assoc($select);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_name'] = $row['name'];

    
    header('Location: index.php');
    exit();
}

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if (isset($message)) {
        foreach ($message as $msg) {
            echo '<div class="message" onclick="this.remove();">'.$msg.'</div>';
        }
    }
    ?>
    <div class="form-container">
        <form action="" method="post">
            <h3>LOGIN NOW</h3>
            <input type="email" name="email" required placeholder="Enter email" class="box">
            <input type="password" name="password" required placeholder="Enter password" class="box">
            <input type="submit" name="submit" class="btn" value="Login now">
            <p>I don't have an account? <a href="register.php">Register now</a></p>
        </form>
    </div>
</body>
</html>
