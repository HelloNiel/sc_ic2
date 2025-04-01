<?php
include ('../back-end/getpresident.php');


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
    <title>President Election Candidates</title>
    <link href="../assets/bootstrap/bootswatch/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="website icon" type="png" sizes="32x32" href="../img/logo/PTCI-logo.png">
    <style>
    .main-content {
        position: absolute;
        top: 50px;
        left: 25%;
    }
    </style>
</head>
<body>

<?php include 'components/sidebar.php'; ?>

<div class="container mt-4 main-content">
    <div class="table-container">
        <div class="card p-3">
            <h2 class="text-center mb-4">President Election Candidates</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>Full Name</th>
                            <th>Course</th>
                            <th>Slogan</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['full_name']; ?></td>
                            <td><?php echo $row['course']; ?></td>
                            <td><?php echo $row['slogan']; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php echo ($page == 1) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?php echo ($page == $totalPages) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

</body>
</html>
