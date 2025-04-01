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
                        <button id="resetButton">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let startTime, timerInterval;
            let isRunning = false;

            function updateTimer() {
                const savedTime = localStorage.getItem('timer');
                if (savedTime) {
                    document.querySelector("#timer .timer-display").textContent = savedTime;
                }
            }

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

            function startTimer() {
                if (!isRunning) {
                    isRunning = true;
                    startTime = Date.now() - (parseInt(localStorage.getItem('elapsedTime')) || 0);
                    localStorage.setItem('startTime', startTime);
                    timerInterval = setInterval(function() {
                        const elapsedTime = Date.now() - startTime;
                        updateTimerDisplay(elapsedTime);
                        localStorage.setItem('elapsedTime', elapsedTime);
                    }, 1000);

                    document.getElementById("startButton").disabled = true;
                    document.getElementById("stopButton").disabled = false;
                }
            }

            function stopTimer() {
                clearInterval(timerInterval);
                isRunning = false;
                localStorage.setItem('timer', '00:00:00');
                document.getElementById("startButton").disabled = false;
                document.getElementById("stopButton").disabled = true;
            }

            function resetTimer() {
                clearInterval(timerInterval);
                isRunning = false;
                localStorage.setItem('timer', '00:00:00');
                localStorage.removeItem('startTime');
                localStorage.removeItem('elapsedTime');
                updateTimer();
                document.getElementById("startButton").disabled = false;
                document.getElementById("stopButton").disabled = true;
            }

            const savedStartTime = localStorage.getItem('startTime');
            if (savedStartTime) {
                const elapsedTime = Date.now() - savedStartTime;
                updateTimerDisplay(elapsedTime);
                isRunning = true;
                timerInterval = setInterval(function() {
                    const elapsedTime = Date.now() - savedStartTime;
                    updateTimerDisplay(elapsedTime);
                    localStorage.setItem('elapsedTime', elapsedTime);
                }, 1000);
                document.getElementById("startButton").disabled = true;
                document.getElementById("stopButton").disabled = false;
            }

            document.getElementById("startButton").addEventListener("click", startTimer);
            document.getElementById("stopButton").addEventListener("click", stopTimer);
            document.getElementById("resetButton").addEventListener("click", resetTimer);

            updateTimer();
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