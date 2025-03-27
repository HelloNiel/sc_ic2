<?php
include('../partial/connection.php');

// Pagination
$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Query la ang
$sql = "SELECT `id`, `student_id`, `account_name`, `last_name`, `created_at` 
        FROM `valid_account` 
        LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $sql);

$totalQuery = "SELECT COUNT(*) FROM valid_account";
$totalResult = mysqli_query($conn, $totalQuery);
$totalRecords = mysqli_fetch_row($totalResult)[0];

$totalPages = ceil($totalRecords / $limit);

mysqli_close($conn);
?>