<?php
 session_start();

 // Check if the user is logged in
 if (!isset($_SESSION['user_id'])) { 
     header("Location: adminlogin.php?error=You must log in first.");
     exit();
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="website icon" type="png" sizes="32x32" href="/img/logo/PTCI-logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - Timer Control</title>
    <link rel="stylesheet" href="../assets/css/timer.css" />
    <link rel="stylesheet" href="../src/stelcom-bootswatch/bootstrap.min.css">

    
</head>

<body>
    <div class="container my-5">
        <!-- Sidebar -->
          <div class="sidebar">
            <div class="logo">Admin</div>
                <ul class="menu list-unstyled">
                    <div class="menu-label">Information</div>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="candidates.php">Candidates</a></li>            
                    <div class="menu-label">Account</div>
                    <li><a href="createcandidates.php">Create Student Council</a></li>
                    <li><a href="createstelcom.php">Create Stelcom</a></li>
                    <li><a href="createadmin.php">Create Admin</a></li>


                    <div class="menu-label">Configuration</div>
                    <li><a href="#">Start/End</a></li>
                </ul>
            
                <div class="footer">
                    <a href="../back-end/adminlogout.php" class="text-decoration-none">Logout</a>
                </div>
            </div>
        <div class="hamburger" onclick="toggleSidebar()">
            &#9776;
    </div>

        <!-- Hamburger Icon -->
        <div class="hamburger" onclick="toggleSidebar()">
            &#9776;
        </div>

        <!-- Main Content Area -->
       <div class="content">
        <div class="content-wrapper">
            <div class="head">
                <h1>Start / End Election</h1>
            </div>
        
            <div class="timer" id="timer">
                <div class="timer-display">00:00:00</div>
                <div class="timer-controls">
                    <button id="startButton">Start</button>
                    <button id="stopButton" disabled>Stop</button>
                    <!--<button id="resetButton">Reset</button>-->
                </div>
            </div>
        </div>
       </div>
    </div>

    <script src="./js/timer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>