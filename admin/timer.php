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

    
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
          <div class="sidebar">
            <div class="logo">Admin</div>
                <ul class="menu list-unstyled">
                    <div class="menu-label">Home</div>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="candidates.php">Candidates</a></li>
                    <li><a href="#">Start/End</a></li>
            
                    <div class="menu-label">Account</div>
                    <li><a href="createcandidates.php">Create</a></li>
                    <li><a href="viewcandidates.php">View</a></li>
                </ul>
            
                <div class="footer">
                    <a href="/logout" class="text-decoration-none">Logout</a>
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