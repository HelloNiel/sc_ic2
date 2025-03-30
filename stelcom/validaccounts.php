<?php

include ('../back-end/getvalidaccounts.php');


session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: stelcomlogin.php?error=Please login first");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validated Voters Account</title>
    <link href="../assets/bootstrap/bootswatch/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .pagination-container {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-top: 20px;
        }
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

<div class="container mt-4 main-content">
    <div class="table-container">
        <div class="card p-3">
            <h2 class="text-center mb-4">Validated Voters Account</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Student Number</th>
                            <th>Account Name</th>
                            <th>Last Name</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['student_id']; ?></td>
                            <td><?php echo $row['account_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination-container">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item <?php echo ($page == 1) ? 'disabled' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a>
                        </li>
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                        <?php endfor; ?>
                        <li class="page-item <?php echo ($page == $totalPages) ? 'disabled' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

</body>
</html>
