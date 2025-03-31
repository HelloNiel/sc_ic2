<?php
include('../partial/connection.php');
require '../vendor/autoload.php'; 

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: stelcomlogin.php?error=Please login first");
    exit();
}

// president vote counts
$sql_president = "SELECT c.full_name, c.course, COUNT(v.id) AS votes_count
                  FROM president_candidates c
                  LEFT JOIN president_votes v ON c.id = v.candidate_id
                  GROUP BY c.id";
$result_president = mysqli_query($conn, $sql_president);

// vice President vote counts
$sql_vice_president = "SELECT c.full_name, c.course, COUNT(v.id) AS votes_count
                       FROM vice_president_candidates c
                       LEFT JOIN vice_president_votes v ON c.id = v.candidate_id
                       GROUP BY c.id";
$result_vice_president = mysqli_query($conn, $sql_vice_president);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'President Candidates Results');
$sheet->setCellValue('A3', 'Full Name');
$sheet->setCellValue('B3', 'Course');
$sheet->setCellValue('C3', 'Votes Count');

$row_num = 4;
while ($row = mysqli_fetch_assoc($result_president)) {
    $sheet->setCellValue('A' . $row_num, $row['full_name']);
    $sheet->setCellValue('B' . $row_num, $row['course']);
    $sheet->setCellValue('C' . $row_num, $row['votes_count']);
    $row_num++;
}

$row_num += 2;

$sheet->setCellValue('A' . $row_num, 'Vice President Candidates Results');
$row_num += 2;

$sheet->setCellValue('A' . $row_num, 'Full Name');
$sheet->setCellValue('B' . $row_num, 'Course');
$sheet->setCellValue('C' . $row_num, 'Votes Count');

$row_num++;
while ($row = mysqli_fetch_assoc($result_vice_president)) {
    $sheet->setCellValue('A' . $row_num, $row['full_name']);
    $sheet->setCellValue('B' . $row_num, $row['course']);
    $sheet->setCellValue('C' . $row_num, $row['votes_count']);
    $row_num++;
}

mysqli_close($conn);

// Ccrate the excel file and download
$writer = new Xlsx($spreadsheet);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="voting_results.xlsx"');
header('Cache-Control: max-age=0');
$writer->save('php://output');
exit();
?>
