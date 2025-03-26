<?php include('../back-end/validation/processvalidation.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../src/stelcom-bootswatch/bootstrap.min.css" rel="stylesheet">
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
    <div class="card p-3">
        <h2 class="text-center mb-4">Voters Validation</h2>
        <form method="POST">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Student Number</th>
                            <th>Account Name</th>
                            <th>Last Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><input type="checkbox" class="student-checkbox" name="selected_ids[]" value="<?php echo $row['id']; ?>"></td>
                            <td><?php echo $row['student_id']; ?></td>
                            <td><?php echo $row['account_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" name="submit" class="btn btn-primary">Validate Selected</button>
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
        </form>
    </div>
</div>

<script>
    document.getElementById('select-all').addEventListener('click', function () {
        var checkboxes = document.querySelectorAll('.student-checkbox');
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = this.checked;
        });
    });
</script>

</body>
</html>
