<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('location:../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Elite Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../css/fullcalendar.css" />
    <link rel="stylesheet" href="../css/matrix-style.css" />
    <link rel="stylesheet" href="../css/matrix-media.css" />
    <link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
    <link href="../font-awesome/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/jquery.gritter.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
</head>
<body>

<!-- Header-part -->
<div id="header">
<img src="uploads/school-logo.jpg" width=90px height=1px;>
    <h1><a href="dashboard.html">Elite Admin</a></h1>
</div>

<!-- Top Header Menu -->
<?php include 'includes/topheader.php'?>

<!-- Sidebar Menu -->
<?php $page="members"; include 'includes/sidebar.php'?>

<!-- Content -->
<!-- Content -->
<div id="content">
    <div id="content-header">
        <!-- Breadcrumb and header information... -->
        <div id="breadcrumb">
            <a href="admindashboard.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a>
            <a href="members.php" class="current">Registered Members</a>
        </div>
        <h1 class="text-center">Registered Members List <i class="fas fa-group"></i></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">

                <div class='widget-box'>
                    <div class='widget-title'>
                        <!-- Widget title information... -->
                        <span class='icon'> <i class='fas fa-th'></i> </span>
                        <h5>Member table</h5>
                    </div>
                    <div class='widget-content padding'>
                        <?php
                        include "dbcon.php";
                        $qry = "SELECT * FROM members";
                        $result = mysqli_query($conn, $qry);

                        $totalRecords = mysqli_num_rows($result);
                        ?>

                        <table id='myTable' class='table table-bordered table-hover'>
                            <thead>
                                <!-- Table header information... -->
                                <tr>
            <th>#</th>
            <th>Fullname</th>
            
            <th>Gender</th>
            <th>Contact Number</th>
            <th>D.O.R</th>
            <th>Address</th>
            <th>Amount</th>
            <th>Choosen Service</th>
            <th>Plan</th>
        </tr>
                            </thead>
                            <tbody>
                                <?php
                                $cnt = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $cnt++;
                                    echo "<tr>
                                            <!-- Table row information... -->
                                            <td><div class='text-center'>" . $cnt . "</div></td>
                <td><div class='text-center'>" . $row['fullname'] . "</div></td>
                
                <td><div class='text-center'>" . $row['gender'] . "</div></td>
                <td><div class='text-center'>" . $row['contact'] . "</div></td>
                <td><div class='text-center'>" . $row['dor'] . "</div></td>
                <td><div class='text-center'>" . $row['address'] . "</div></td>
                <td><div class='text-center'>$" . $row['amount'] . "</div></td>
                <td><div class='text-center'>" . $row['services'] . "</div></td>
                <td><div class='text-center'>" . $row['plan'] . " Month/s</div></td>
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
<!-- Footer and scripts... -->



<!-- Footer -->
<div class="row-fluid">
    <div id="footer" class="span12"><?php echo date("Y");?> &copy; Elite</a></div>
</div>

<style>
    #footer {
        color: white;
    }
</style>

<script src="../js/excanvas.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- DataTable initialization script -->
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>
<!-- Other scripts go here -->
</body>
</html>
