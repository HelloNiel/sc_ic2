<?php
include('../partial/connection.php');
require '../vendor/autoload.php'; 

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;

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

// Set document title
$sheet->setCellValue('A1', 'Voting Results for President and Vice President');
$sheet->mergeCells('A1:C1');
$sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
$sheet->getStyle('A1')->getAlignment()->setHorizontal('center');

// width
$sheet->getColumnDimension('A')->setWidth(33.3);
$sheet->getColumnDimension('B')->setWidth(28.3); 
$sheet->getColumnDimension('C')->setWidth(28.3);

// space after the title
$sheet->getRowDimension(1)->setRowHeight(30);
$sheet->setCellValue('A2', ''); 
$sheet->getRowDimension(2)->setRowHeight(20);

// space before President's section
$sheet->setCellValue('A3', 'President Candidates Results');
$sheet->mergeCells('A3:C3');
$sheet->getStyle('A3')->getFont()->setBold(true)->setSize(12);
$sheet->getStyle('A3')->getAlignment()->setHorizontal('center');

// space after the section header
$sheet->getRowDimension(3)->setRowHeight(25);

// headers for president candidates
$sheet->setCellValue('A4', 'Full Name');
$sheet->setCellValue('B4', 'Course');
$sheet->setCellValue('C4', 'Votes Count');
$sheet->getStyle('A4:C4')->getFont()->setBold(true);
$sheet->getStyle('A4:C4')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

$sheet->getRowDimension(4)->setRowHeight(25);

// president candidates
$row_num = 5;
while ($row = mysqli_fetch_assoc($result_president)) {
    $sheet->setCellValue('A' . $row_num, $row['full_name']);
    $sheet->setCellValue('B' . $row_num, $row['course']);
    $sheet->setCellValue('C' . $row_num, $row['votes_count']);
    $sheet->getRowDimension($row_num)->setRowHeight(20); +
    $row_num++;
}

// space before vice president section
$row_num += 2; 
$sheet->setCellValue('A' . $row_num, 'Vice President Candidates Results');
$sheet->mergeCells('A' . $row_num . ':C' . $row_num);
$sheet->getStyle('A' . $row_num)->getFont()->setBold(true)->setSize(12);
$sheet->getStyle('A' . $row_num)->getAlignment()->setHorizontal('center');

// space after the section header
$sheet->getRowDimension($row_num)->setRowHeight(25);

// headers for vice president candidates
$row_num++;
$sheet->setCellValue('A' . $row_num, 'Full Name');
$sheet->setCellValue('B' . $row_num, 'Course');
$sheet->setCellValue('C' . $row_num, 'Votes Count');
$sheet->getStyle('A' . $row_num . ':C' . $row_num)->getFont()->setBold(true);
$sheet->getStyle('A' . $row_num . ':C' . $row_num)->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

// line break between headers and the data
$sheet->getRowDimension($row_num)->setRowHeight(25);

// president candidates
$row_num++;
while ($row = mysqli_fetch_assoc($result_vice_president)) {
    $sheet->setCellValue('A' . $row_num, $row['full_name']);
    $sheet->setCellValue('B' . $row_num, $row['course']);
    $sheet->setCellValue('C' . $row_num, $row['votes_count']);
    $sheet->getRowDimension($row_num)->setRowHeight(20);
    $row_num++;
}

// stelcom signature
$row_num += 2; 
$signature_cell = 'C' . $row_num;
$label_cell = 'C' . ($row_num + 1);

$sheet->setCellValue($signature_cell, '____________________________');
$sheet->getStyle($signature_cell)->getAlignment()->setHorizontal('center');

$sheet->setCellValue($label_cell, 'Stelcom Chairperson');
$sheet->getStyle($label_cell)->getAlignment()->setHorizontal('center');
$sheet->getStyle($label_cell)->getFont()->setBold(true);

mysqli_close($conn);

// create the excel file and  download
$writer = new Xlsx($spreadsheet);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="voting_results.xlsx"');
header('Cache-Control: max-age=0');
$writer->save('php://output');
exit();
?>
