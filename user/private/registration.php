<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="../../assets/css/login.css" />
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="mainbox">
      <div class="form-box">
        <div class="word">
          <h1>Register</h1>
        </div>

        <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
          <div class="alert alert-success" role="alert">
            Registration successful! You can now <a href="login.php" class="alert-link">log in</a>.
          </div>
        <?php endif; ?>

        <form action="../../back-end/registerquery.php" method="POST" id="register" class="input-group">
          <div class="field">
            <input type="number" name="SchoolID" class="input-field" placeholder="School ID" required />
            <input type="text" name="AccountName" class="input-field" placeholder="Account Name" required />
            <input type="text" name="LastName" class="input-field" placeholder="Last Name" required />

            <button type="submit" class="submit-btn" style="font-weight: 600">Register</button>
            <br />
            <hr style="color: #fff" />
            <p class="mb-3" style="color: #fff">
              Already have an account? <a href="login.php" class="login-btn mt-3">Log In</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
