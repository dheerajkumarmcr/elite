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

<?php $page='staff-management'; include 'includes/sidebar.php'?>


<?php
include 'dbcon.php';
$id=$_GET['id'];
$qry= "select * from staffs where id='$id'";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){
?> 

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="admindashboard.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="staffs.php" class="tip-bottom">Staffs</a> <a href="edit-staff-form.php" class="current">Edit Staff Records</a> </div>
  <h1 class="text-center">Update Staff's Detail <i class="fas fa-briefcase"></i></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Staff-Details</h5>
        </div>
        <div class="widget-content nopadding">

        <form action="edit-staff-req.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="fullname" value='<?php echo $row['fullname']; ?>' />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Qualification :</label>
              <div class="controls">
                <input type="text" class="span11" name="qualification" value='<?php echo $row['qualification']; ?>' />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Gender :</label>
              <div class="controls">
                <input type="text" class="span11" name="gender" value='<?php echo $row['gender']; ?>' />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Faculty Subject :</label>
              <div class="controls">
                <input type="text" class="span11" name="occupation" value='<?php echo $row['occupation']; ?>' />
              </div>
            </div>
            
          
        </div>
     
        
        <div class="widget-content nopadding">
          <div class="form-horizontal">
        </div>
        <div class="widget-content nopadding">
          
          </div>


        </div>
      </div>
	
    </div>

    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Staff-Details</h5>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
          <?php


if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    header('location:../index.php');
}

include 'dbcon.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the staff details based on the provided ID
    $query = "SELECT * FROM staffs WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $oldPhoneNumber = $row['contact'];
    } else {
        echo "Error fetching staff details.";
        exit();
    }
} else {
    echo "Staff ID not provided.";
    exit();
}


?>
<form method="post" action="edit-staff-form.php">
        <div class="control-group">
            <label class="control-label">Contact Number</label>
            <div class="controls">
                <div class="input-group">
                    <span class="input-group-addon">+91</span>
                    <input id="contact" type="text" name="contact" pattern="\d{10}" title="Please enter a valid 10-digit phone number" placeholder="9111111111" onchange="validatePhoneNumber(event)" value="<?php echo $oldPhoneNumber; ?>" required />
                </div>
            </div>
        </div>



    

    <script>
        // JavaScript code for any client-side validation or interaction
        function validatePhoneNumber(event) {
            // Your phone number validation code here
        }
    </script>

<script>
  document.getElementById('contact').addEventListener('input', function (event) {
    const inputValue = event.target.value;
    const hasSpecialCharacters = /[/*\-!@#$%^&*()_+":{}|<>?|]/.test(inputValue);
    const isValidInput = /^\d{0,10}$/.test(inputValue);

    if (hasSpecialCharacters || !isValidInput) {
      event.target.setCustomValidity('Please enter a valid 10-digit number without special characters');
    } else {
      event.target.setCustomValidity('');
    }
  });

  function validatePhoneNumber(event) {
    const input = event.target;
    const inputValue = input.value;
    const hasSpecialCharacters = /[/*\-!@#$%^&*()_+":{}|<>?|]/.test(inputValue);
    const isValidInput = /^\d{0,10}$/.test(inputValue);

    if (hasSpecialCharacters || !isValidInput) {
      alert('Please enter a valid 10-digit number without special characters');
      input.value = '';
    }
  }
</script>
            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" value='<?php echo $row['address']; ?>' />
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
    $query = "SELECT * FROM staffs WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $oldOccupation = $row['occupation'];
        $oldImageName = $row['image'];
        $oldImageUrl = 'uploads/' . $oldImageName;
    } else {
        echo "Error fetching staff details.";
        exit();
    }
} else {
    echo "Staff ID not provided.";
    exit();
}


?>



      

<?php


if (!isset($_SESSION['user_id']) || !isset($_SESSION['username'])) {
    header('location:../index.php');
}

include 'dbcon.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the staff details based on the provided ID
    $query = "SELECT * FROM staffs WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $oldImageName = $row['image'];
        $oldImageUrl = 'uploads/' . $oldImageName;
    } else {
        echo "Error fetching staff details.";
        exit();
    }
} else {
    echo "Staff ID not provided.";
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
              <button type="submit" class="btn btn-success">Update Staff Details</button>
              <div id="status"></div>
            </div>
            <div id="submitted"></div>
            </form>

          </div>

</div>
 

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date("Y");?> &copy; Elite</a> </div>
</div>
<?php
          }			
    ?> 

<style>
#footer {
  color: white;
}
</style>
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