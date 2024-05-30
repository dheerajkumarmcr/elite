<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Elite School</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        

        <!-- Icon Font Stylesheet -->
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
<div class="container-fluid footer  text-body py-5"style="background-color:#023145;">
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
                            <a href="index.php" class="angle"style="color: #fff;"></i> Home</a>
                            <a href="About us.php" class="angle"style="color: #fff;"></i> About</a>
                            <a href="faculty.php" class="angle"style="color: #fff;"></i> Faculty</a>
                            <a href="Contact.php"  class="angle"style="color: #fff;"></i> Contact Us</a>
                            <a href="gallery.php" class="angle"style="color: #fff;"></i> Gallery</a>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 "style="color: #FFA700;">Campus Life</h4>
                            <a href="director.php" class="angle"style="color: #fff;"></i> Message From Director</a>
                            <a href="principal.php" class="angle"style="color: #fff;"></i> Message From Principal</a>
                            
                            <a href="gyt/adminlogin.php" class="angle"style="color: #fff;"></i> Login</a>

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
        </body>
        </html>