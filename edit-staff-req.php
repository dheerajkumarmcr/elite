<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    header('location:../index.php');
}

if (isset($_POST['fullname'])) {
    $fullname = $_POST["fullname"];
    $qualification = $_POST["qualification"];
    $gender = $_POST["gender"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $occupation = $_POST["occupation"];
    $id = $_POST["id"];
    $photo = "";

    if (isset($_FILES['photo'])) {
        $photo = $_FILES['photo']['name'];
        $photo_temp = $_FILES['photo']['tmp_name'];

        move_uploaded_file($photo_temp, 'uploads/' . $photo);
    }

    include 'dbcon.php';

    // Get the admin ID from the session
    $adminId = $_SESSION['username'];

    // Get the current date and time
    $modifiedOn = date('Y-m-d H:i:s');

    // Check if the image is removed
    $remove = isset($_POST['remove']) ? 1 : 0;

    // Check if the record exists and get the current active value
    $checkQuery = "SELECT Is_active FROM staffs WHERE id='$id'";
    $checkResult = mysqli_query($con, $checkQuery);

    if ($checkResult) {
        $row = mysqli_fetch_assoc($checkResult);
        $currentActive = $row['Is_active'];

        // Update the modifiedby, modifiedon, Is_active, and Is_delete values based on the current state
        $modifiedBy = $adminId;
        $active = ($currentActive + 1); // Increase the active count

        $qry = "UPDATE staffs SET 
                fullname='$fullname', 
                qualification='$qualification', 
                gender='$gender', 
                contact='$contact',  
                address='$address', 
                occupation='$occupation', 
                image='$photo', 
                modifiedby='$modifiedBy', 
                modifiedon='$modifiedOn', 
                Is_active='$active',
                Is_delete='$remove'
                WHERE id='$id'";

        $result = mysqli_query($con, $qry);

        if (!$result) {
            echo "ERROR!!";
        } else {
            header('Location: staffs.php');
        }
    } else {
        echo "Error checking the current Is_active value";
    }
} else {
    echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
}
?>
