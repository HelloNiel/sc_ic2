<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="../../assets/bootstrap/bootswatch/bootstrap.min.css" />
  </head>
  <body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">

    <div class="card" style="width: 100%; max-width: 500px;">
      <div class="card-body">
        <div class="text-center">
          <h1 class="mb-4">Register</h1>
        </div>

        <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
          <div class="alert alert-success" role="alert">
            Registration successful! You can now <a href="login.php" class="alert-link">log in</a>.
          </div>
        <?php endif; ?>

        <form action="../../back-end/registerquery.php" method="POST" id="register">
          <div class="mb-3">
            <label for="schoolID" class="form-label">School ID</label>
            <input type="text" name="SchoolID" id="schoolID" class="form-control" placeholder="Enter School ID" required />
          </div>

          <div class="mb-3">
            <label for="accountName" class="form-label">Account Name</label>
            <input type="text" name="AccountName" id="accountName" class="form-control" placeholder="Enter Account Name" required />
          </div>

          <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" name="LastName" id="lastName" class="form-control" placeholder="Enter Last Name" required />
          </div>

          <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <hr class="my-4" />
        <p class="text-center">
          Already have an account? <a href="login.php" class="btn btn-link">Log In</a>
        </p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
