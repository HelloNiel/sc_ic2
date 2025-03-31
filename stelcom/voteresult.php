<?php
include('../partial/connection.php');

session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: stelcomlogin.php?error=Please login first");
    exit();
}

// president vote count and candidate info
$sql_president = "SELECT c.full_name, c.course, COUNT(v.id) AS votes_count
                  FROM president_candidates c
                  LEFT JOIN president_votes v ON c.id = v.candidate_id
                  GROUP BY c.id";
$result_president = mysqli_query($conn, $sql_president);

// vice President vote count and candidate info
$sql_vice_president = "SELECT c.full_name, c.course, COUNT(v.id) AS votes_count
                       FROM vice_president_candidates c
                       LEFT JOIN vice_president_votes v ON c.id = v.candidate_id
                       GROUP BY c.id";
$result_vice_president = mysqli_query($conn, $sql_vice_president);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validated Voters Account</title>
    <link href="../assets/bootstrap/bootswatch/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<style>
    .container {
        position: absolute;
        top: 10%;
        left: 24%;
    }

    .btn-export {
        position: absolute;
        top: 5%;
        left: 24%;
        margin-left: 13px;
    }
</style>

<?php include 'components/sidebar.php'; ?>

    <!-- Export Button -->
    <div class="btn-export text-center mb-4">
        <form method="post" action="../back-end/exportexcel.php">
            <button type="submit" class="btn btn-success">Export to Excel</button>
        </form>
    </div>

<div class="container mt-4 main-content mb-5">

    <!-- President Table -->
    <div class="table-container">
        <div class="card p-3">
            <h2 class="text-center mb-4">President</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>Full Name</th>
                            <th>Course</th>
                            <th>Votes Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result_president)): ?>
                        <tr>
                            <td><?php echo $row['full_name']; ?></td>
                            <td><?php echo $row['course']; ?></td>
                            <td><?php echo $row['votes_count']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Vice President Table -->
    <div class="table-container mt-3">
        <div class="card p-3">
            <h2 class="text-center mb-4">Vice President</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>Full Name</th>
                            <th>Course</th>
                            <th>Votes Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result_vice_president)): ?>
                        <tr>
                            <td><?php echo $row['full_name']; ?></td>
                            <td><?php echo $row['course']; ?></td>
                            <td><?php echo $row['votes_count']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

</body>
</html>
