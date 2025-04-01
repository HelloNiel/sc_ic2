<?php
include('../partial/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $slogan = mysqli_real_escape_string($conn, $_POST['slogan']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);

    // handler for image upload
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../user/private/uploads/"; 
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        
        // file checker & format identification
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif']; 
        
        if (in_array($imageFileType, $allowed_types)) {
            // Move the uploaded file to the server directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = basename($_FILES["image"]["name"]);
            } else {
                echo "Error uploading file.";
                exit();
            }
        } else {
            echo "Invalid file format. Only JPG, JPEG, PNG, and GIF are allowed.";
            exit();
        }
    }

    // Insert into the appropriate table based on selected position (President or Vice President)
    if ($position == 'president') {
        $sql = "INSERT INTO `president_candidates` (`full_name`, `course`, `slogan`, `image`, `created_at`) 
                VALUES ('$full_name', '$course', '$slogan', '$image', NOW())";
    } else if ($position == 'vice_president') {
        $sql = "INSERT INTO `vice_president_candidates` (`full_name`, `course`, `slogan`, `image`, `created_at`) 
                VALUES ('$full_name', '$course', '$slogan', '$image', NOW())";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: " . $_SERVER['PHP_SELF'] . "?success=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?><?php
include('../partial/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $slogan = mysqli_real_escape_string($conn, $_POST['slogan']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);

    // handler for image upload
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../user/private/uploads/"; 
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        
        // file checker & format identification
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif']; 
        
        if (in_array($imageFileType, $allowed_types)) {
            // Move the uploaded file to the server directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = basename($_FILES["image"]["name"]);
            } else {
                echo "Error uploading file.";
                exit();
            }
        } else {
            echo "Invalid file format. Only JPG, JPEG, PNG, and GIF are allowed.";
            exit();
        }
    }

    // Insert into the appropriate table based on selected position (President or Vice President)
    if ($position == 'president') {
        $sql = "INSERT INTO `president_candidates` (`full_name`, `course`, `slogan`, `image`, `created_at`) 
                VALUES ('$full_name', '$course', '$slogan', '$image', NOW())";
    } else if ($position == 'vice_president') {
        $sql = "INSERT INTO `vice_president_candidates` (`full_name`, `course`, `slogan`, `image`, `created_at`) 
                VALUES ('$full_name', '$course', '$slogan', '$image', NOW())";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: " . $_SERVER['PHP_SELF'] . "?success=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>