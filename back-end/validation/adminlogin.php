<?php
session_start();
require_once('../../partial/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['account_name']; 
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, account_name, password FROM admin_account WHERE account_name = ?");
    $stmt->bind_param("s", $username);  
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['account_name'] = $user['account_name'];

            header("Location: ../../admin/dashboard.php");
            exit();
        } else {
            // Invalid password
            header("Location: ../../admin/adminlogin.php?error=Invalid username or password");
            exit();
        }
    } else {
        // Invalid username
        header("Location: ../../admin/adminlogin.php?error=Invalid username or password");
        exit();
    }
}
?>
