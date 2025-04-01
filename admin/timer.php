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
            let timeRemaining = parseInt(localStorage.getItem('timeRemaining')) || 10 * 60 * 60; // Default 10 hours if not set
            let lastUpdateTime = Date.now();
            let isTimerRunning = false;

            function updateTimerDisplay(elapsedTime) {
                const totalSeconds = Math.floor(elapsedTime / 1000);
                let minutes = Math.floor(totalSeconds / 60);
                let seconds = totalSeconds % 60;
                let hours = Math.floor(minutes / 60);
                minutes = minutes % 60;

                const formattedHours = hours < 10 ? "0" + hours : hours;
                const formattedMinutes = minutes < 10 ? "0" + minutes : minutes;
                const formattedSeconds = seconds < 10 ? "0" + seconds : seconds;
                const formattedTime = `${formattedHours}:${formattedMinutes}:${formattedSeconds}`;

                document.querySelector("#timer .timer-display").textContent = formattedTime;
                localStorage.setItem('timer', formattedTime);
            }

            function startCountdown() {
                if (!isTimerRunning) {
                    isTimerRunning = true;
                    timerInterval = requestAnimationFrame(countdownStep);
                    document.getElementById("startButton").disabled = true;
                    document.getElementById("stopButton").disabled = false;
                }
            }

            function countdownStep() {
                const now = Date.now();
                const elapsed = now - lastUpdateTime;

                if (timeRemaining > 0) {
                    timeRemaining -= elapsed / 1000; // Decrease time based on the frame time
                    updateTimerDisplay(timeRemaining * 1000); // Update in milliseconds
                    localStorage.setItem('timeRemaining', Math.floor(timeRemaining)); // Save to local storage

                    lastUpdateTime = now; // Update last update time
                    timerInterval = requestAnimationFrame(countdownStep); // Keep the countdown running
                } else {
                    cancelAnimationFrame(timerInterval); // Stop the countdown when it reaches 0
                    isTimerRunning = false;
                    alert('Time is up!');
                    document.getElementById("startButton").disabled = false;
                    document.getElementById("stopButton").disabled = true;
                }
            }

            function stopCountdown() {
                cancelAnimationFrame(timerInterval); // Stop the countdown
                isTimerRunning = false;
                document.getElementById("startButton").disabled = false;
                document.getElementById("stopButton").disabled = true;
            }

            function resetCountdown() {
                const confirmReset = confirm("Are you sure you want to reset the timer?");
                if (confirmReset) {
                    stopCountdown();
                    timeRemaining = 10 * 60 * 60; // Reset to 10 hours
                    localStorage.setItem('timeRemaining', timeRemaining);
                    localStorage.setItem('timer', '10:00:00');
                    updateTimerDisplay(timeRemaining * 1000);
                }
            }

            // Load saved time if available and the timer is running
            updateTimerDisplay(timeRemaining * 1000); // Show initial 10 hours
            if (localStorage.getItem('timeRemaining') && !isTimerRunning) {
                // If the timer is running when the page reloads, continue the countdown
                startCountdown();
            }

            document.getElementById("startButton").addEventListener("click", startCountdown);
            document.getElementById("stopButton").addEventListener("click", stopCountdown);
            document.getElementById("resetButton").addEventListener("click", resetCountdown);
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