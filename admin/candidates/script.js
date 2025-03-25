function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
}


// Initialize votes from localStorage, if available
let votes = JSON.parse(localStorage.getItem('votes')) || {
    candidate1: 0,
    candidate2: 0,
    candidate3: 0,
    candidate4: 0,
    candidate5: 0,
    candidate6: 0
};

// Function to update the vote counts on the page
function updateVotes() {
    document.getElementById('vote-count1').textContent = `Votes: ${votes.candidate1}`;
    document.getElementById('vote-count2').textContent = `Votes: ${votes.candidate2}`;
    document.getElementById('vote-count3').textContent = `Votes: ${votes.candidate3}`;
    document.getElementById('vote-count4').textContent = `Votes: ${votes.candidate4}`;
    document.getElementById('vote-count5').textContent = `Votes: ${votes.candidate5}`;
    document.getElementById('vote-count6').textContent = `Votes: ${votes.candidate6}`;
}

// Function to load votes when the admin page is loaded
function loadVotes() {
    updateVotes();
}

// Call this function to load votes on page load
loadVotes();

// Function to simulate vote updates (you can call this in the voter page)
function vote(candidateId) {
    if (candidateId in votes) {
        votes[candidateId]++;
        localStorage.setItem('votes', JSON.stringify(votes)); // Save updated votes in localStorage
        updateVotes(); // Update vote counts immediately on the admin page
    }
}
