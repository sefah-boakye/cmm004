<?php
session_start();
// Include database connection
include_once 'db_connect.php';

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check user credentials
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    // Login successful
    $_SESSION['username'] = $username;
    header('Location: welcome.php');
    exit;
} else {
    // Login failed
    header('Location: login.php?error=1');
    exit;
}
?>
