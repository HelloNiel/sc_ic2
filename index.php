<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Selection</title>
    <link href="./src/stelcom-bootswatch/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #f8f9fa;">
    
    <div class="container text-center">
        <h1 class="mb-4">PTCI Student Council VMS</h1>

        <form id="loginForm" action="#" method="post">
            <div class="form-group">
                <label for="role">Select Login Role:</label><br><br>

                <!-- Buttons for Voter, Admin, and Stelcom -->
                <button type="button" class="btn btn-primary btn-lg" onclick="setFormAction('voter')">Voter</button>
                <button type="button" class="btn btn-danger btn-lg" onclick="setFormAction('admin')">Admin</button>
                <button type="button" class="btn btn-success btn-lg" onclick="setFormAction('stelcom')">Stelcom</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function setFormAction(role) {
            const form = document.getElementById('loginForm');
            if (role === 'voter') {
                form.action = 'user/private/login.php'; 
            } else if (role === 'admin') {
                form.action = 'admin/adminlogin.php'; 
            } else if (role === 'stelcom') {
                form.action = 'stelcom/stelcomlogin.php'; 
            }
            form.submit();
        }
    </script>

</body>
</html>
