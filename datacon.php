<?php
// Database connection parameters
$servername = "coffee-shop.mysql.database.azure.com";
$username = "tuan";
$password = "Tohru14617";
$database = "coffee-shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
