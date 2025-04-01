<?php
    include('../partial/connection.php');

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" sizes="32x32" href="../img/logo/PTCI-logo.png">
    <title>Admin Page - Dashboard</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css" />
    <link rel="stylesheet" href="../assets/bootstrap/bootswatch/bootstrap.min.css">
</head>

<style>


</style>

<body>
    <div class="container-fluid d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">Admin</div>
            <ul class="menu list-unstyled">
                    <div class="menu-label">Information</div>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="candidates.php">Candidates</a></li>            
                    <div class="menu-label">Account</div>
                    <li><a href="createcandidates.php">Create Student Council</a></li>
                    <li><a href="createstelcom.php">Create Stelcom</a></li>
                    <li><a href="createadmin.php">Create Admin</a></li>


                    <div class="menu-label">Configuration</div>
                    <li><a href="timer.php">Start/End</a></li>
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
                <!-- President Candidates Container -->
                <div class="col-md-3">
                    <div class="stat-container">
                        <div class="stat-title">Total President Candidates</div>
                        <div class="stat-value">
                            <?php
                            $query = "SELECT COUNT(*) as count FROM president_candidates";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);
                            echo $row['count'];
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Vice President Candidates Container -->
                <div class="col-md-3">
                    <div class="stat-container">
                        <div class="stat-title">Total Vice President Candidates</div>
                        <div class="stat-value">
                            <?php
                            $query = "SELECT COUNT(*) as count FROM vice_president_candidates";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);
                            echo $row['count'];
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Total Voters Container -->
                <div class="col-md-3">
                    <div class="stat-container">
                        <div class="stat-title">Total Voters</div>
                        <div class="stat-value">
                            <?php
                            $query = "SELECT COUNT(*) as count FROM valid_account";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);
                            echo $row['count'];
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Total Votes Container -->
                <div class="col-md-3">
                    <div class="stat-container">
                        <div class="stat-title">Total Votes Cast</div>
                        <div class="stat-value">
                            <?php
                            $query = "SELECT COUNT(*) as count FROM president_votes";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($result);
                            echo $row['count'];
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- President Candidates Table -->
            <h3 class="mt-4 mb-3">PRESIDENT CANDIDATES</h3>
            <table class="table table-bordered border border-5">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Slogan</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT `id`, `full_name`, `course`, `slogan`, `created_at` FROM `president_candidates`";
                    $result = mysqli_query($conn, $query);
                    
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['full_name'] . "</td>";
                        echo "<td>" . $row['course'] . "</td>";
                        echo "<td>" . $row['slogan'] . "</td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- Vice President Candidates Table -->
            <h3 class="mt-5 mb-3">VICE PRESIDENT CANDIDATES</h3>
            <table class="table table-bordered border border-5">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Slogan</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT `id`, `full_name`, `course`, `slogan`, `created_at` FROM `vice_president_candidates`";
                    $result = mysqli_query($conn, $query);
                    
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['full_name'] . "</td>";
                        echo "<td>" . $row['course'] . "</td>";
                        echo "<td>" . $row['slogan'] . "</td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
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