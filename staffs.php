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
<img src="uploads/school-logo.jpg" width=90px height=1px;>
  <h1><a href="dashboard.html">Elite Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<?php include 'includes/topheader.php'?>

<?php $page='staff-management'; include 'includes/sidebar.php'?>
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="admindashboard.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="staffs.php" class="current">Staff Members</a> </div>
    <h1 class="text-center">Elite's Staff List <i class="fas fa-briefcase"></i></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <a href="staffs-entry.php"><button class="btn btn-primary">Add Staff Members</button></a>
      <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='fas fa-th'></i> </span>
            <h5>Staff table</h5>
          </div>
          <div class='widget-content nopadding'>
	  
	  <?php

include "dbcon.php";
$qry = "SELECT * FROM staffs";
$result = mysqli_query($conn, $qry);
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



       
                        <div class='widget-content nopadding'>
                            <table class='table table-bordered table-hover'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fullname</th>
                                        <th>Qualification</th>
                                        <th>Gender</th>
                                        <th>Occupation</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
while ($row = mysqli_fetch_array($result)) {
    echo "<tr class=''>
            <td><div class='text-center'>" . $row['id'] . "</div></td>
            <td><div class='text-center'>" . $row['fullname'] . "</div></td>
            <td><div class='text-center'>" . $row['qualification'] . "</div></td>
            <td><div class='text-center'>" . $row['gender'] . "</div></td>
            <td><div class='text-center'>" . $row['occupation'] . "</div></td>
            <td><div class='text-center'>" . $row['email'] . "</div></td>
            <td><div class='text-center'>" . $row['address'] . "</div></td>
            <td><div class='text-center'>" . $row['contact'] . "</div></td>
            <td><div class='text-center'><img src='uploads/" . $row['image'] . "' alt='Staff Image' style='width: 50px; height: 50px;'></div></td>
            <td><div class='text-center'></a> <a href='removestaffimg.php?id=".$row['id']."' style='color:#F66;'><i class='fas fa-trash'></i> Remove Image</a></div></td>
            <td><div class='text-center'><a href='edit-staff-form.php?id=".$row['id']."'><i class='fas fa-edit' style='color:#28b779'></i> Edit |</a> <a href='remove-staff.php?id=".$row['id']."' style='color:#F66;'><i class='fas fa-trash'></i> Remove</a></div></td>
        </tr>";
}
?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end-main-container-part-->

    <!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date("Y");?> &copy; Elite</a> </div>
</div>

<style>
#footer {
  color: white;
}
</style>

<!--end-Footer-part-->
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.tables.js"></script>
</body>
</html>
