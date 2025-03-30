<?php
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="website icon" type="png" sizes="32x32" href="/img/logo/PTCI-logo.png">
    <title>Admin Page - Register Stelcom</title>
    <link rel="stylesheet" href="../assets/css/createcandidates.css" />
    <link rel="stylesheet" href="../src/stelcom-bootswatch/bootstrap.min.css" />
</head>
<body>
    <div class="container-fluid d-flex p-0">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">Admin</div>
            <ul class="menu list-unstyled">
                    <div class="menu-label">Information</div>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="candidates.php">Candidates</a></li>            
                    <div class="menu-label">Account</div>
                    <li><a href="createcandidates.php">Create Student Council</a></li>
                    <li><a href="#">Create Stelcom</a></li>
                    <li><a href="createadmin.php">Create Admin</a></li>


                    <div class="menu-label">Configuration</div>
                    <li><a href="timer.php">Start/End</a></li>
            </ul>

            <div class="footer">
                <a href="../back-end/adminlogout.php" class="text-decoration-none">Logout</a>
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
                    <h1>Create Stelcom Account</h1>
                </div>

                <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
                    <div class="alert alert-success" role="alert">
                        <strong>Success!</strong> Admin account created successfully.
                    </div>
                <?php endif; ?>

                <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Error!</strong> <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                <?php endif; ?>

                <form action="../back-end/createstelcom.php" method="POST" id="register" class="input-group">
                    <div class="field mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required />
                    </div>
                    <div class="field mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required />
                    </div>
                    <div class="field mb-3">
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required />
                    </div>

                    <button type="submit" class="btn btn-primary w-100" style="font-weight: 600">Create Admin Account</button>
                    <br />
                </form>

            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('active');
        }
    </script>
</body>
</html>
