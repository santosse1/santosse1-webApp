<?php
$email = $_POST['email'];
$password = $_POST['password'];
session_start();


// Database connection here
$con = new mysqli("localhost", "root", "", "test");
if ($con->connect_error) {
    die("Failed to connect : " . $con->connect_error);
} else {
    $stmt = $con->prepare("SELECT * FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        // Use password_verify to check the hashed password
        if ($data['password'] === $password) {
            $_SESSION['email'] = $email; // Store email in session
            header("location:Demande-page.php");
            readfile('file:///C:/xampp/htdocs/application-web/Demande-page.php');
            exit();
        } else {
            echo '<script>alert("Invalid User or password")</script>';
        }
    } else {
        echo '<script>alert("Invalid User or password")</script>';
    }

}

?>