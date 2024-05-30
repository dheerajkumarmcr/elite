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

    <?php $page='announcement'; include 'includes/sidebar.php'?>
    <!--sidebar-menu-->

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="admindashboard.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="popup.php" class="current">Popup</a> </div>
            <h1 class="text-center">Elite's popup image<i class="fa fa-folder-open"></i></h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <!-- <a href="popup-entry.php"><button class="btn btn-primary">Add Popup image</button></a> -->
                    <div class='widget-box'>
                        <div class='widget-title'> <span class='icon'> <i class='fas fa-th'></i> </span>
                            <h5>Popup table</h5>
                        </div>
                        <div class='widget-content nopadding'>

                            <?php

                            include "dbcon.php";
                            $qry = "SELECT * FROM popup";
                            $result = mysqli_query($conn, $qry);
                            ?>

                            <table class='table table-bordered table-hover'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr class=''>
                                            <td><div class='text-center'>" . $row['id'] . "</div></td>
                                            <td><div class='text-center'>" . $row['name'] . "</div></td>
                                            <td><div class='text-center'><img src='uploads/" . $row['photo'] . "' alt='popup Image' style='width: 50px; height: 50px;'></div></td>
                                            <td><div class='text-center'><a href='edit-popup.php?id=" . $row['id'] . "'><i class='fas fa-edit' style='color:#28b779'></i> Edit  |<a href='remove_popup.php?id=" . $row['id'] . "' style='color:#F66;'><i class='fas fa-trash'></i> Remove</a></div></td>
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
        <div id="footer" class="span12"> <?php echo date("Y"); ?> &copy; Elite</a> </div>
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
