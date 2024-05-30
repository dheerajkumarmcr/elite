<?php
session_start();

if(!isset($_SESSION['user_id'])){
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

<?php include 'includes/topheader.php'?>

<?php $page='gallery'; include 'includes/sidebar.php'?>

<?php
include 'dbcon.php';

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $qry = "SELECT * FROM image WHERE id='$id'";
    $result = mysqli_query($conn, $qry);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Error fetching image Details.";
        exit();
    }
} else {
    echo "image ID not provided.";
    exit();
}
?> 

<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <a href="admindashboard.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a>
            <a href="view_image.php" class="tip-bottom">Image</a>
            <a href="edit-image.php" class="current">Edit Image</a>
        </div>
        <h1 class="text-center">Update Image Details <i class="fas fa-briefcase"></i></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-content nopadding">
                        <form action="edit_image_req.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Name :</label>
                                <div class="controls">
                                    <input type="text" class="span11" name="name" value='<?php echo isset($row['name']) ? $row['name'] : ''; ?>' />
                                </div>
                            </div>

                            <?php


if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    header('location:../index.php');
}

include 'dbcon.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the staff details based on the provided ID
    $query = "SELECT * FROM image WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $oldImageName = $row['image'];
        $oldImageUrl = 'uploads/' . $oldImageName;
    } else {
        echo "Error fetching Popup Details.";
        exit();
    }
} else {
    echo "popup name not provided.";
    exit();
}


?>


<div class="control-group">
    <label class="control-label">Edit Image</label>
    <div class="controls">
       
        <span id="oldImageName"><?= $oldImageName ?></span>
        <img src="<?= $oldImageUrl ?>" alt="Old Image" style="width: 50px; height: 50px;" onclick="editImage('<?= $oldImageUrl ?>')">
        
        
        <input type="file" id="photo" name="photo" accept=".jpg, .jpeg, .png" onchange="validateImage(event)">
        <span id="file-validation-message" style="color: red;">(You can choose only JPG, JPEG, or PNG images with 300*300 pixels)</span>
    </div>
</div>
            <div class="form-actions text-center">
           
             <input type="hidden" name="id" value="<?php echo $row['id'];?>">
              <button type="submit" class="btn btn-success">Update Image</button>
              <div id="status"></div>
            </div>
            <div id="submitted"></div>
       



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="row-fluid">
    <div id="footer" class="span12"> <?php echo date("Y");?> &copy; Elite</div>
</div>
<script>
function imagePreview(input){
  if(input.files && input.files[0]){
    let file = input.files[0];
    let reader = new FileReader(
    let allowedImageTypes = ["image/jpeg", "image/png"],
    if(!allowedImageTypes.includes(file.type)){
      error.innerHTML = "Allowed file type's are: [ .jpg .png ]",
      return false;
    }
    if(file.size > 300 * 300 * 3){
      error.innerHTML = "Image size should not exceed 300x300 pixels",
      return false;
    }
    let img = new Image(
    img.onload = function(){
      if(this.width != 300 || this.height != 300) {
        error.innerHTML = "Image size should be exactly 300x300 pixels",
        return false;
      }
      document.querySelector('.file-info').innerHTML = fileInfo;
    }
    img.src = URL.createObjectURL(file);
  }
}</script>
<style>
    #footer {
        color: white;
    }
</style>

<script src="../js/excanvas.min.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flot.min.js"></script> 
<script src="../js/jquery.flot.resize.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/fullcalendar.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/matrix.form_validation.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 

</body>
</html>
