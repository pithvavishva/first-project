<?php
$hostname="localhost";
$username="root";
$password="";
$database="project_2025";
$conn=mysqli_connect($hostname,$username,$password,$database) or exit("connection fail");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>