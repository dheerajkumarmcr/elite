<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('location:../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elite Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../css/matrix-style.css" />
    <link rel="stylesheet" href="../css/matrix-media.css" />
    <link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
    <link href="../font-awesome/css/all.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

    <!--Header-part-->
    <div id="header">
        <img src="uploads/iconn.png" width=220px height=20px>
        <h1><a href="dashboard.html"> Elite Admin</a></h1>
    </div>
    <!--close-Header-part-->

    <!--top-Header-menu-->
    <?php include 'includes/topheader.php' ?>

    <!--sidebar-menu-->
    <?php $page = 'video_view';
    include 'includes/sidebar.php' ?>
    <!--sidebar-menu-->

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="admindashboard.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="view_video.php">Videos</a> <a href="new_video.php" class="current">Video Entry</a> </div>
            <h1 class="text-center">Elite Admin <i class="fas fa-users"></i></h1>
        </div>

        <form role="form" action="index.php" method="POST" enctype="multipart/form-data">
            <?php

            if ($_SERVER['REQUEST_METHOD'] =='POST' ) {
                // Check if 'name' field is set and not empty
                $name = isset($_POST["name"]) ? $_POST["name"] : "";
                $video_file_name = "";

                // Check if a video file was uploaded
                if (isset($_FILES['video']) && $_FILES['video']['error'] === UPLOAD_ERR_OK) {
                    $video_file_name = $_FILES['video']['name'];
                    $video_temp = $_FILES['video']['tmp_name'];

                    // Move the uploaded video file to a permanent location
                    move_uploaded_file($video_temp, 'uploads/' . $video_file_name);
                }

                // Database connection
                include 'dbcon.php';

                $qry = "INSERT INTO video (name, video_file_name) VALUES ('$name', '$video_file_name')";
                $result = mysqli_query($conn, $qry); //query executes

                if (!$result) {
                    echo "<div class='container-fluid'>";
                    echo "<div class='row-fluid'>";
                    echo "<div class='span12'>";
                    echo "<div class='widget-box'>";
                    echo "<div class='widget-title'> <span class='icon'> <i class='fas fa-info'></i> </span>";
                    echo "<h5>Error Message</h5>";
                    echo "</div>";
                    echo "<div class='widget-content'>";
                    echo "<div class='error_ex'>";
                    echo "<h1 style='color:maroon;'>Error 404</h1>";
                    echo "<h3>Error occurred while submitting the video</h3>";
                    echo "<p>Please Try Again</p>";
                    echo "<a class='btn btn-warning btn-big'  href='edit_video.php'>Go Back</a> </div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                } else {

                    echo "<div class='container-fluid'>";
                    echo "<div class='row-fluid'>";
                    echo "<div class='span12'>";
                    echo "<div class='widget-box'>";
                    echo "<div class='widget-title'> <span class='icon'> <i class='fas fa-info'></i> </span>";
                    echo "<h5>Message</h5>";
                    echo "</div>";
                    echo "<div class='widget-content'>";
                    echo "<div class='error_ex'>";
                    echo "<h1>Success</h1>";
                    echo "<h3>Video has been added!</h3>";
                    echo "<p>The requested Video are added to database. Please click the button to go back.</p>";
                    echo "<a class='btn btn-inverse btn-big'  href='view_video.php'>Go Back</a> </div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
            }
            ?>
        </form>
    </div>
    </div>
    </div>

    </div>
    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> <?php echo date("Y"); ?> &copy; Elite</a> </div>
    </div>

    <style>
        #footer {
            color: black;
        }
    </style>
    <!--end-Footer-part-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.ui.custom.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.validate.js"></script>
    <script src="../js/jquery.wizard.js"></script>
    <script src="../js/matrix.js"></script>
    <script src="../js/matrix.wizard.js"></script>
</body>

</html>
