<?php
$servername = "localhost";
$username = "root";
$password = ""; // By default, XAMPP has no password for the root user
$dbname = "thinkquotient";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
