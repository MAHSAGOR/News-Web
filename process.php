<?php
// Database connection settings
/*$servername = "localhost"; // Database host (e.g., "localhost")
$username = "root";        // Database username
$password = "";            // Database password (leave blank for XAMPP)
$dbname = "sgnews";       // Database name (replace with your database name)

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}*/
include 'config.php';
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action']; // 'login' or 'register'

    if ($action === 'login') {
        // Login form handling
        $email = $connection->real_escape_string($_POST['email']);
        $password = $connection->real_escape_string($_POST['password']);

        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            // Fetch user data
            $user = $result->fetch_assoc();

            // Store user data in the session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];

            echo "Login successful!";
            header("location: /weblab/admin.php");
            exit;
        } else {
            echo "Invalid email or password.";
            header("location: /weblab/form.php");
            exit;
        }
    } elseif ($action === 'register') {
        // Registration form handling
        $name = $connection->real_escape_string($_POST['name']);
        $email = $connection->real_escape_string($_POST['email']);
        $password = $connection->real_escape_string($_POST['password']);
        $confirmPassword = $connection->real_escape_string($_POST['confirmPassword']);

        if ($password !== $confirmPassword) {
            echo "Passwords do not match.";
            exit;
        }

        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($connection->query($query) === TRUE) {
            echo "Registration successful!";
            header("location: /weblab/form.php");
            exit;
        } else {
            echo "Error: " . $connection->error;
        }
    }
}
?>
