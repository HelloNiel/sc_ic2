<?php
session_start();
require_once('../partial/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password !== $confirm_password) {
            header("Location: ../admin/createstelcom.php?error=Passwords do not match!");
            exit();
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO stelcom_users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);
        
        $stmt->execute();

        header("Location: ../admin/createstelcom.php?success=true");
        exit();

    } catch (Exception $e) {
        header("Location: ../admin/createstelcom.php?error=" . urlencode($e->getMessage()));
        exit();
    }
}
?>