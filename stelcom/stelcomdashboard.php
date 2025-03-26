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
        <link href="../src/stelcom-bootswatch/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <h3 class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Stelcom Dashboard</span>
                        </h3>
                        
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100">
                            <li class="nav-item w-100">
                                <a href="valid-accounts.php" class="nav-link text-white">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <span class="ms-1 d-none d-sm-inline">Valid Accounts</span>
                                </a>
                            </li>
                            
                            <li class="nav-item w-100">
                                <a href="unvalidated-accounts.php" class="nav-link text-white">
                                    <i class="bi bi-clock-fill me-2"></i>
                                    <span class="ms-1 d-none d-sm-inline">Unvalidated Accounts</span>
                                </a>
                            </li>
                            
                            <li class="nav-item w-100 mt-auto">
                                <a href="../back-end/stelcomlogout.php" class="nav-link text-white">
                                    <i class="bi bi-box-arrow-right me-2"></i>
                                    <span class="ms-1 d-none d-sm-inline">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col py-3">
                    <h1 class="mb-4">Welcome to Stelcom Dashboard</h1>
                    <p class="lead">Select an option from the sidebar to get started.</p>
                </div>
            </div>
        </div>
    </body>
</html>
