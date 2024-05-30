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

<div id="header">
<img src="uploads/school-logo.jpg" width=100px height=1px;>
    <h1><a href="dashboard.html">Elite Admin</a></h1>
</div>

<?php include 'includes/topheader.php'?>
<?php $page='join-us'; include 'includes/sidebar.php'?>

<?php
include 'dbcon.php';
$id = $_GET['id'];
$qry = "select * from booking where id='$id'";
$result = mysqli_query($conn, $qry);
while ($row = mysqli_fetch_array($result)) {
    ?>

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb">
                <a href="admindashboard.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a>
                <a href="join.php" class="tip-bottom">Join Us Details</a>
                <a href="edit-join-details.php" class="current">Edit Join Details</a>
            </div>
            <h1 class="text-center">Update Join Details <i class="fas fa-briefcase"></i></h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="fas fa-align-justify"></i></span>
                        <h5>Join Details</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="edit-join-req.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label">Name :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="name" value='<?php echo $row['name']; ?>' />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email :</label>
                            <div class="controls">
                                <input type="email" class="span11" name="email" value='<?php echo $row['email']; ?>' />
                            </div>
                        </div>
                        <?php

if (!isset($_SESSION['user_id'])) {
    header('location:../index.php');
    exit();
}

include 'dbcon.php';

$errors = array();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the staff details based on the provided ID
    $query = "SELECT * FROM booking WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $oldPhoneNumber = $row['phone'];
    } else {
        $errors[] = "Error fetching join details.";
    }
} else {
    $errors[] = "Join details not provided.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $phone = $_POST["phone"];

    
    if (!preg_match("/^\d{10}$/", $phone)) {
        $errors[] = "Please enter a valid 10-digit phone number with the country code +91.";
    }

    if (empty($errors)) {
        
    }
}

?>

<form method="post" action="edit-join-details.php">
    <?php
    // Display errors if any
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
    ?>

    <div class="control-group">
        <label class="control-label">Contact Number</label>
        <div class="controls">
            <div class="input-group">
                <span class="input-group-addon">+91</span>
                <input id="phone" type="text" name="phone" pattern="\d{10}" title="Please enter a valid 10-digit phone number" placeholder="Enter your 10-digit phone number" value="<?php echo $oldPhoneNumber; ?>" required />
            </div>
        </div>
    </div>
    
    <script>
        // JavaScript code for client-side validation
        document.getElementById('phone').addEventListener('input', function (event) {
            const inputValue = event.target.value;
            const isValidInput = /^\d{0,10}$/.test(inputValue);

            if (!isValidInput) {
                event.target.setCustomValidity('Please enter a valid 10-digit number');
            } else {
                event.target.setCustomValidity('');
            }
        });
    </script>

    


                        <div class="control-group">
                            <label class="control-label">Address :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="address" value='<?php echo $row['address']; ?>' />
                            </div>
                        </div>
                        <div class="control-group">
    <label class="control-label">Booking Date & Time:</label>
    <div class="controls">
        <input type="datetime-local" class="span11" name="bookingDateTime" value="<?php echo date('Y-m-d\TH:i', strtotime($row['bookingDateTime'])); ?>" />
    </div>
</div>
                        <div class="control-group">
                            <label class="control-label">Package :</label>
                            <div class="controls">
                                <select class="span11" name="package">
                                    <option value="basic" <?php if ($row['package'] == 'basic') echo 'selected'; ?>>Basic Package</option>
                                    <option value="standard" <?php if ($row['package'] == 'standard') echo 'selected'; ?>>Standard Package</option>
                                    <option value="premium" <?php if ($row['package'] == 'premium') echo 'selected'; ?>>Premium Package</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Session :</label>
                            <div class="controls">
                                <select class="span11" name="session">
                                    <option value="ONE TO ONE SESSION" <?php if ($row['session'] == 'ONE TO ONE SESSION') echo 'selected'; ?>>ONE TO ONE SESSION</option>
                                    <option value="GROUP TRAINING SESSION" <?php if ($row['session'] == 'GROUP TRAINING SESSION') echo 'selected'; ?>>GROUP TRAINING SESSION</option>
                                    <option value="ONLINE TRAINING SESSION" <?php if ($row['session'] == 'ONLINE TRAINING SESSION') echo 'selected'; ?>>ONLINE TRAINING SESSION</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-actions text-center">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-success">Update Join Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
?>

<!-- Add your scripts and other HTML content as needed -->

</body>
</html>
