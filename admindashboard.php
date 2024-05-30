
<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('location:../index.php');	
}

include "dbcon.php";


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
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

<div id="header">
  <img src="uploads/school-logo.jpg" width=100px height=1px;>
  <h1><a href="dashboard.html">Elite</a></h1>
</div>


<?php include 'includes/topheader.php'?>

  <?php $page='dashboard'; include 'includes/sidebar.php'?>


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="admindashboard.php" title="You're right here" class="tip-bottom"><i class="fa fa-home"></i> Home</a></div>
  </div>

  <div class="container-fluid">
  <div class="quick-actions_homepage">
      <ul class="quick-actions">
        
        <li class="bg_lo span3"> <a href="members.php" style="font-size: 16px;"> <i class="fas fa-users"></i></i><span class="label label-important"><?php include'dashboard-usercount.php'?></span> Registered Members</a> </li>
        <!-- <li class="bg_lb span2"> <a href="announcement.php" style="font-size: 16px;"> <i class="fas fa-bullhorn"></i><span class="label label-important"><?php include'actions/count-announcements.php'?></span>Announcements </a> </li> -->
        <li class="bg_ls span"> <a href="staffs.php" style="font-size: 16px;"> <i class="fas fa-user-check"></i> <span class="label label-important"></span> Team Members </a> </li>
        <li class="bg_lg span2"> <a href="view_image.php" style="font-size: 16px;"> <i class="fa fa-folder-open" aria-hidden="true"></i> Gallery</a> </li>
        <li class="bg_lb span2"> <a href="view_video.php" style="font-size: 16px;"> <i class="fa fa-file-video" aria-hidden="true"></i> Video's</a> </li>
     

      </ul>
      </div>
    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="fas fa-file"></i></span>
          <h5>Services Report</h5>
        </div>
        <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="fas fa-chevron-down"></i></span>
            <h5>Elite Popup</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
              <li>

              <?php
include "dbcon.php";
$qry = "SELECT * FROM popup";
$result = mysqli_query($conn, $qry);

echo "<div>";

while ($row = mysqli_fetch_array($result)) {
    // Assuming 'uploads/' is the directory where your images are stored
    $imagePath = 'uploads/' . $row['photo'];
    // Assuming each image has a unique filename
    echo "<p><a href='#'><img src='$imagePath' alt='Popup Image' style='width: 500px; height: 300px;'></a></p>";
}

echo "</div>";
echo "</li>";
?>
              
              </li>
            </ul>
          </div>
        </div>
       
         
      </div>
        <br>
            <div class="span4">
              <ul class="site-stats">
               
               
        
                
                              </ul>
                              
            
            </div>
            
       
         
      </div>
     
    </div>
  </div>
</div>

<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date("Y");?> &copy; Elite</a> </div>
</div>

          </div>
          
        </div>
      </div>
    </div>

   

	

    


<style>
#footer {
  color: white;
}

#piechart {
  width: 800px; 
  height: 280px;  
  margin-left:auto; 
  margin-right:auto;
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

      
      if (newURL != "") {
      
          
          if (newURL == "-" ) {
              resetMenu();            
          } 
          else {  
            document.location.href = newURL;
          }
      }
  }

function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
