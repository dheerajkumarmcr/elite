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
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
<img src="uploads/school-logo.jpg" width=90px height=1px;>
  <h1><a href="dashboard.html">Elite Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<?php include 'includes/topheader.php'?>


<!--sidebar-menu-->
<?php $page='announcement'; include 'includes/sidebar.php'?>
<!--sidebar-menu-->

<?php

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
  <h1><a href="dashboard.html">Elite Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<?php include 'includes/topheader.php'?>


<!--sidebar-menu-->
<?php $page='announcement'; include 'includes/sidebar.php'?>
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="admindashboard.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="popup.php">Popup</a> <a href="popup-entry.php" class="current">popup Entry</a> </div>
    <h1 class="text-center">Elite's popup image <i class="fa fa-folder-open"></i></h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          
          <div class="widget-content nopadding">
            <form id="form-wizard" action="added-popup.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div id="form-wizard" class="step">

              <div class="control-group">
                  <label class="control-label">Enter Name</label>
                  <div class="controls">
                    <input id="name" type="text" name="name" />
                  </div>
                </div>
                <div class="control-group">
                <label class="control-label">Upload Image</label>
                <div class="controls">
                <input type="file" id="photo" name="photo" accept=".jpg, .jpeg, .png" onchange="validateImage(event)">
                <span id="file-validation-message" style="color: red;">(You can choose only JPG, JPEG, or PNG images with 300*300 pixels.)</span>
                </div>
                </div>


              <div class="form-actions">
                <input id="next" class="btn btn-primary" type="submit" value="Proceed Next Step" />
                <div id="status"></div>
                
              </div>
              <div id="submitted"></div>
            </form>
          </div>
        </div><!--end of widget box-->
      </div><!--end of span 12 -->
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
<div id="footer" class="span12"> <?php echo date("Y");?> &copy; Elite</a> </div>
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
