<?php
session_start();
require_once('../../partial/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT id, username, password FROM stelcom_users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            header("Location: ../../stelcom/stelcomdashboard.php");
            exit();
        } else {
            header("Location: ../../stelcom/stelcomlogin.php?error=Invalid username or password");
            exit();
        }
    } else {
        header("Location: ../../stelcom/stelcomlogin.php?error=Invalid username or password");
        exit();
    }
}
?>