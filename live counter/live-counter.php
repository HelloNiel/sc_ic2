<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Live Counter</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body style="background: #fbf9e4">
    <nav class="navbar navbar-expand-md fixed-top py-3" style="padding: 0px; width: 100vw; background: #122c4f" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <span style="font-family: Poppins, sans-serif">PTCI Student Council Election - LIVE COUNTER</span>
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5" style="font-family: Poppins, sans-serif">
          <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon" style="font-family: Poppins, sans-serif"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-5" style="transform-origin: 0px; font-family: Poppins, sans-serif">
          <ul class="navbar-nav ms-auto" style="font-family: Poppins, sans-serif"></ul>
        </div>
      </div>
    </nav>
    <div class="container" style="transform: translateY(130px)">
      <div class="row">
        <!-- President Candidates Section -->
        <div class="col-md-6" style="width: 635px; padding: 25px">
          <span class="d-xxl-flex justify-content-xxl-center" style="font-weight: bold; font-size: 31px; margin-bottom: 28px">PRESIDENT CANDIDATES</span>

          <!-- Candidate 1 -->
          <div class="card bg-light mb-3" style="box-shadow: 0px 0px 9px rgba(85, 89, 92, 0.32)">
            <div class="card-header"><span>Candidate 1</span></div>
              <div class="card-body" style="padding-right: 38px">
              <img src="assets/img/unknown-img.jpg" width="100" />
              <div style="width: 100%">
                <h4 class="card-title" style="margin-top: 5px; font-size: 27px">Candidate 1 Name</h4>
                <h4 class="card-title" style="font-size: 13px">vote count:&nbsp;<span id="vote-count-1">Loading...</span></h4>
                <div class="progress" style="width: 100%; margin-top: 14px; height: 19.9868px;">
                  <div id="progress-bar-1" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Candidate 2 -->
          <div class="card bg-light mb-3" style="box-shadow: 0px 0px 9px rgba(85, 89, 92, 0.32)">
            <div class="card-header"><span>Candidate 2</span></div>
              <div class="card-body" style="padding-right: 38px">
              <img src="assets/img/unknown-img.jpg" width="100" />
              <div style="width: 100%">
                <h4 class="card-title" style="margin-top: 5px; font-size: 27px">Candidate 2 Name</h4>
                <h4 class="card-title" style="font-size: 13px">vote count:&nbsp;<span id="vote-count-2">Loading...</span></h4>
                <div class="progress" style="width: 100%; margin-top: 14px; height: 19.9868px;">
                  <div id="progress-bar-2" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
    function updateVoteCounts() {
        $.ajax({
            url: '/getcountvotes.php',  
            method: 'GET',
            success: function(response) {
                const data = JSON.parse(response);  

                const totalVotes = data.reduce((sum, candidate) => sum + candidate.vote_count, 0);

                // Loop through each candidate's vote data
                data.forEach(candidate => {
                    const votePercentage = (candidate.vote_count / totalVotes) * 100;

                    const progressBar = $('#progress-bar-' + candidate.candidate_id);
                    const voteCount = $('#vote-count-' + candidate.candidate_id);

                    progressBar.css('width', votePercentage + '%');
                    voteCount.text(candidate.vote_count);
                });
            },
            error: function() {
                console.error('Failed to fetch vote counts');
            }
        });
    }

    // Call the update function every 5 seconds
    setInterval(updateVoteCounts, 5000);

    updateVoteCounts();

    </script>
  </body>
</html>
