<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$Email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($Password, $row['password'])) {
            echo "Login successful";
            header("Location: index.html");
            // Redirect to a dashboard or homepage
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "User not found";
    }
}
?>
