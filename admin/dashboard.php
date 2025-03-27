<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="website icon" type="png" sizes="32x32" href="/img/logo/PTCI-logo.png">
    <title>Admin Page - Dashboard</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
                <div class="logo">Admin</div>
                <ul class="menu list-unstyled">
                    <div class="menu-label">Home</div>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="candidates.php">Candidates</a></li>
                    <li><a href="timer.php">Start/End</a></li>
            
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


        <!-- Content Area -->
        <div class="content flex-fill">
            <div class="row">
                <!-- Container 1 -->
                <div class="col-md-4">
                    <div class="stat-container">
                        <div class="stat-title">Total Candidates</div>
                        <div class="stat-value">100</div>
                    </div>
                </div>

                <!-- Container 2 -->
                <div class="col-md-4">
                    <div class="stat-container">
                        <div class="stat-title">Total Votes</div>
                        <div class="stat-value">1200</div>
                    </div>
                </div>

                <!-- Container 3 -->
                <div class="col-md-4">
                    <div class="stat-container">
                        <div class="stat-title">Total Voter's</div>
                        <div class="stat-value">3690</div>
                    </div>
                </div>
            </div>

            <!-- Table for Candidates Data -->
            <table class="table table-bordered border border-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Candidates</th>
                        <th scope="col">Department</th>
                        <th scope="col">Party-list</th>
                        <th scope="col">Position</th>
                        <th scope="col">Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>BAST</td>
                        <td>DS</td>  
                        <td>Vice-pres</td>
                        <td>2st year</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>ACT</td>
                        <td>N/A</td>
                        <td>Representative</td>
                        <td>2st year</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Larry the Bird</td>
                        <td>BSIT</td>
                        <td>FreeWiFi</td>
                        <td>Presedent</td>
                        <td>1st year</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
    function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
    }
</script>

</html>