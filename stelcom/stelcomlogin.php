<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css" />
    <link rel="stylesheet" href="../src/stelcom-bootswatch/bootstrap.min.css" />
  </head>
  <body>
    <div class="mainbox">
      <div class="form-box">
        <div class="word">
          <h1>Login</h1>
        </div>

        <?php if (isset($_GET['error'])): ?>
          <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($_GET['error']); ?>
          </div>
        <?php endif; ?>

        <form action="../back-end/validation/loginstelcom.php" method="POST" id="login" class="input-group">
          <div class="field">
            <input type="text" name="username" class="input-field" placeholder="Username" required />
            <input type="password" name="password" class="input-field" placeholder="Password" required />

            <button type="submit" class="submit-btn" style="font-weight: 600">Login</button>
            <br />
            <hr style="color: #fff" />
            <p class="mb-3" style="color: #fff">
              Don't have an account? <a href="createstelcom.php" class="login-btn mt-3">Register</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>