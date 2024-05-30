<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Faculty page</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Climate+Crisis&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    

</style>
</head>
<body>
<?php require_once('header.php'); ?>


<div class="about-page2-area" style="background-color:lightblue;">
    <div class="container">
        <br>
        <h2 class="title-default-left text-center">OUR FACULTIES</h2><br>
        <div class="row featuredContainer">
            <?php
            include "dbcon.php"; // Assuming this includes your database connection

            // Fetch data from the database
            $qry = "SELECT fullname, qualification, image, occupation FROM staffs";
            $result = mysqli_query($conn, $qry);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>
                    <div class='single-item'>
                        <div class='lecturers-item-wrapper'>
                            <img class='img-fluid' src='gyt/admin/uploads/{$row['image']}' alt='team' style='width:390px; height:290px;'>
                            <div class='lecturers-content-wrapper text-center'>
                                <h3>{$row['fullname']}</h3>
                                <h5>{$row['qualification']}</h5>
                                <span>{$row['occupation']}</span>
                            </div>
                        </div>
                    </div><br>
                </div>";
            }
            ?>
        </div>
    </div>
</div>


    

<script>
    $(document).ready(function () {
        // Add a click event listener to the navbar-toggler button
        $(".navbar-toggler").click(function () {
            // Toggle the collapse class on the navbarNav element
            $("#navbarNav").toggleClass("collapse");
        });

        // Add a click event listener to each nav-item, so that the menu collapses when an item is clicked
        $(".nav-item").click(function () {
            $("#navbarNav").addClass("collapse");
        });
    });
</script>
<?php require_once('footer.php'); ?>

</body>
</html>