<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    header('location:../index.php');
}

// Check if the staff ID is provided in the URL
if (isset($_GET['id'])) {
    $imageId = $_GET['id'];

    // Include the database connection file
    include 'dbcon.php';

    // Query to delete the image from the staffs table
    $deleteQuery = "UPDATE staffs SET image='' WHERE id='$imageId'";
    $deleteResult = mysqli_query($con, $deleteQuery);

    // Check if the query was successful
    if ($deleteResult) {
        echo "Image deleted successfully";
        header('Location: staffs.php');
    } else {
        echo "Error deleting image";
    }
} else {
    echo "Staff ID not provided";
}
?>