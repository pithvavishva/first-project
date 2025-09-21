<?php
include_once('../includes/config.php');

// Fetch contact messages from database
$query = "SELECT * FROM contact_messages ORDER BY id DESC";
$result = mysqli_query($conn, $query) or die('Query Failed: ' . mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Admin - Contact Messages</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 30px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #b08d57;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            color: #b08d57;
            font-family: Arial, sans-serif;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<h1>Contact Messages</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php if(mysqli_num_rows($result) > 0): ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo isset($row['phone']) ? htmlspecialchars($row['phone']) : '-'; ?></td>
                <td><?php echo htmlspecialchars($row['message']); ?></td>
                <td>
                    <?php 
                        // Agar message_date column nahi hai, to ho sakta 'date' ya 'created_at' ho
                        if (isset($row['message_date'])) {
                            echo htmlspecialchars($row['message_date']);
                        } elseif (isset($row['date'])) {
                            echo htmlspecialchars($row['date']);
                        } elseif (isset($row['created_at'])) {
                            echo htmlspecialchars($row['created_at']);
                        } else {
                            echo '-';
                        }
                    ?>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="6" style="text-align:center;">No messages found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

</body>
</html>
