<?php
session_start();


session_unset();
session_destroy();

header("Location: ../user/private/login.php?message=You have been logged out successfully.");
exit();
?>
