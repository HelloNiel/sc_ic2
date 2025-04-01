<?php
include('../partial/connection.php');

// Pagination
$limit = 7;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $schoolID = mysqli_real_escape_string($conn, $_POST['SchoolID']);
    $accountName = mysqli_real_escape_string($conn, $_POST['AccountName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['LastName']);
    $department = mysqli_real_escape_string($conn, $_POST['Department']); 
    
    // Insert the data into the database
    $insertQuery = "INSERT INTO `account_validation` (`student_id`, `account_name`, `last_name`, `department`, `created_at`) 
                    VALUES ('$schoolID', '$accountName', '$lastName', '$department', NOW())";
    
    if (mysqli_query($conn, $insertQuery)) {
        header("Location: ../user/private/registration.php?success=true");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
