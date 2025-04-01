<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: stelcomlogin.php?error=Please login first");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stelcom Dashboard</title>
        <link href="../assets/bootstrap/bootswatch/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="website icon" type="png" sizes="32x32" href="../img/logo/PTCI-logo.png">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <?php include 'components/sidebar.php'; ?>

                <div class="col py-5 mx-5">
                    <h1 class="mb-4">Welcome to Stelcom Dashboard</h1>
                    <p class="lead">Select an option from the sidebar to get started.</p>
                </div>
            </div>
        </div>
    </body>
</html>
