<?php
require_once('../partial/connection.php'); 

$total_possible_voters = 0;
$sql_valid_accounts = "SELECT COUNT(*) as total FROM valid_account";
$result = $conn->query($sql_valid_accounts);
if ($result) {
    $row = $result->fetch_assoc();
    $total_possible_voters = $row['total'];
}

// Get president votes and candidate info
$president_votes = array();
$sql_president = "SELECT pc.id, pc.full_name, pc.course, pc.slogan, pc.image, COUNT(pv.id) as vote_count 
                 FROM president_candidates pc
                 LEFT JOIN president_votes pv ON pc.id = pv.candidate_id
                 GROUP BY pc.id 
                 ORDER BY vote_count DESC";
$result = $conn->query($sql_president);
if ($result) {
    while($row = $result->fetch_assoc()) {
        $president_votes[$row['id']] = [
            'votes' => $row['vote_count'],
            'name' => $row['full_name'],
            'course' => $row['course'],
            'slogan' => $row['slogan'],
            'image' => $row['image']
        ];
    }
}

// Get vice president votes and candidate info
$vp_votes = array();
$sql_vp = "SELECT vpc.id, vpc.full_name, vpc.course, vpc.slogan, vpc.image, COUNT(vpv.id) as vote_count 
           FROM vice_president_candidates vpc
           LEFT JOIN vice_president_votes vpv ON vpc.id = vpv.candidate_id
           GROUP BY vpc.id
           ORDER BY vote_count DESC";
$result = $conn->query($sql_vp);
if ($result) {
    while($row = $result->fetch_assoc()) {
        $vp_votes[$row['id']] = [
            'votes' => $row['vote_count'],
            'name' => $row['full_name'],
            'course' => $row['course'],
            'slogan' => $row['slogan'],
            'image' => $row['image']
        ];
    }
}

$total_president_votes = array_sum($president_votes);
$total_vp_votes = array_sum($vp_votes);

echo json_encode([
    'total_possible_voters' => $total_possible_voters,
    'president_votes' => $president_votes,
    'vp_votes' => $vp_votes
]);
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Live Counter</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      .progress-bar, .progress-bar-vc {
        transition: all 0.5s ease-in-out !important;
        -webkit-transition: all 0.5s ease-in-out !important;
        -moz-transition: all 0.5s ease-in-out !important;
      }
      
      .progress-bar {
        transition: width 0.5s ease-in-out !important;
      }
      
      .progress-bar-vc {
        transition: width 0.5s ease-in-out !important;
      }
      
      .vote-increment {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #28a745;
        font-weight: bold;
        opacity: 0;
        transform: translateY(0);
        transition: 0.6s;      
      }

      @keyframes fadeUpAndOut {
        0% {
          opacity: 0;
          transform: translateY(0);
        }
        20% {
          opacity: 1;
          transform: translateY(-5px);
        }
        100% {
          opacity: 0;
          transform: translateY(-20px);
        }
      }

      .card {
        position: relative;
        overflow: visible;
        width: 300px;
        margin: 15px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        border-radius: 12px;
      }

      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15) !important;
      }

      .vote-count {
        transition: all 0.5s ease-in-out;
      }

      #president-cards, #vp-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
      }

      .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid rgba(0,0,0,0.1);
        padding: 15px;
      }

      .card-body {
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .card img {
        border-radius: 50%;
        margin-bottom: 15px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      }

      .progress {
        width: 100% !important;
        transform: none !important;
        margin-top: 15px;
        border-radius: 10px;
        overflow: hidden;
      }

      @media (max-width: 768px) {
        .card {
          width: calc(100% - 30px) !important;
          margin: 10px;
        }
        
        #president-cards, #vp-cards {
          padding: 10px;
        }
      }

      @media (min-width: 769px) and (max-width: 1200px) {
        .card {
          width: calc(50% - 30px);
        }
      }
    </style>
  </head>
  <body style="background: #fbf9e4">
    <nav
      class="navbar navbar-expand-md fixed-top py-3"
      style="padding: 0px; width: 100vw; background: #122c4f"
      data-bs-theme="dark"
    >
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#"
          ><span style="font-family: Poppins, sans-serif"
            >PTCI Student Council Election - LIVE COUNTER</span
          ></a
        ><button
          data-bs-toggle="collapse"
          class="navbar-toggler"
          data-bs-target="#navcol-5"
          style="font-family: Poppins, sans-serif"
        >
          <span class="visually-hidden" style="font-family: Poppins, sans-serif"
            >Toggle navigation</span
          ><span
            class="navbar-toggler-icon"
            style="font-family: Poppins, sans-serif"
          ></span>
        </button>
        <div
          class="collapse navbar-collapse"
          id="navcol-5"
          style="transform-origin: 0px; font-family: Poppins, sans-serif"
        >
          <ul
            class="navbar-nav ms-auto"
            style="font-family: Poppins, sans-serif"
          >
            <li class="nav-item" style="font-family: Poppins, sans-serif"></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="transform: translateY(130px)">
      <div class="row">
        <!-- President Section -->
        <div class="col-12 mb-4">
          <span class="d-flex justify-content-center"
            style="font-weight: bold; font-size: 31px; margin-bottom: 28px">
            PRESIDENT CANDIDATES
          </span>
          <!-- President Cards -->
          <div id="president-cards" class="container-fluid">
            <?php 
            // Sort president votes by count
            arsort($president_votes);
            foreach ($president_votes as $id => $candidate) { 
                $percentage = $total_possible_voters > 0 ? ($candidate['votes'] / $total_possible_voters) * 100 : 0;
            ?>
            <div class="card bg-light" style="width: 300px; box-shadow: 0px 0px 9px rgba(85, 89, 92, 0.32)">
                <div class="card-header"><span><?php echo htmlspecialchars($candidate['name']); ?></span></div>
                <div class="card-body" style="padding-right: 38px">
                    <img src="../user/private/uploads/<?php echo htmlspecialchars($candidate['image']); ?>" 
                         width="100" 
                         onerror="this.onerror=null; this.src='assets/img/unknown-img.jpg';" />
                    <div style="width: 100%">
                        <h4 class="card-title" style="margin-top: 5px; font-size: 27px"><?php echo htmlspecialchars($candidate['course']); ?></h4>
                        <p class="card-text" style="font-size: 14px"><?php echo htmlspecialchars($candidate['slogan']); ?></p>
                        <h4 class="card-title vote-count" style="font-size: 13px">
                            vote count: <?php echo $candidate['votes']; ?> of <?php echo $total_possible_voters; ?> possible voters
                        </h4>
                        <div class="progress" style="transform: translate(20px); width: 100%; margin-top: 14px; height: 19.9868px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" 
                                 aria-valuenow="<?php echo $percentage; ?>" aria-valuemin="0" aria-valuemax="100" 
                                 style="width: <?php echo $percentage; ?>%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
          </div>
        </div>

        <!-- Vice President Section -->
        <div class="col-12">
          <span class="d-flex justify-content-center"
            style="font-weight: bold; font-size: 31px; margin-bottom: 28px">
            VICE PRESIDENT CANDIDATES
          </span>
          <!-- Vice President Cards -->
          <div id="vp-cards" class="container-fluid">
            <?php 
            // Sort vice president votes by count
            arsort($vp_votes);
            foreach ($vp_votes as $id => $candidate) { 
                $percentage = $total_possible_voters > 0 ? ($candidate['votes'] / $total_possible_voters) * 100 : 0;
            ?>
            <div class="card bg-light" style="width: 300px; box-shadow: 0px 0px 9px rgba(85, 89, 92, 0.32)">
                <div class="card-header"><span><?php echo htmlspecialchars($candidate['name']); ?></span></div>
                <div class="card-body" style="padding-right: 38px">
                    <img src="../user/private/uploads/<?php echo htmlspecialchars($candidate['image']); ?>" 
                         width="100" 
                         onerror="this.onerror=null; this.src='assets/img/unknown-img.jpg';" />
                    <div style="width: 100%">
                        <h4 class="card-title" style="margin-top: 5px; font-size: 27px"><?php echo htmlspecialchars($candidate['course']); ?></h4>
                        <p class="card-text" style="font-size: 14px"><?php echo htmlspecialchars($candidate['slogan']); ?></p>
                        <h4 class="card-title vote-count" style="font-size: 13px">
                            vote count: <?php echo $candidate['votes']; ?> of <?php echo $total_possible_voters; ?> possible voters
                        </h4>
                        <div class="progress" style="transform: translate(20px); width: 100%; margin-top: 14px; height: 19.9868px;">
                            <div class="progress-bar-vc progress-bar-striped progress-bar-animated" role="progressbar" 
                                 aria-valuenow="<?php echo $percentage; ?>" aria-valuemin="0" aria-valuemax="100" 
                                 style="width: <?php echo $percentage; ?>%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <script>
    let previousVotes = {
        president: {},
        vp: {}
    };

    function showVoteIncrement(element) {
        const increment = document.createElement('div');
        increment.className = 'vote-increment';
        increment.textContent = '+1';
        element.appendChild(increment);
        setTimeout(() => increment.remove(), 600);
    }

    function createCard(candidate, totalVoters, type) {
        const votes = candidate.votes;
        const percentage = (votes / totalVoters * 100) || 0;
        const barClass = type === 'president' ? 'progress-bar' : 'progress-bar-vc';
        
        return `
            <div class="card bg-light" data-id="${candidate.id}" style="width: 300px; box-shadow: 0px 0px 9px rgba(85, 89, 92, 0.32)">
                <div class="card-header"><span>Unknown Candidate</span></div>
                <div class="card-body" style="padding-right: 38px">
                    <img src="assets/img/unknown-img.jpg" width="100" />
                    <div style="width: 100%">
                        <h4 class="card-title" style="margin-top: 5px; font-size: 27px">?????</h4>
                        <h4 class="card-title vote-count" style="font-size: 13px">
                            vote count: ${votes} of ${totalVoters} possible voters
                        </h4>
                        <div class="${barClass} progress-bar-striped progress-bar-animated" 
                             role="progressbar" 
                             aria-valuenow="${percentage}" 
                             aria-valuemin="0" 
                             aria-valuemax="100" 
                             style="width: ${percentage}%">
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    const evtSource = new EventSource('vote_stream.php');

    evtSource.onmessage = function(event) {
        const data = JSON.parse(event.data);
        
        const presidentContainer = document.getElementById('president-cards');
        let presidentHTML = '';
        data.president.forEach(candidate => {
            const oldVotes = previousVotes.president[candidate.id] || 0;
            presidentHTML += createCard(candidate, data.total_voters, 'president');
            previousVotes.president[candidate.id] = candidate.votes;
            
            if (candidate.votes > oldVotes) {
                const card = presidentContainer.querySelector(`[data-id="${candidate.id}"]`);
                if (card) showVoteIncrement(card);
            }
        });
        presidentContainer.innerHTML = presidentHTML;

        const vpContainer = document.getElementById('vp-cards');
        let vpHTML = '';
        data.vp.forEach(candidate => {
            const oldVotes = previousVotes.vp[candidate.id] || 0;
            vpHTML += createCard(candidate, data.total_voters, 'vp');
            previousVotes.vp[candidate.id] = candidate.votes;
            
            if (candidate.votes > oldVotes) {
                const card = vpContainer.querySelector(`[data-id="${candidate.id}"]`);
                if (card) showVoteIncrement(card);
            }
        });
        vpContainer.innerHTML = vpHTML;
    };

    evtSource.onerror = function(err) {
        console.error("EventSource failed:", err);
        evtSource.close();
        setTimeout(() => window.location.reload(), 2000);
    };
    </script>
  </body>
</html>
