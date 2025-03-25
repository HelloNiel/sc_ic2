<?php
session_start();
if (isset($_GET['error'])) {
    echo '<div style="color: red;">' . htmlspecialchars($_GET['error']) . '</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log-In</title>
    <link rel="stylesheet" href="../../assets/css/login.css" />
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="mainbox">
      <div class="form-box">
        <div class="word">
          <h1>Log In</h1>

        </div>
        <?php if (isset($_GET['error'])): ?>
              <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($_GET['error']); ?>
              </div>
            <?php endif; ?>
        <form action="../../back-end/validation/login_process.php" method="POST" id="login" class="input-group">
          <div class="field">
            <input
              type="number"
              name="SchoolID"
              class="input-field"
              placeholder="School ID"
              required
            />
            <input
              type="text"
              name="LastName"
              class="input-field"
              placeholder="Last Name"
              required
            />
            <button type="submit" class="submit-btn" style="font-weight: 600">
              Log In
            </button>
            <br />
            <hr style="color: #fff;"/>
            <a href="../public/home.php" class="back-btn mt-5">Go Back</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
