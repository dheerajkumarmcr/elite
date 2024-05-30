
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
<link rel="stylesheet" href="../css/uniform.css" />
<link rel="stylesheet" href="../css/select2.css" />
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

<?php $page='join-us'; include 'includes/sidebar.php'?>
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="admindashboard.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="popup.php" class="current">Popup</a> </div>
    <h1 class="text-center">Elite's Popup Image <i class="fa fa-folder-open"></i></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">

      <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='fas fa-th'></i> </span>
            <h5>Popup Image</h5>
          </div>
          <div class='widget-content nopadding'>




<?php


if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    header('location:../index.php');
}

if (isset($_POST['name'])) {
    $name = $_POST["name"];

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
    $checkQuery = "SELECT Is_active FROM popup WHERE id='$id'";
    $checkResult = mysqli_query($con, $checkQuery);

    if ($checkResult) {
        $row = mysqli_fetch_assoc($checkResult);
        $currentActive = $row['Is_active'];

        // Update the modifiedby, modifiedon, Is_active, and Is_delete values based on the current state
        $modifiedBy = $adminId;
        $active = ($currentActive + 1); // Increase the active count

        $qry = "UPDATE popup SET 
        name='$name',  
        photo='$photo', 
        Is_active='$active'
        WHERE id='$id'";

        $result = mysqli_query($con, $qry);

    if (!$result) {
        // Error handling
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
        echo "<h3>Error occurred while updating popup image</h3>";
        echo "<p>Please Try Again</p>";
        echo "<a class='btn btn-warning btn-big'  href='edit-popup.php'>Go Back</a> </div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    } else {
        // Success
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
        echo "<h3>Popup Image has been updated!</h3>";
        echo "<p>The requested popup image is updated. Please click the button to go back.</p>";
        echo "<a class='btn btn-inverse btn-big'  href='popup.php'>Go Back</a> </div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    // If the request method is not POST, redirect to appropriate page
    header('location: index.php');
    exit();
}
?>

                                                               
                
             </form>
         </div>
</div></div>
</div>


<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date("Y");?> &copy; Developed By Elite</a> </div>
</div>
<?php
}
?>
<style>
#footer {
  color: white;
}
</style>

<!--end-Footer-part-->

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

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>