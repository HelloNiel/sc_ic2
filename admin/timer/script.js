document.addEventListener("DOMContentLoaded", function () {
    let startTime, timerInterval;
    let isRunning = false;

    // Update the timer display based on stored value
    function updateTimer() {
        const savedTime = localStorage.getItem('timer');
        if (savedTime) {
            document.querySelector("#timer .timer-display").textContent = savedTime;
        }
    }

    // Function to update timer
    function updateTimerDisplay(elapsedTime) {
        const totalSeconds = Math.floor(elapsedTime / 1000);
        const minutes = Math.floor(totalSeconds / 60);
        const seconds = totalSeconds % 60;
        const formattedMinutes = minutes < 10 ? "0" + minutes : minutes;
        const formattedSeconds = seconds < 10 ? "0" + seconds : seconds;
        const formattedTime = `${formattedMinutes}:${formattedSeconds}`;
        document.querySelector("#timer .timer-display").textContent = formattedTime;
        localStorage.setItem('timer', formattedTime);
    }

    // Start timer
    function startTimer() {
        if (!isRunning) {
            isRunning = true;
            startTime = Date.now();
            localStorage.setItem('startTime', startTime);
            timerInterval = setInterval(function () {
                const elapsedTime = Date.now() - startTime;
                updateTimerDisplay(elapsedTime);
            }, 1000);

            document.getElementById("startButton").disabled = true;
            document.getElementById("stopButton").disabled = false;
        }
    }

    // Stop timer
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
        localStorage.setItem('timer', '00:00:00');
        localStorage.removeItem('startTime');
        updateTimer();  // Reset the display to "00:00:00"
    }

    // Event listeners
    document.getElementById("startButton").addEventListener("click", startTimer);
    document.getElementById("stopButton").addEventListener("click", stopTimer);
    document.getElementById("resetButton").addEventListener("click", resetTimer);

    // Initialize timer display on page load
    updateTimer();
});