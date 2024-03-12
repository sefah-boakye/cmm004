<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


