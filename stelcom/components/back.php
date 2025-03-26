<?php
include ('../../partial/connection.php');

session_start();

// Check status
if (!isset($_SESSION['id'])) {
    header("Location: login.php?error=You must log in first.");
    exit();
}

$query = "SELECT fullname, course, partylist FROM president";
$result = mysqli_query($conn, $query);

?>