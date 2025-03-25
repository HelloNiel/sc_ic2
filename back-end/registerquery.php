<?php
include('../partial/connection.php');

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = mysqli_real_escape_string($conn, $_POST['SchoolID']);
    $account_name = mysqli_real_escape_string($conn, $_POST['AccountName']);
    $last_name = mysqli_real_escape_string($conn, $_POST['LastName']);    

    $sql = "INSERT INTO account_validation (student_id, account_name, last_name) 
            VALUES ('$student_id', '$account_name', '$last_name')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../user/private/registration.php?success=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
