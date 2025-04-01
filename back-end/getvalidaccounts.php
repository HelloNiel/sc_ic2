<?php
include('../partial/connection.php');

// search by id and last name
$searchTerm = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
// pagination
$limit = 5;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$sql = "SELECT `id`, `student_id`, `account_name`, `last_name`, `department`, `created_at`
        FROM `valid_account`
        WHERE `student_id` LIKE '%$searchTerm%' 
        OR `last_name` LIKE '%$searchTerm%'
        LIMIT $limit OFFSET $offset";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

// getting result
$totalQuery = "SELECT COUNT(*) FROM valid_account 
               WHERE `student_id` LIKE '%$searchTerm%' 
               OR `last_name` LIKE '%$searchTerm%'";
$totalResult = mysqli_query($conn, $totalQuery);
if (!$totalResult) {
    die('Query failed: ' . mysqli_error($conn));
}

$totalRecords = mysqli_fetch_row($totalResult)[0];
$totalPages = ceil($totalRecords / $limit);

mysqli_close($conn);
?>
