<?php
session_start();
//the isset function to check username is already loged in and stored on the session
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
<?php $page='gallery-image-insert'; include 'includes/sidebar.php'?>
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="admindashboard.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="view_image.php">Images</a> <a href="new_image.php" class="current">Image Entry</a> </div>
    <h1 class="text-center">Elite's image upload Form <i class="fas fa-briefcase"></i></h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="fas fa-briefcase"></i> </span>
            <h5>Image  Details</h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" action="added_image.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <div id="form-wizard-1" class="step">

              <div class="control-group">
                  <label class="control-label">Enter Image Name</label>
                  <div class="controls">
                    <input id="name" class="form-control" type="text" name="name" />
                  </div>
                </div>
				<div class="control-group">
                 <label class="control-label">Upload Image</label>
                    <div class="controls">
                    <input type="file" id="photo" name="photo" >
                    <span  style="color: red;">(You can choose only JPG, JPEG, or PNG images with 300*300 pixels)</span>
                     </div>  
                </div>
                <!-- <script>
function imagePreview(input){
  if(input.files && input.files[0]){
    let file = input.files[0];
    let reader = new FileReader();
    let allowedImageTypes = ["image/jpeg", "image/png", "image/jpg"]; 
    if(!allowedImageTypes.includes(file.type)){
      error.innerHTML = "Allowed file types are: [.jpg, .png, .jpeg]"; 
      return false;
    }
    let img = new Image();
    img.onload = function(){
      document.querySelector('.file-info').innerHTML = fileInfo;
    };
    img.src = URL.createObjectURL(file);
  }
}
</script> -->
              </div>

              <div class="form-actions">
                <input id="back" class="btn btn-primary" type="reset" value="Back" />
                <input id="next" class="btn btn-primary" type="submit"  />
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
