<?php
// Include database connection
include_once 'db_connect.php';

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert user into database
$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
mysqli_query($conn, $query);

// Send confirmation email
$to = $email;
$subject = 'Registration Confirmation';
$message = 'Thank you for registering!';
$headers = 'From: sefaboakye41@gmail.com';
mail($to, $subject, $message, $headers);

// Redirect to login page
header('Location: login.php');
exit;
?>
