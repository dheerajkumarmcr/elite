<?php
include "dbcon.php";
$qry = "SELECT * FROM staffs";
$result = mysqli_query($conn, $qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>About us</title>
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


    .item {
        margin: 0 10px;
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
          top:0px;
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
      .overlay-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 40px;
  font-weight: bold;
}
.team-section {
	background: #f8f8f8;
}

.team-section.team-page {
	padding-bottom: 90px;
}

.team-section.team-page .ts-item {
	margin-bottom: 30px;
}

.team-section.team-page .ts-item:hover .ts_text {
	bottom: -20px;
}

.team-section.team-page .ts-item .tt_social {
	-webkit-transform: skewY(5deg);
	-ms-transform: skewY(5deg);
	transform: skewY(5deg);
	margin-top: 13px;
}

.team-section.team-page .ts-item .tt_social a {
	font-size: 14px;
	color: #c4c4c4;
	margin-right: 10px;
}

.team-section.team-page .ts-item .tt_social a:last-child {
	margin-right: 0;
}

.team-title .section-title {
	text-align: left;
	float: left;
}

.primary-btn.appoinment-btn {
	background: transparent;
	border: 2px solid #31f300;
	float: right;
	margin-top: 10px;
}

.ts-slider .col-lg-4 {
	max-width: 100%;
}

.ts-slider.owl-carousel .owl-dots {
	text-align: center;
	margin-top: 10px;
}

.ts-slider.owl-carousel .owl-dots button {
	height: 10px;
	width: 80px;
	background:#5c5c5c;
	margin-right: 15px;
	-webkit-transform: skewY(-5deg);
	-ms-transform: skewY(-5deg);
	transform: skewY(-5deg);
}

.ts-slider.owl-carousel .owl-dots button.active {
	background: #f36100;
}

.ts-slider.owl-carousel .owl-dots button:last-child {
	margin-right: 0;
}
.ts-item {
    height: 300px; /* Adjusted height to accommodate variable content */
    width: 250px;
    position: relative;
    overflow: hidden;
}

.ts-image {
    width: 100%;
    height: 300px;
    display: block;
}

.ts-item .ts_text {
    padding: 20px 0; /* Adjusted padding */
    text-align: center;
    background: #636262;
    border-top: 4px solid #464646;
    transform: skewY(-5deg);
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    transition: all 0.3s;
}



.ts-item .ts_text h4 {
	color: #ffffff;
	font-weight: 600;
	margin-bottom: 5px;
	-webkit-transform: skewY(5deg);
	-ms-transform: skewY(5deg);
	transform: skewY(5deg);
}

.ts-item .ts_text span {
	display: block;
	font-size: 9px;
	font-weight: 700;
	color: #aaaaaa;
	text-transform: uppercase;
	-webkit-transform: skewY(5deg);
	-ms-transform: skewY(5deg);
	transform: skewY(5deg);
}

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
        .image-container img {
            max-height: 30vh;
        }

        .card-container {
            flex-direction: column;
        }
    }
    @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Roboto", sans-serif;
}

.wrapper {
  max-width: 75%;
  margin: auto;
}

.wrapper > p,
.wrapper > h1 {
  margin: 1.5rem 0;
  text-align: center;
  margin-bottom: 400px;
}

.wrapper > h1 {
  letter-spacing: 3px;
  margin-bottom: 20px;
}

.accordion {
  background-color: white;
  color: rgba(0, 0, 0, 0.8);
  cursor: pointer;
  font-size: 1.2rem;
  width: 100%;
  padding: 20px 20px;
  border: none;
  outline: none;
  transition: 0.4s;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: bold;
}

.accordion i {
  font-size: 1.6rem;
}

.active,
.accordion:hover {
  background-color: #f1f7f5;
}
.pannel {
  padding: 0 1px 1px 1px;
  background-color: white;
  overflow: hidden;
  background-color: #f1f7f5;
  display: none;
}
.pannel p {
  color: rgba(0, 0, 0, 0.7);
  font-size: 1.2rem;
  line-height: 1.4;
}

.faq {
  border: 1px solid rgba(0, 0, 0, 0.2);
  margin: 10px 0;
}
.faq.active {
  border: none;
}
#image {
            max-width: -50%;
            height: auto;
            margin-bottom: 10px;
        }
</style>

</head>
<body>
    
<?php require_once('header.php'); ?>  
<div class="about-page2-area" style="background-color:lightblue;">
<div class="image-container">
    <img src="https://doortofuture.com/wp-content/uploads/2021/08/Education.jpg" class="img-fluid" alt="Your Image Description" style="width:2000px; height:350px;">
    <div class="overlay-text" >
       
    </div>
</div>

<div class="container mt-4">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <video class="img-fluid" controls>
                    <source src="" type="video/mp4">
                </video>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">OUR STORY</h5>
                    <p class="card-text">We are a new paragon of wellness & we believe in promoting new-age fitness and health with the help of our exclusive Transcend Fitness centers across the city which includes their dynamic and diverse range of programs to suit and meet all your needs.</p>
                    <p class="card-text">Our mission is to transform lives through fitness, empowering individuals to achieve their full potential both physically and mentally.</p>
                    <p class="card-text">We are dedicated to providing a motivating and inclusive environment, offering top-notch facilities, expert guidance, and a supportive community that fosters personal growth, encourages perseverance, and celebrates every step towards a healthier, stronger, and happier lifestyle.</p>
                    <p class="card-text"><small class="text-body-secondary">---ELITE SCHOOL</small></p>
                </div>
            </div>
        </div>
    </div>


    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKrmny55yaHXZ6m68DuAz7-mL9h1kW-YXUt1wCz7pq7ME08qHaO_aiPNdUyQrMN2uQ_n4&usqp=CAU" class="card-img-top" alt="img" style="width:635px; height:300px;"> -->
                <div class="card-body">
                <br><h2 class="card-title" style = "text-align:center;"><strong>MISSION</strong></h2><br>
                    <p><span>Elite School is committed to believe that every child in the school is important for the family, the state and the nation and has an inborn intelligence to grow to become a productive human resource for the development of the country. The school is an institution which should take care of growth  of children  and endeavor to make every child a complete child by making him believe that he has to grow to become an autonomous, self-disciplined and responsible, participatory and more importantly a happy person as we believe in the slogan <strong>&quot;A HAPPY CHILD IS A NATION&rsquo;S PRIDE&quot;</strong></p><span>

<p><span>TO ACHIEVE THIS</p><span>

<ul>
	<li>We provide equal and most essential opportunities, through conducive environment for the students to grow and develop completely.</li>
	<li>We provide an enjoyable learning atmosphere through a well-defined and collaborative work of the teachers and students.</li>
	<li>We are committed to demolish rote learning and promote creative learning.</li>
	<li>We propagate the theme that &#39;TODAY&#39; is more&nbsp;important than yesterday and tomorrow and we shall work for today.</li>
	<li>Holistic education is practiced as a phenomenon. We always strive to achieve excellence in teaching-learning activities. Continuous and Comprehensive Evaluation is an integral part of assessment.</li>
	<li>We make children physically, mentally, emotionally and culturally strong and fit.</li>
      </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <br><h2 class="card-title" style = "text-align:center;"><strong>VISION</strong></h2><br>
                    <p class="card-text">An individual differs from others due to his vision of life, which includes his values and ideals. To develop the right vision in our children, is to create a generation of truly educated, refined and noble citizens, inspired and equipped to serve the world in various capacities, thereby fulfilling their lives.</p>

                    <p class="card-text">The purpose of education is the overall unfolding and gentle blossoming of the child at the physical, emotional, intellectual and spiritual levels of his/her personality.</p>

<p class="card-text">True education complements academic excellence with character and personality development. Elite school provides the best environment where the student can unfold within and shine without.</p>
<p class="card-text"><strong>"When you appeal to the highest level of thinking, you get the highest level of performance." Jack Stack</strong></p>
                </div>
                <img src="https://cdn.pixabay.com/photo/2018/03/17/10/50/vision-3233648_640.jpg" class="card-img-top" alt="img" style="width:auto; height:215px;">
            </div>
        </div>
    </div>
</div>

<h1 class="text-center mt-4">MEET OUR FACULTY</h1><br>

<section class="team-section spad" style="background-color:lightblue;">
    <div class="container" >
        <div class="row">
            <div class="ts-slider owl-carousel">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-lg-4">
                    <div class="ts-item">
                        <img class="ts-image" src="gyt/admin/uploads/<?php echo $row['image']; ?>" alt="<?php echo $row['fullname']; ?>">
                        <div class="ts_text">
                            <h4><?php echo $row['fullname']; ?></h4>
                            <span><?php echo $row['qualification']; ?></span>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?> 
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>

<div class="text-center mt-5">
        <a href="Teams.php" class="btn btn-outline-dark btn-lg">Read more</a>
    </div>
<div class="wrapper">
        <h1>Frequently Asked Questions</h1>
  
        <div class="faq">
            <button class="accordion">
            Why should I select Elite School for my child?
              <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
              <p>
              We have a team of highly motivated and well-qualified teachers who give individual attention to the students.
              </p>
            </div>
          </div>
    
          <div class="faq">
            <button class="accordion">
              Where is the Location?
              <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
              <p>
                  Please visit our “contact us” page to find details of our all locations.
              </p>
            </div>
          </div>
    
          <div class="faq">
            <button class="accordion">
            What is the Educational Approach in Elite Schools ?
              <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
              <p>
              The school believes in value based education with secular character. School conducts moral classes in the primary school and counselling is done by class counsellors during assembly programmes in the class.
              </p>
            </div>
          </div>
    
          <div class="faq">
            <button class="accordion">
            Are the faculty in Elite well trained?
              <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="pannel">
              <p>
              The Teaching staff in Elite school are qualified and experienced. Their teaching skills are updated through workshops conducted by various agencies.
              </p>
            </div>
          </div>
  
        
      </div>
  
      <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
  
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            this.parentElement.classList.toggle("active");
  
            var pannel = this.nextElementSibling;
  
            if (pannel.style.display === "block") {
              pannel.style.display = "none";
            } else {
              pannel.style.display = "block";
            }
          });
        }
      </script>
      <br></br>
     
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
<?php require_once('footer.php'); ?>   
</body>
</html>
