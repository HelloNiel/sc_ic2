<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="website icon" type="png" sizes="32x32" href="../img/logo/PTCI-logo.png">
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
                        <button id="resetButton">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let timerInterval;
            let timeRemaining = parseInt(localStorage.getItem('timeRemaining')) || 10 * 60 * 60;
            let isTimerRunning = localStorage.getItem('isTimerRunning') === 'true';

            function updateTimerDisplay() {
                let hours = Math.floor(timeRemaining / 3600);
                let minutes = Math.floor((timeRemaining % 3600) / 60);
                let seconds = timeRemaining % 60;
                document.querySelector("#timer .timer-display").textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
            }

            function startCountdown() {
                if (!isTimerRunning) {
                    isTimerRunning = true;
                    localStorage.setItem('isTimerRunning', 'true');
                    localStorage.setItem('startTime', Date.now());
                    timerInterval = setInterval(() => {
                        if (timeRemaining > 0) {
                            timeRemaining--;
                            localStorage.setItem('timeRemaining', timeRemaining);
                            updateTimerDisplay();
                        } else {
                            clearInterval(timerInterval);
                            isTimerRunning = false;
                            localStorage.setItem('isTimerRunning', 'false');
                            alert('Vote is over!');
                        }
                    }, 1000);
                    document.getElementById("startButton").disabled = true;
                    document.getElementById("stopButton").disabled = false;
                }
            }

            function stopCountdown() {
                clearInterval(timerInterval);
                isTimerRunning = false;
                localStorage.setItem('isTimerRunning', 'false');
                document.getElementById("startButton").disabled = false;
                document.getElementById("stopButton").disabled = true;
            }

            function resetCountdown() {
                if (confirm("Are you sure you want to reset the timer?")) {
                    stopCountdown();
                    timeRemaining = 10 * 60 * 60;
                    localStorage.setItem('timeRemaining', timeRemaining);
                    localStorage.setItem('isTimerRunning', 'false');
                    updateTimerDisplay();
                }
            }

            document.getElementById("startButton").addEventListener("click", startCountdown);
            document.getElementById("stopButton").addEventListener("click", stopCountdown);
            document.getElementById("resetButton").addEventListener("click", resetCountdown);

            updateTimerDisplay();
            if (isTimerRunning) startCountdown();
        });
        // Hamburger Display
        function toggleSidebar() {
            const sidebar = document.querySelector(".sidebar");
            sidebar.classList.toggle("active");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>