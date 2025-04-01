<?php
include('../partial/connection.php');

// Pagination
$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$sql = "SELECT `full_name`, `course`, `slogan`, `created_at`
        FROM `vice_president_candidates` 
        WHERE 1
        LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $sql);

$totalQuery = "SELECT COUNT(*) FROM `vice_president_candidates`";
$totalResult = mysqli_query($conn, $totalQuery);
$totalRecords = mysqli_fetch_row($totalResult)[0];

$totalPages = ceil($totalRecords / $limit);

mysqli_close($conn);
?>