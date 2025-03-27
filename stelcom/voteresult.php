<?php
include('../partial/connection.php');

// Pagination
$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Query la ang
$sql = "SELECT `fullname`, `course`, `partylist`
        FROM `vice_president` 
        LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $sql);

$totalQuery = "SELECT COUNT(*) FROM valid_account";
$totalResult = mysqli_query($conn, $totalQuery);
$totalRecords = mysqli_fetch_row($totalResult)[0];

$totalPages = ceil($totalRecords / $limit);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validated Voters Account</title>
    <link href="../src/stelcom-bootswatch/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>

<style>
    .main-content {
        position: absolute;
        top: 50px;
        left: 25%;
    }
</style>


<?php include 'components/sidebar.php'; ?>

<div class="container mt-4 main-content mb-5">
    <div class="table-container">
        <div class="card p-3">
            <h2 class="text-center mb-4">President</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>Full Name</th>
                            <th>Course</th>
                            <th>Party List</th>
                            <th>Votes count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['course']; ?></td>
                            <td><?php echo $row['partylist']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

    <div class="table-container mt-5">
        <div class="card p-3">
            <h2 class="text-center mb-4">Vice President</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>Full Name</th>
                            <th>Course</th>
                            <th>Party List</th>
                            <th>Votes count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['course']; ?></td>
                            <td><?php echo $row['partylist']; ?></td>
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
