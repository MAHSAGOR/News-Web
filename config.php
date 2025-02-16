<?php
// Database connection settings
$servername = "localhost"; // Database host (e.g., "localhost")
$username = "root";        // Database username
$password = "";            // Database password (leave blank for XAMPP)
$dbname = "sgnews";       // Database name (replace with your database name)

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
