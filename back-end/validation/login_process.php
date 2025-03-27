<?php
session_start();
include('../../partial/connection.php');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = mysqli_real_escape_string($conn, $_POST['SchoolID']);
    $last_name = mysqli_real_escape_string($conn, $_POST['LastName']);

    // xampp checker naga disconnect yawa
    if (!mysqli_ping($conn)) {
        die("MySQL connection lost. Please try again later.");
    }

    $sql = "SELECT id, student_id, account_name, last_name, created_at FROM valid_account WHERE student_id = ? AND last_name = ?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "ss", $student_id, $last_name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
            mysqli_stmt_bind_result($stmt, $id, $student_id, $account_name, $last_name, $created_at);
            mysqli_stmt_fetch($stmt);

            session_regenerate_id(true);

            $_SESSION['id'] = $id;
            $_SESSION['student_id'] = $student_id;
            $_SESSION['account_name'] = $account_name;
            $_SESSION['last_name'] = $last_name;
            $_SESSION['created_at'] = $created_at;

            header("Location: ../../user/public/voteinformation.php");
            exit();
        } else {
            header("Location: ../../user/private/login.php?error=Invalid School ID or Last Name!");
            exit();
        }
        
        mysqli_stmt_close($stmt);
    } else {
        die("Error preparing the SQL statement: " . mysqli_error($conn));
    }

    mysqli_close($conn);
}
?>
