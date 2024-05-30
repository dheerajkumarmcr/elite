<?php

include "dbcon.php";
$qry = "SELECT * FROM image";
$result = mysqli_query($conn, $qry);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Elite School</title>
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

<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- AOS CSS -->
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2a8YfFWnfPFAFuKpAHVa1aYfPQQNmJ9" crossorigin="anonymous"></script>

 


</head>
<body>

<style>
            * {
            border: 0;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: rgb(250, 250, 250);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans';
            text-align: center;
            margin: 0;
            padding: 0;
            max-width: 100%;
            overflow-x: hidden;

        }

        .image-container {
        position: relative;
        height: 90vh;
    }
    .image-container1{
        
        position: relative;
        height: 100vh;
    }
    

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-container {
        position: absolute;
        display: flex;
        justify-content: space-between;
        width: 85%;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        top: 35%; /* Adjust the top property as needed */
    }
    

    .card {
    box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1);
    margin: 0;
    text-align: justify;
    margin-bottom: 0px;
}




        .content-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white; /* Adjust text color */
        }

        .logo-text {
            font-size: 2.5rem; /* Adjust as needed */
            font-family:   'Merriweather', sans-serif;
            color: #fa5e04;
        }
        

        .logo-text1 .btn {
            margin-top: 1rem;
        }
        .btn-services {
            margin-top: 15px;
        }
        .card-body {
            text-align: justify;
        }

        .card-title {
            text-align: center;
        }
        .card-img-top {
        height: 50%; /* Set the fixed height as needed */
        width: 100%; /* Ensure full width */
        object-fit: cover;
    }
      /* Media query for mobile view */
      /* @media (max-width: 768px) {
            .image-container1 {
        position: relative;
        height: 220vh;
        
    }
} */

@media (min-width: 280px) and (max-width: 643px) {
    .image-container1 {
        position: relative;
        height: 290vh; /* Adjust height for small devices */
    }
    .container {
    

    margin-top: 320px;
    }
}

@media (min-width: 360px) and (max-width: 740px) {
    .image-container1 {
        position: relative;
        height: 300vh; /* Adjust height for small devices */
    }
    .container {
    

    margin-top: 320px;
    }
}

@media (min-width: 390px) and (max-width: 844px) {
    .image-container1 {
        position: relative;
        height: 240vh; /* Adjust height for small devices */
    }
    .container {
    

    margin-top: 330px;
    }
}



@media (min-width: 412px) and (max-width: 915px) {
    .image-container1 {
        position: relative;
        height: 240vh; /* Adjust height for small devices */
    }
    .container {
    

    margin-top: 340px;
    }
}

@media (min-width: 430px) and (max-width: 932px) {
    .image-container1 {
        position: relative;
        height: 230vh; /* Adjust height for small devices */
    }
    .container {
    

    margin-top: 330px;
    }
}

@media (min-width: 540px) and (max-width: 720px) {
    .image-container1 {
        position: relative;
        height: 340vh; /* Adjust height for small devices */
    }
    .container {
    

    margin-top: 330px;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    .image-container1 {
        position: relative;
        height: 80vh; /* Adjust height for small devices */
    }
    .container {
    

    margin-top: 150px;
    }
}

@media (min-width: 820px) and (max-width: 1180px) {
    .image-container1 {
        position: relative;
        height: 60vh; /* Adjust height for small devices */
    }
    .container {
    
    margin-top: 150px;
    }
}

@media (min-width: 1024px) and (max-width: 1366px) {
    .image-container1 {
        position: relative;
        height: 55vh; /* Adjust height for small devices */
    }
    .container {
    
    margin-top: 150px;
    }
}

/* Media query for extra-large devices (e.g., large desktops) */
@media (min-width: 1201px) {
    .image-container1 {
        position: relative;
        height: 115vh; /* Adjust height for extra-large devices */
    }
    .container {
    
    margin-top: 150px;
    }


}
    .blog-box {
            background-color: #e2dada;
            border: 1px solid #ffffff;
            
        }
        .video-box {
            background-color: #000000;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #fcfbfb;

        }
        .gallery-container {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        white-space: nowrap;
        display: inline-block;
    } 

    .image-wrapper {
        display: inline-block;
        width: 300px; 
        height: 300px; 
        margin-right: 10px; 
        position: relative;
        margin-bottom: 0%;
    }

    .image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border: 0;
    }

    .text-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 10px;
        text-align: center;
        display: none;
    }

    .image-wrapper:hover .text-overlay {
        display: block;
    }

    .prev, .next {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
      
        font-size: 20px;
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        margin-top: 3%;
        margin-bottom:3%;
        margin-left: 47.5%;
    }

    .prev {
        left: 0;
        
    }

    .next {
        right: 0; 
    }

.btn-more-gallery {
    margin-top: 0%;
}

.card-img-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    opacity: 0; 
    transition: opacity 0.2s ease-out;
  }

  .card:hover .card-img-overlay {
    opacity: 1;
  }
  .card-title1{
    font-size: 1.5em;
    color: #e41313;

  }
  .card-title2{
    font-size: 1.5em;
    color: #000000;

  }
  .card-text1{
    font-size: 1em;
    color: #eb1616;
    font-family: 'Trebuchet MS';
  }
  .card-text2{
    font-size: 1em;
    color: #000000;
    font-family: 'Trebuchet MS';
  }
  .card-img{
    width: 100%;
    height: 100%;
    border-bottom: 0px solid #ddd;
    border-left: -2px;
    object-fit: cover;
  }
  /* .card-deck {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; 
} */
h2 {
        margin-top: 60px;
        
        text-align: center;
        margin-bottom: 20px;
        font-family: 'Black Ops One', system-ui;
        font-family: 'Merriweather', serif;
        
        
      }
      p{
        text-align: justify;
      } 
      .P1{
        text-align: center;
        
      }
      #popup-container {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      z-index: 1000;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    #popup-content {
      background-color: #fff;
      padding: 40px;
      width: 1000px;
      height: 600px;
      
      text-align: center;
      border-radius: 5px;
      position: relative;
      margin: 20px;
      color: #fff;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    #close-btn {
      position: absolute;
      top: 15px;
      right: 15px;
      cursor: pointer;
      color: #000000;
      font-size: 24px;
    }

    #popup-content img {
      max-width: 100%;
      height: auto;
      border-radius: 0px;
      margin-bottom: 20px;
    }



    /* #logoContainer {
    width: 100px; 
    height: 100px; 
    border-radius: 50%;
    overflow: hidden;
}


#logoContainer img {
    width: 100%; 
    height: auto; 
    display: block;
} */



#popup-content a {
    display: inline-block;
    background-color: #3498db; 
    color: #000000;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.2s ease;
}

#popup-content a:hover {
    background-color: #297fb8;
    color: #fff;
}




    </style>

<?php require_once('header.php'); ?>   
<div class="image-container">
        <img src="https://t3.ftcdn.net/jpg/04/45/93/90/360_F_445939048_eVX3dTGgZAiotExm7rAhIqlbC7Z9gYtn.jpg" alt="Description of the image">

        <div class="content-container">
        <div class="logo-text ">
    <h1 class="mb-0"><b></b></h1>
    </div>

            <div class="logo-img mt-5">
                <img id="image" src="images/school-logo-removebg-preview.png" alt="Description of the image" class="w-60">
            </div>

            <div class="block-type--textext-centercol-10 animated-block mt-3">
                <div class="block box-shadow-none mt-3" data-aos="fade-left" data-aos-delay="500"
                    data-aos-duration="1000">
                    <a href="" class="btn btn-dark btn-lg "style="">Learn With Us Now</a>
                </div>
            </div>

            
        </div>
    </div>
     
    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var animatedBlock = document.querySelector(".block-type--textext-centercol-10");
        var lastScrollPosition = window.scrollY;
        var scrollTriggerPosition = 300;

        window.addEventListener("scroll", function () {
            var currentScrollPosition = window.scrollY;

            if (currentScrollPosition > lastScrollPosition) {
                if (currentScrollPosition < scrollTriggerPosition) {
                    animatedBlock.style.opacity = "0";
                    animatedBlock.classList.remove("visible");
                } else {
                    animatedBlock.style.opacity = "0";
                    animatedBlock.classList.add("visible");
                }
            } else {
                if (currentScrollPosition === 0) {
                    animatedBlock.style.opacity = "1";
                    animatedBlock.classList.add("visible");
                }
            }

            lastScrollPosition = currentScrollPosition;
        });
    });
</script>

<div class="image-container1">
    <img src="https://t4.ftcdn.net/jpg/06/30/03/29/360_F_630032996_e9ani5VblvtTjKYYprfStjPwRgyhi6H7.jpg" alt="Description of the image" style="width: 100%; height: 110%; object-fit: cover;">
    <div class="container">
        <div class="card-container position-absolute start-50 translate-middle">
            <div class="row">
            
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="images/03 copy.jpg" class="card-img-top" alt="Card Image 1" style="height:450px;">
                        <div class="card-body">
                            <h4 class="card-title"><b>COURSES</b></h4>
                            <p class="card-text" style="text-align: justify;">Our diverse range of courses caters to a multitude of interests and skill levels, ensuring that there's something for everyone. Whether you're looking to enhance your professional expertise, explore new passions, or simply expand your horizons, our courses offer engaging content, interactive learning experiences, and expert guidance to support your educational journey. </p>
                               
                                
                        </div>
                    </div>
                </div>
                

                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="images/01.jpg" class="card-img-top" alt="Card Image 2" style="height:450px;">
                        <div class="card-body">
                            <h4 class="card-title"><b>INTERMEDIATE</b></h4>
                            <p class="card-text">Intermediate education serves as a crucial bridge between foundational learning and specialized study, providing students with a comprehensive understanding of key subjects while nurturing critical thinking and analytical skills. At this pivotal stage, students delve deeper into academic disciplines, exploring complex concepts and honing their abilities to solve problems creatively. </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="images/04.jpg" class="card-img-top" alt="Card Image 3" style="height:450px;">
                        <div class="card-body">
                            <h4 class="card-title"><b>DEGREE</b></h4>
                            <p class="card-text">A degree program represents a significant milestone in one's educational journey, offering in-depth exploration and specialization within a chosen field of study. Through a combination of rigorous coursework, hands-on experience, and research opportunities, degree programs empower students to develop advanced knowledge, critical thinking abilities, and practical skills relevant to their career aspirations. </p>
                                
                        </div>
                    </div>
                </div>
                
                <!-- <div class="d-flex justify-content-center mt-4">
                <a href="services.php" class="btn btn-dark btn-lg">More Services</a>
            </div> -->
            </div>
        </div>
</div>
    </div>
</div>

<section id="featured-services" class="featured-services py-5">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4">
        <div class="card border-0" data-aos="fade-up" data-aos-delay="100">
          <div class="card-body text-center">
            <div class="icon mb-3"><i class="fas fa-school fa-2x"></i></div>
            <h4 class="card-title"><a href="#" style="text-decoration:none; color:black;">Online Classes</a></h4>
            <p class="card-text">We provide online classes to our students</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4">
        <div class="card border-0" data-aos="fade-up" data-aos-delay="200">
          <div class="card-body text-center">
            <div class="icon mb-3"><i class="fas fa-book-reader fa-2x"></i></div>
            <h4 class="card-title"><a href="#" style="text-decoration:none; color:black;">Skilled Teachers</a></h4>
            <p class="card-text">In our school we have proper skilled teachers</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4">
        <div class="card border-0" data-aos="fade-up" data-aos-delay="300">
          <div class="card-body text-center">
            <div class="icon mb-3"><i class="fas fa-thermometer fa-2x"></i></div>
            <h4 class="card-title"><a href="#" style="text-decoration:none; color:black;">Home Projects</a></h4>
            <p class="card-text">We provide home projects to our students</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-4">
        <div class="card border-0" data-aos="fade-up" data-aos-delay="400">
          <div class="card-body text-center">
            <div class="icon mb-3"><i class="fas fa-book fa-2x"></i></div>
            <h4 class="card-title"><a href="#" style="text-decoration:none; color:black;">Book Library</a></h4>
            <p class="card-text">We have a well-equipped library for our students</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<br>
    <div class="blog-box p-5 mb-4">
        <div class="section-space text-center">
            <div class="team-section">
                <h2 class="mb-4"><b>MEET THE TEAM</b></h2>
                <p1 class="mb-4">Faculty members play a pivotal role in shaping the academic environment and fostering intellectual growth within educational institutions. Comprising a diverse group of educators, researchers, and mentors, the faculty is instrumental in imparting knowledge, nurturing critical thinking, and guiding students towards their academic and professional goals.</p1>
            </div>
            <br>
            
            <div>
                <a href="Teams.php" class="btn btn-dark btn-lg">Find the Team Here</a>
            </div>
        </div>
    </div>
 
    <div class="video-box p-4">
        <div class="section-space">
            <video class="w-100" controls style="height: 600px; object-fit: fill;">
                <source src="video/video1.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <br>
<br>
<br>
    <button class="prev" onclick="changeSlide(-1)">&#10094; Prev</button>
    <div class="gallery-container">
    <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                
                    <div class="image-wrapper">
                        <img src="gyt/admin/uploads/<?php echo $row['image']; ?>">
                        
                    </div>
                
                <?php
                }
  ?>
  </div>


    </div>
<br>
<br>
<br>
    <button class="next" onclick="changeSlide(1)">Next &#10095;</button>

    <script>
        function changeSlide(direction) {
        const galleryContainer = document.querySelector('.gallery-container');
        const scrollAmount = galleryContainer.offsetWidth; // Use container width as scroll amount

        if (direction === -1) {
            // Scroll to the left (previous images)
            galleryContainer.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        } else if (direction === 1) {
            // Scroll to the right (next images)
            galleryContainer.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        }
    }
    </script>

<div class=" mb-5"style="text-align: center" >
    <a href="gallery.php" class="btn btn-dark btn-lg">More Gallery Images</a>
</div>


<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="team-section">
                <h2 class="mb-4"><b>FACILITIES</b></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-dark mb-4">
                <img src="images/360_F_436264063_6XpK1PiWHsNSZSpDf7ATbS9oYUdWb8wY.jpg" class="card-img" alt="..." style="height:400px; ">
                <div class="card-img-overlay">
                    <h3 class="card-title text-danger">Classroom</h3>
                    <p class="card-text text-light">Classrooms serve as the cornerstone of the educational journey, providing a dynamic space where students engage in learning, collaboration, and discovery. These environments are carefully crafted to facilitate effective teaching and learning experiences, equipped with essential tools such as whiteboards, projectors, and technology to support diverse instructional methods.</p>
                    <p class="card-text text-light"><small>Elite</small></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-dark bg-light mb-4">
                <img src="https://trichysevasangam.com/wp-content/uploads/2021/01/IMG-20210105-WA0074-1024x472.jpg" class="card-img" alt="..." style="height:400px; ">
                <div class="card-img-overlay">
                    <h5 class="card-title text-danger">PLAY GROUND</h5>
                    <p class="card-text text-light" >Playgrounds are vibrant hubs of activity, where laughter fills the air and friendships blossom. These outdoor spaces serve as more than just areas for physical activity—they are essential components of childhood development.</p>
                    <p class="card-text text-light"><small>Elite</small></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-dark mb-4">
                <img src="https://media.istockphoto.com/id/1331816650/photo/books-on-shelves-in-library.jpg?s=612x612&w=0&k=20&c=hIxeOp8QLHmhZVj6EhLyp51Mwa7hQqYS6bqkMnnrX90=" class="card-img" alt="..." style="height:400px; ">
                <div class="card-img-overlay">
                    <h5 class="card-title text-danger">LIBRARY</h5>
                    <p class="card-text text-light" >Libraries stand as sanctuaries of knowledge, offering a haven for seekers of wisdom and solace. Within their walls, rows of books whisper tales of centuries past, while modern technology opens gateways to the digital frontier.</p>
                    <p class="card-text text-light"><small>Elite</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-space">
    <div class="team-section">
        <div class="google-reviews" id="googleReviews">
        <h2><b>GOOGLE REVIEW'S</b></h2>
        <div class='sk-ww-google-reviews' data-embed-id='25417636'></div><script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
    </div>      
</div>
<?php require_once('footer.php'); ?>   
<div id="popup-container">
  <div id="popup-content">
    <div id="close-btn" onclick="closePopup()">X</div>
   

<?php
include "dbcon.php";
$qry = "SELECT * FROM popup";
$result = mysqli_query($conn, $qry);




while ($row = mysqli_fetch_array($result)) {
    echo "<img class='popup-image' src='gyt/admin/uploads/{$row['photo']}' alt='Popup Image'style='width: 900px; height: 550px;'>";
}
?>


    <!-- <br>
    <a href="mailto:gandepallimahesh26@gmail.com">Mail Us Now</a>
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="https://www.instagram.com/transcend_healthandperformance?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
    <a href="#"><i class="fa-brands fa-square-x-twitter"></i></a> -->
  </div>
</div>
<script>

    $('.popup-image').click(function () {
        var imagePath = $(this).attr('src');
        window.open(imagePath, '_blank');
    });
</script>



<script>
  setTimeout(function() {
    openPopup();
  }, 1500);

  function openPopup() {
    document.getElementById('popup-container').style.display = 'flex';
    setTimeout(function() {
      closePopup();
    }, 3000); 
  }

  function closePopup() {
    document.getElementById('popup-container').style.display = 'none';
  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
    
      


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


</body>
</html>
