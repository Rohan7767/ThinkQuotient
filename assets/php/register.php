<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (Name, Email, Password) VALUES ('$Name', '$Email', '$Password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
