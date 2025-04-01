<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/bootstrap/bootswatch/bootstrap.min.css" />
    <link rel="website icon" type="png" sizes="32x32" href="../img/logo/PTCI-logo.png">
  </head>
  <body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">

    <div class="card" style="width: 100%; max-width: 500px;">
      <div class="card-body">
        <div class="text-center">
          <h1 class="mb-4">Login</h1>
        </div>

        <?php if (isset($_GET['error'])): ?>
          <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($_GET['error']); ?>
          </div>
        <?php endif; ?>

        <form action="../back-end/validation/loginstelcom.php" method="POST" id="login">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required />
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required />
          </div>

          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <hr class="my-4" />
          <p class="text-center">
          Please contact the administrator if you do not have an account.     
          </p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
