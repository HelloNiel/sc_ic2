<?php
include('../back-end/createcandidates.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="website icon" type="png" sizes="32x32" href="/img/logo/PTCI-logo.png">
    <title>Admin Page - Candidates</title>
    <link rel="stylesheet" href="../assets/css/createcandidates.css" />
    <link rel="stylesheet" href="../src/stelcom-bootswatch/bootstrap.min.css" />
</head>

<body>
    <div class="container-fluid d-flex p-0">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">Admin</div>
            <ul class="menu list-unstyled">
                <div class="menu-label">Home</div>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="#">Candidates</a></li>
                <li><a href="timer.php">Start/End</a></li>

                <div class="menu-label">Account</div>
                <li><a href="createcandidates.php">Create</a></li>
                <li><a href="viewcandidates.php">View</a></li>
            </ul>

            <div class="footer">
                <a href="/logout" class="text-decoration-none">Logout</a>
            </div>
        </div>

        <!-- Hamburger Icon -->
        <div class="hamburger" onclick="toggleSidebar()">
            &#9776;
        </div>

        <!-- Main Content -->
        <div class="mainbox flex-grow-1 d-flex justify-content-center align-items-center">
            <div class="form-box p-4 border rounded shadow-sm" style="max-width: 500px; width: 100%;">
                <div class="word text-center mb-4">
                    <h1>Student Council</h1>
                </div>

                <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
                    <div class="alert alert-success" role="alert">
                        <strong>Success!</strong> Registration was successful.
                    </div>
                <?php endif; ?>

                <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Error!</strong> <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                <?php endif; ?>

                <form action="?" method="POST" id="register" class="input-group" enctype="multipart/form-data">
                    <div class="field mb-3">
                        <input type="text" name="full_name" class="form-control" placeholder="Full Name" required />
                    </div>
                    <div class="field mb-3">
                        <input type="text" name="course" class="form-control" placeholder="Course" required />
                    </div>
                    <div class="field mb-3">
                        <input type="text" name="slogan" class="form-control" placeholder="Slogan" required />
                    </div>

                    <div class="field mb-3">
                        <label for="position" class="form-label">Position</label>
                        <select name="position" class="form-select" id="position" required>
                            <option value="president" selected>President</option>
                            <option value="vice_president">Vice President</option>
                        </select>
                    </div>

                    <div class="field mb-3">
                        <input type="file" name="image" class="form-control" accept="image/*" />
                    </div>

                    <button type="submit" class="btn btn-primary w-100" style="font-weight: 600">Submit</button>
                    <br />
                </form>

            </div>
        </div>
    </div>

    <script>
        // Hamburger Display
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('active');
        }
    </script>
</body>

</html>