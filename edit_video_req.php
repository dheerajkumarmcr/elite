<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:../index.php');	
}
?>

<?php
if(isset($_POST['name'])){
    $name = $_POST["name"];  
    $id = $_POST["id"];
    $video_file_name = "";

    // Check if a video was uploaded
    if (isset($_FILES['video'])) {
        $video_file_name = $_FILES['video']['name'];
        $video_temp = $_FILES['video']['tmp_name'];
       
        // Move the uploaded video to a permanent location
        move_uploaded_file($video_temp, 'uploads/' . $video_file_name);
    }

    include 'dbcon.php';
    // Update query
    $qry = "UPDATE video SET name='$name', video_file_name='$video_file_name' WHERE id='$id'";
    $result = mysqli_query($con, $qry);

    if(!$result){
        echo "ERROR!!";
    } else {
        header('Location: view_video.php');
    }
} else {
    echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'>DASHBOARD</a></h3>";
}
?>
