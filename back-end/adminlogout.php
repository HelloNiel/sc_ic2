<?php
    session_start();


    session_unset();
    session_destroy();

    header("Location: ../admin/adminlogin.php?message=You have been logged out successfully.");
    exit();
?>
