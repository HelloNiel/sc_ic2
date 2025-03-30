<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - Login</title>
    <link rel="stylesheet" href="../src/stelcom-bootswatch/bootstrap.min.css" />
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="form-box p-4 border rounded shadow-sm" style="max-width: 500px; width: 100%;">
            <div class="word text-center mb-4">
                <h1>Admin Login</h1>
            </div>

            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger" role="alert">
                    <strong>Error!</strong> <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
            <?php endif; ?>

            <form action="../back-end/validation/adminlogin.php" method="POST" id="login" class="input-group">
                <div class="field mb-3 w-100">
                    <input type="text" name="account_name" class="form-control w-100" placeholder="Account Name" required />
                </div>
                <div class="field mb-3 w-100">
                    <input type="password" name="password" class="form-control w-100" placeholder="Password" required />
                </div>
                <button type="submit" class="btn btn-primary w-100" style="font-weight: 600">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
