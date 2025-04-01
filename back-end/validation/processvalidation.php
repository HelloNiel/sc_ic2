<?php
include('../partial/connection.php');

$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$totalQuery = "SELECT COUNT(*) FROM account_validation";
$totalResult = mysqli_query($conn, $totalQuery);
$totalRecords = mysqli_fetch_row($totalResult)[0];

$sql = "SELECT `id`, `student_id`, `account_name`, `last_name`, `department`, `created_at` 
        FROM `account_validation` 
        LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $sql);

$totalPages = ceil($totalRecords / $limit);

if (isset($_POST['submit'])) {
    if (isset($_POST['selected_ids']) && !empty($_POST['selected_ids'])) {
        $selectedIds = implode(",", $_POST['selected_ids']);
        
        $query = "SELECT `id`, `student_id`, `account_name`, `last_name`, `department`, `created_at`
                  FROM `account_validation` 
                  WHERE `id` IN ($selectedIds)";
        
        $selectedResult = mysqli_query($conn, $query);
        
        while ($row = mysqli_fetch_assoc($selectedResult)) {
            $id = $row['id'];
            $student_id = $row['student_id'];
            $account_name = $row['account_name'];
            $last_name = $row['last_name'];
            $department = $row['department']; 
            $created_at = $row['created_at'];

            $insertQuery = "INSERT INTO `valid_account` (`id`, `student_id`, `account_name`, `last_name`, `department`, `created_at`) 
                            VALUES ('$id', '$student_id', '$account_name', '$last_name', '$department', '$created_at')";
            mysqli_query($conn, $insertQuery);
        }

        $deleteQuery = "DELETE FROM `account_validation` WHERE `id` IN ($selectedIds)";
        mysqli_query($conn, $deleteQuery);
    }
}

mysqli_close($conn);
?>
