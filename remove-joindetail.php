<?php
session_start();
// the isset function to check if the user is already logged in and stored on the session
if (!isset($_SESSION['user_id'])) {
    header('location:../index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include 'dbcon.php';

    $qry = "DELETE FROM booking WHERE id = $id";
    $result = mysqli_query($con, $qry);

    if ($result) {
        echo "DELETED";
        header('Location: join.php');
    } else {
        echo "ERROR!!";
    }
}
?>
