<?php
include_once('includes/config.php');
session_start();

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Get and sanitize input
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $msg_content = trim($_POST['message']);

    // Validation
    if (empty($name) || empty($email) || empty($msg_content)) {
        $message = "<p style='color: red;'>Please fill in all required fields.</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "<p style='color: red;'>Please enter a valid email address.</p>";
    } else {
        // Prepare and insert message into database
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $msg_content);

        if ($stmt->execute()) {
            $message = "<p style='color: green;'>Thank you! Your message has been sent.</p>";
            // Clear POST data after successful submission to clear form fields
            $_POST = [];
        } else {
            $message = "<p style='color: red;'>Failed to send your message. Please try again later.</p>";
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fefaf7;
            padding: 20px;
            max-width: 600px;
            margin: 40px auto;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        h1 {
            color: #b08d57;
            text-align: center;
        }
        form {
            margin-top: 30px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #b08d57;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
            resize: vertical;
        }
        textarea {
            height: 120px;
        }
        input[type="submit"] {
            background: #b08d57;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 6px;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover {
            background: #9c733f;
        }
        .message {
            text-align: center;
            margin-bottom: 20px;
            font-size: 17px;
        }
    </style>
</head>
<body>

<h1>Contact Us</h1>

<?php
if (!empty($message)) {
    echo '<div class="message">' . $message . '</div>';
}
?>

<form method="POST" action="">
    <label for="name">Name *</label>
    <input type="text" id="name" name="name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">

    <label for="email">Email *</label>
    <input type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

    <label for="message">Message *</label>
    <textarea id="message" name="message" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>

    <input type="submit" name="submit" value="Send Message">
</form>

</body>
</html>
