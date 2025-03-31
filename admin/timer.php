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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
      rel="website icon"
      type="png"
      sizes="32x32"
      href="/img/logo/PTCI-logo.png"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page - Timer Control</title>
    <link rel="stylesheet" href="../assets/css/timer.css" />
    <link rel="stylesheet" href="../assets/bootstrap/bootswatch/bootstrap.min.css">
  </head>

  <style></style>

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
          <li><a href="#">Create Stelcom</a></li>
          <li><a href="createadmin.php">Create Admin</a></li>
          <div class="menu-label">Configuration</div>
          <li><a href="timer.php">Start/End</a></li>
        </ul>

        <div class="footer">
          <a href="/logout" class="text-decoration-none">Logout</a>
        </div>
      </div>
      <div class="hamburger" onclick="toggleSidebar()">&#9776;</div>

      <!-- Hamburger Icon -->
      <div class="hamburger" onclick="toggleSidebar()">&#9776;</div>

      <!-- Main Content Area -->
      <div class="content mt-5">
        <div class="content-wrapper">
          <div class="head">
            <h1>Start / End Election</h1>
          </div>

          <div class="timer mt-5" id="timer">
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

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        let startTime, timerInterval;
        let isRunning = false;

        // Update The Timer Dsplay Based On The Stored Value
        function updateTimer() {
          const savedTime = localStorage.getItem("timer");
          if (savedTime) {
            document.querySelector("#timer .timer-display").textContent =
              savedTime;
          }
        }

        // Function TO Update The timer
        function updateTimerDisplay(elapsedTime) {
          const totalSeconds = Math.floor(elapsedTime / 1000);
          const minutes = Math.floor(totalSeconds / 60);
          const seconds = totalSeconds % 60;
          const formattedMinutes = minutes < 10 ? "0" + minutes : minutes;
          const formattedSeconds = seconds < 10 ? "0" + seconds : seconds;
          const formattedTime = `${formattedMinutes}:${formattedSeconds}`;
          document.querySelector("#timer .timer-display").textContent =
            formattedTime;
          localStorage.setItem("timer", formattedTime);
        }

        // Function To Start The timer
        function startTimer() {
          if (!isRunning) {
            isRunning = true;
            startTime = Date.now();
            localStorage.setItem("startTime", startTime);
            timerInterval = setInterval(function () {
              const elapsedTime = Date.now() - startTime;
              updateTimerDisplay(elapsedTime);
            }, 1000);

            document.getElementById("startButton").disabled = true;
            document.getElementById("stopButton").disabled = false;
          }
        }

        // Function to Stop the timer
        function stopTimer() {
          clearInterval(timerInterval);
          isRunning = false;
          document.getElementById("startButton").disabled = false;
          document.getElementById("stopButton").disabled = true;
        }

        // Reset timer
        function resetTimer() {
          clearInterval(timerInterval);
          isRunning = false;
          document.getElementById("startButton").disabled = false;
          document.getElementById("stopButton").disabled = true;
          localStorage.setItem("timer", "00:00:00");
          localStorage.removeItem("startTime");
          updateTimer(); // Reset the display to "00:00:00"
        }

        // Event listeners
        document
          .getElementById("startButton")
          .addEventListener("click", startTimer);
        document
          .getElementById("stopButton")
          .addEventListener("click", stopTimer);
        document
          .getElementById("resetButton")
          .addEventListener("click", resetTimer);

        // Initialize timer display on page load
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
