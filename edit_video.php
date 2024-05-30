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
    <link rel="stylesheet" href="../css/fullcalendar.css" />
    <link rel="stylesheet" href="../css/matrix-style.css" />
    <link rel="stylesheet" href="../css/matrix-media.css" />
    <link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
    <link href="../font-awesome/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/jquery.gritter.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

    <div id="header">
    <img src="uploads/school-logo.jpg" width=90px height=1px;>
        <h1><a href="dashboard.html">Elite Admin</a></h1>
    </div>

    <?php include 'includes/topheader.php' ?>

    <?php $page = 'video_view';
    include 'includes/sidebar.php' ?>

    <?php
    include 'dbcon.php';

    // Check if the 'id' parameter is set in the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];


        $qry = "SELECT * FROM video WHERE id='$id'";
        $result = mysqli_query($conn, $qry);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        } else {
            echo "Error fetching video details.";
            exit();
        }
    } else {
        echo "Video ID not provided.";
        exit();
    }
    ?>

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">
                <a href="admindashboard.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a>
                <a href="view_video.php" class="tip-bottom">Videos</a>
                <a href="edit-video.php" class="current">Edit Video</a>
            </div>
            <h1 class="text-center">Update Video Details <i class="fas fa-briefcase"></i></h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span6">
                    <div class="widget-box">
                        <div class="widget-content nopadding">
                            <form action="edit_video_req.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" name="name" value='<?php echo isset($row['name']) ? $row['name'] : ''; ?>' />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Old Video</label>
                                    <div class="controls">
                                        <span id="oldVideoName"><?= $row['video_file_name'] ?></span>
                                        <!-- Assuming $row['video_file_name'] contains the video file name -->
                                        <video controls>
                                            <source src="uploads/<?= $row['video_file_name'] ?>" type="video/mp4">
                                            
                                        </video>
                                        <a href="uploads/<?= $row['video_file_name'] ?>" download>Download Old Video</a>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Edit Video</label>
                                    <div class="controls">
    <input type="file" id="video" name="video" accept=".mp4," onchange="validateVideo(event)">
    <span id="video-error" class="text-danger"></span>
</div>

                                </div>
                                <script>
                                    function validateVideo(input){
    if(input.files && input.files[0]){
        let file = input.files[0];
        let allowedVideoTypes = ["video/mp4"]; // Update the allowed video types
        if(!allowedVideoTypes.includes(file.type)){
            document.getElementById("video-error").textContent = "Allowed video type is: [.mp4]"; // Update error message for allowed types
            return false;
        } else {
            document.getElementById("video-error").textContent = ""; // Clear error message if validation succeeds
        }
    }
}
</script>

                                <div class="form-actions text-center">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-success">Update Video</button>
                                    <div id="status"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="row-fluid">
        <div id="footer" class="span12"> <?php echo date("Y"); ?> &copy; Elite</div>
    </div>

    <!-- JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/matrix.js"></script>
    <script src="../js/jquery.validate.js"></script>
    <script src="../js/matrix.form_validation.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/matrix.tables.js"></script>
</body>

</html>
