<?php

include "dbcon.php";
$qry = "SELECT * FROM image";
$result = mysqli_query($conn, $qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Gallery</title>
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
<style>
    
    * {
            border: 0;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: rgb(250, 250, 250);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            max-width: 100%;
            overflow-x: hidden;

        }

        a {
            color: inherit;
            font-family: inherit;
            font-size: inherit;
            text-decoration: none;
        }

       

        .image-container {
        position: relative;
        max-width: 100vw;
        max-height: 40vh;
        margin: auto;
        overflow: hidden;
        text-align: center;

      }

      .image-container img {
        width: 100%;
        height: auto;
      }
.background-image {
  width: 100%;
  height: 50%;
  height: auto;
  display: block;
}

.overlay-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 40px;
  font-weight: bold;
}

#image {
            max-width: -50%;
            height: auto;
            margin-bottom: 10px;
        }

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
input{
    display: none;
}
.container{
    width: 100%;
    text-align: center;
}
h1{
    font-weight: normal;
    font-size: 35px;
    position: relative;
    margin: 100px;
}
h1::before{
    
    position: absolute;
    width: 100px;
    height: 3px;
    background-color: crimson;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    animation: animate  4s linear infinite;
    margin: 10px;
    content: '';
}
@keyframes animate{
    0%{
        width: 100px;

    }
    50%{
        width: 200px;
        
    }
    100%{
        width: 100px;
        
    }
}
.top-content{
    background-color: rgb(212, 208, 208);
    width: 90%;
    margin: 0 auto 50px auto;
    height: 60px;
    display: flex;
    align-items: center;
    border-radius: 5px;
    box-shadow: 3px 3px 5px lightgray;
}
h3{
    height: 70%;
    
    line-height: 80px;
    
    padding: 0 50px;
    align-items: center;
    
}
label{
    display: inline-block;
    height: 100%;
    padding: 0 5px;
    margin: 0 30px;
    line-height: 60px;
    font-size: 18px;
    color: gray;
    cursor: pointer;
    transition: color .5s;
}
label:hover{
    color: black;
}
.photo-gallery{
    width: 90%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
    margin-bottom: 20px;
    
    flex-wrap: wrap;
    gap: 10px;
}
.pic{
    position: relative;
    width: 100%;
    height: 300px;
    border-radius: 10px;
    box-shadow: 3px 3px 5px lightgray;
    cursor: pointer;
    transition: .5s;
}
.pic img{
    width: 100%;
    height: 100%;
    border-radius: 10px;
    transition: .5s;
}
.pic::before{
    content: "Elite";
    position:absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 22px;
    font-weight: bold;
    width: 100%;
    margin-top: -100%;
    opacity: 0;
    transition: .3s;
    transition-delay: .2s;
   
}
.pic:after{
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    border: 10px;
    width: 100%;
    height: 0;
    background-color: rgb(0, 0, 0,.4);
    transition: .3s;
}
.pic:hover::after{
    height: 100%;
}
.pic:hover::before{
    margin-top: 0;
    opacity: 1;
}

.container .photo-gallery .pic,
.container .photo-gallery .all,
.container .photo-gallery .images,
.container .photo-gallery .videos {
    opacity: 1;
    transform: scale(1);
    position: relative;
    transition: 0.5s;
}

/* Hide videos when check3 is checked */
#check3:checked ~ .container .photo-gallery .all,
#check3:checked ~ .container .photo-gallery .videos {
    transform: scale(0);
    position: absolute;
    transition: 0s;
}

/* Hide images when check2 or check3 is checked */
#check2:checked ~ .container .photo-gallery .images,
#check3:checked ~ .container .photo-gallery .images {
    transform: scale(0);
    position: absolute;
    transition: 0s;
}

/* Hide videos when check2 or check3 is checked */
#check2:checked ~ .container .photo-gallery .videos,
#check3:checked ~ .container .photo-gallery .videos {
    transform: scale(0);
    position: absolute;
    transition: 0s;
}

/* Show images in "All" and "Images" tabs when check2 is checked */
#check2:checked ~ .container .photo-gallery .all,
#check2:checked ~ .container .photo-gallery .images {
    transform: scale(1);
    position: relative;
}
.videos{
    display: contents;
    width: 100%;
    height: 100%;
  
}
@media (max-width: 767px) {
    .photo-gallery .Videos {
       
  
    }
}
.Videos video {
        max-width: 239px;
        max-height: 140px;
        width: 100%;
        height: auto;
    }
    .top-content{
    background-color: rgb(212, 208, 208);
    width: 100%;
    margin: 0 auto 20px auto;
    height: 80px;
    display: flex;
    align-items: center;
    border-radius: 5px;
    box-shadow: 3px 3px 5px lightgray;
}
h3{
    height: 70%;
    
    line-height: 80px;
    
    padding: 0 30px;
    align-items: center;
    
}
@media (min-width: 280px) and (max-width: 643px) {
        .Videos video {
        max-width: 239px;
        max-height: 140px;
        width: 100%;
        height: auto;
    }
    .photo-gallery{
    width: 90%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 10px;
    margin-bottom: 20px;
    
    flex-wrap: wrap;
    gap: 20px;
}
.top-content{
    background-color: rgb(212, 208, 208);
    width: 100%;
    margin: 0 auto 20px auto;
    height: 80px;
    display: flex;
    align-items: center;
    border-radius: 5px;
    box-shadow: 3px 3px 5px lightgray;
}
h3{
    height: 70%;
    
    line-height: 80px;
    
    padding: 0 30px;
    align-items: center;
    
}
}

@media (min-width: 360px) and (max-width: 740px) {
    .Videos video {
        max-width: 239px;
        max-height: 140px;
        width: 100%;
        height: auto;
    }
    .photo-gallery{
    width: 90%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 10px;
    margin-bottom: 20px;
    
    flex-wrap: wrap;
    gap: 20px;
}  
.top-content{
    background-color: rgb(212, 208, 208);
    width: 100%;
    margin: 0 auto 20px auto;
    height: 80px;
    display: flex;
    align-items: center;
    border-radius: 5px;
    box-shadow: 3px 3px 5px lightgray;
}
h3{
    height: 70%;
    
    line-height: 80px;
    
    padding: 0 30px;
    align-items: center;
    
} 
}



@media (min-width: 412px) and (max-width: 915px) {
    .Videos video {
        max-width: 239px;
        max-height: 140px;
        width: 100%;
        height: auto;
    }
    .photo-gallery{
    width: 90%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 10px;
    margin-bottom: 20px;
    
    flex-wrap: wrap;
    gap: 20px;
}
.top-content{
    background-color: rgb(212, 208, 208);
    width: 100%;
    margin: 0 auto 20px auto;
    height: 80px;
    display: flex;
    align-items: center;
    border-radius: 5px;
    box-shadow: 3px 3px 5px lightgray;
}
h3{
    height: 70%;
    
    line-height: 80px;
    
    padding: 0 30px;
    align-items: center;
    
}
}

@media (min-width: 430px) and (max-width: 932px) {
    .Videos video {
        max-width: 239px;
        max-height: 140px;
        width: 100%;
        height: auto;
    }
    .photo-gallery{
    width: 90%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 10px;
    margin-bottom: 20px;
    
    flex-wrap: wrap;
    gap: 20px;
}
.top-content{
    background-color: rgb(212, 208, 208);
    width: 100%;
    margin: 0 auto 20px auto;
    height: 80px;
    display: flex;
    align-items: center;
    border-radius: 5px;
    box-shadow: 3px 3px 5px lightgray;
}
h3{
    height: 70%;
    
    line-height: 80px;
    
    padding: 0 30px;
    align-items: center;
    
}
}

@media (min-width: 540px) and (max-width: 720px) {
    .Videos video {
        max-width: 239px;
        max-height: 140px;
        width: 100%;
        height: auto;
    }
    .photo-gallery{
    width: 90%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 10px;
    margin-bottom: 20px;
    
    flex-wrap: wrap;
    gap: 20px;
}
.top-content{
    background-color: rgb(212, 208, 208);
    width: 100%;
    margin: 0 auto 20px auto;
    height: 80px;
    display: flex;
    align-items: center;
    border-radius: 5px;
    box-shadow: 3px 3px 5px lightgray;
}
h3{
    height: 70%;
    
    line-height: 80px;
    
    padding: 0 30px;
    align-items: center;
    
}

}

.angle {
    display: inline-block; /* Make sure the underline is inline */
    text-decoration: none; /* Remove the default underline */
    position: relative; /* Position relative to make space for the underline */
    padding-bottom: 2px; /* Add gap above the line */
    padding-top: 5px;
}

.angle::after {
    content: ''; /* Create the underline using pseudo-element */
    position: absolute; /* Position the underline */
    bottom: 1px; /* Align the underline at the bottom */
    left: 0; /* Start the underline from the left */
    width: 150px; /* Set a fixed length for the underline */
    height: 1px; /* Set the thickness of the underline */
    background-color: white; /* Set the color of the underline */
}
.angle1 {
    display: inline-block; /* Make sure the underline is inline */
    text-decoration: underline; /* Remove the default underline */
    position: relative; /* Position relative to make space for the underline */
    padding-bottom: 2px; /* Add gap above the line */
    padding-top: 5px;
}

.angle1::after {
    content: ''; /* Create the underline using pseudo-element */
    position: absolute; /* Position the underline */
    bottom: 30px; /* Align the underline at the bottom */
    left: 0; /* Start the underline from the left */
    width: 1300px; /* Set a fixed length for the underline */
    height: 2px; /* Set the thickness of the underline */
    background-color: white; /* Set the color of the underline */
}
@media only screen and (max-width: 600px) {
    .angle1 {
        text-decoration: none; /* Remove underline in mobile view */
    }

    .angle1::after {
        display: none; /* Hide the underline in mobile view */
    }
}
d-flex {
    align-items: center; /* Align items vertically */
    justify-content: center; /* Align items horizontally */
}

</style>
</head>
<body>
<?php require_once('header.php'); ?>  
<div class="about-page2-area" style="background-color:lightblue;">
 
<input type="radio" name="photos" id="check1" checked>
<input type="radio" name="photos" id="check3" checked>
<br>
<div class="container">
    <h1>OUR PHOTO GALLERY</h1>
    
    <div class="top-content">
        <h3>Virtual Tour</h3>
        <div class="d-flex">
            <label for="check1" class="mr-2">All</label>
            <label for="check3">Videos</label>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="photo-gallery">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="pic all">
                        <img src="gyt/admin/uploads/<?php echo $row['image']; ?>">
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include "dbcon.php";
    $qry = "SELECT * FROM video";
    $result = mysqli_query($conn, $qry);
    ?>

<div class="row">
    <div class="col-md-12">
        <div class="photo-gallery">
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="Videos">
                    <!-- Display video -->
                    <video class="img-fluid" controls>
                        <source src='gyt/admin/uploads/<?php echo $row['video_file_name']; ?>' type='video/mp4'>
                    </video>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
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
</div>
<footer>
<div class="container-fluid footer  text-body py-5"style="background-color:#023145;">
<div classs="row justify-content-left">
            <div class="container py-5"style="margin-top:-50px;">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                        <div class="logo">
                        <a class="navbar-brand1" href="index.php">
                        <img src="images/school-logo.jpg" alt="logo" class="img-fluid" width="60%">
                        </a>
                    </div>
                            <br><h4 class="mb-4 "style="color: #FFA700;">Contact Us</h4>
                            <p class="mb-4"style="color: #fff;">ELITE SCHOOL
<br>Chebrol Road, Chebrolu - Dubacherla - Devulapalli Rd, Dubacherla, Andhra Pradesh 534112
</p>
                            <div class="position-relative mx-auto">
                                
                                <h4 class="mb-4 "style="color: #FFA700;">Email</h4>
                                <p class="mb-4"style="color: #fff;"><a href="mailto:eliteinstitutions02@gmail.com" style="text-decoration:none; color:white;">Email: eliteinstitutions02@gmail.com</a><br>
                            <a href="tel:+919985297027" style="text-decoration:none; color:white;">(+91) 9985297027</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 "style="color: #FFA700;">Quick Links</h4>
                            <a href="index.php" class="angle"style="color: #fff; margin-right:250px;"></i> Home</a>
                            <a href="About us.php" class="angle"style="color: #fff; margin-right:250px;"></i> About</a>
                            <a href="faculty.php" class="angle"style="color: #fff; margin-right:250px;"></i> Faculty</a>
                            <a href="Contact.php"  class="angle"style="color: #fff; margin-right:250px;"></i> ContactUs</a>
                            <a href="gallery.php" class="angle"style="color: #fff; margin-right:250px;"></i> Gallery</a>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 "style="color: #FFA700;">Campus Life</h4>
                            <a href="director.php" class="angle"style="color: #fff; margin-right:250px;"></i> MessageFrom<span>Director</span></a>
                            <a href="principal.php" class="angle"style="color: #fff; margin-right:250px;"></i> MessageFromPrincipal</a>
                            
                            <a href="gyt/adminlogin.php" class="angle"style="color: #fff; margin-right:250px;"></i> Login</a>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
    <div class="footer-item text-center"style="border-radius: 5px;"> <!-- Add 'text-center' class to center content -->
        <h4 class="mb-4 "style="color: #FFA700;">Enquiry Form</h4>
        <form id="contactForm">
            <div class="mb-2"style="border-radius: 5px;color: #000000;">
                <input type="text"style="color: #000000;" class="form-control" id="firstname" name="firstname" placeholder="First Name*" required>
            </div>
            <div class="mb-2"style="border-radius: 5px;color: #000000;">
                <input type="text"style="color: #000000;" class="form-control" id="lastname" name="lastname" placeholder="Last Name*" required>
            </div>
            <div class="mb-2"style="border-radius: 5px;color: #000000;">
                <input type="tel" style="color: #000000;"class="form-control" id="phone" name="phone" placeholder="India (+91) Mobile Number*" required>
            </div>
            <div class="mb-2"style="border-radius: 5px;color: #000000;">
                <input type="email" style="color: #000000;"class="form-control" id="email" name="email" placeholder="Your Email*" required>
            </div>
            <div class="mb-2"style="border-radius: 5px;color: #000000;">
                <input type="text" style="color: #000000;"class="form-control" id="city" name="city" placeholder="Your City*" required>
            </div>
            <div class="mb-2">
                <textarea class="form-control"style="color: #000000;" id="message" name="message" rows="4" placeholder="" required></textarea>
            </div>
            <button style="border-radius: 5px;background-color: #FFA700;" type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submit Now&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        </form>
        <div id="popup" style="display: none; color: green; text-align: center;">
            Details saved successfully!
        </div>
    </div>
</div>
<div class="text-center" style="margin-top: -20px; margin-bottom:-100px;font-size:15px;">
<br><br><div class="text-center" style="margin-top: -20px; margin-bottom:10px;font-size:15px;">
<a href='https://www.free-counters.org/' style="color:#023145;">.</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=296adaff7fa4fd9c1c367197befce72d23a9dedb'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1182073/t/5"></script>
    </div>
    </div>
            </div>
                    
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
        <!-- Footer End -->

                 
        <script>
            $(document).ready(function() {
                $("#contactForm").submit(function(e) {
                    e.preventDefault();
    
                    // Gather form data
                    var formData = $(this).serialize();
    
                    // AJAX request to save form data to the server
                    $.ajax({
                        type: "POST",
                        url: "process.php", // Create a PHP file (save_form_data.php) to handle the database interaction
                        data: formData,
                        success: function(response) {
                            // Display the popup if the data is successfully saved
                            $("#popup").show();
    
                            // You can also reset the form if needed
                            $("#contactForm")[0].reset();
                        },
                        error: function(error) {
                            console.log(error);
                            // Handle errors if necessary
                        }
                    });
                });
            });
        </script>
        

 
       
        </div>
        
       
        
                </div>
            </div>
        </div>
        </div>
</body>
</html>