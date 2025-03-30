<?php
session_start();
include('../partial/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_name = trim($_POST['account_name']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // validation
    if (empty($account_name) || empty($password) || empty($confirm_password)) {
        header("Location: ../admin/createadmin.php?error=All fields are required");
        exit();
    }

    // check if passwords match
    if ($password !== $confirm_password) {
        header("Location: ../admin/createadmin.php?error=Passwords do not match");
        exit();
    }

    $check_query = "SELECT id FROM admin_account WHERE account_name = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("s", $account_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("Location: ../admin/createadmin.php?error=Account name already exists");
        exit();
    }

    // hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // insert
    $insert_query = "INSERT INTO admin_account (account_name, password) VALUES (?, ?)";
    $stmt = $conn->prepare($insert_query);
    $stmt->bind_param("ss", $account_name, $hashed_password);

    if ($stmt->execute()) {
        header("Location: ../admin/createadmin.php?success=true");
        exit();
    } else {
        header("Location: ../admin/createadmin.php?error=Failed to create account");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>