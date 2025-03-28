<?php
include ('../partial/connection.php');
session_start();

// check if user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: ../user/private/login.php?error=You must log in first");
    exit();
}

// check if form was submitted
if (!isset($_POST['submit_vote'])) {
    header("Location: ../user/private/vote.php?error=Invalid submission");
    exit();
}

// get the student ID from session
$student_id = $_SESSION['id'];

// Get POST data
$president_id = $_POST['president_id'] ?? '';
$vice_president_id = $_POST['vice_president_id'] ?? '';

// validate inputs
if (empty($president_id) || empty($vice_president_id)) {
    header("Location: ../user/private/vote.php?error=Please select both candidates");
    exit();
}

$conn->begin_transaction();

try {
    // Check if student has already voted
    $check_sql = "SELECT id FROM president_votes WHERE student_id = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        throw new Exception('You have already voted');
    }

    // Insert president vote
    $pres_sql = "INSERT INTO president_votes (student_id, candidate_id, voted_at) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($pres_sql);
    $stmt->bind_param("ii", $student_id, $president_id);
    $stmt->execute();

    // Insert vice president vote
    $vpres_sql = "INSERT INTO vice_president_votes (student_id, candidate_id, voted_at) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($vpres_sql);
    $stmt->bind_param("ii", $student_id, $vice_president_id);
    $stmt->execute();

    $conn->commit();
    
    header("Location: ../user/public/home.php?success=Your vote has been recorded successfully");
    exit();

} catch (Exception $e) {
    // Rollback on error
    $conn->rollback();
    header("Location: ../user/private/vote.php?error=" . urlencode($e->getMessage()));
    exit();
}

$conn->close();
?>
