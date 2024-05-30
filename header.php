<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<style>
    .navbar-nav .nav-link {
    white-space: nowrap;
}
</style>

<nav class="navbar navbar-white  navbar-expand-xl" style="background-color:#023145;">
    <a href="index.php" class="navbar-brand ms-3">
        <img class="text-primary display-5" src="images/school-logo.jpg" style="z-index: inherit;padding-left: 10px;padding-top: 5px; margin-left:90px;" height="100px">
    </a>
    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars text-primary"></span>
    </button>
    <div class="collapse navbar-collapse bg-#fff" id="navbarCollapse">
        <div class="navbar-nav ms-auto" style="margin-right:100px; font-weight:bold;">
            <a class="nav-link" href="index.php" style="color:white;">Home</a>
            <a class="nav-link" href="About us.php" style="color:white;">About Us</a>
            <a class="nav-link" href="faculty.php" style="color:white;">Faculty</a>
            <a class="nav-link" href="Contact.php" style="color:white;">Contact Us</a>
            <a class="nav-link" href="gallery.php" style="color:white;">Gallery</a>
            
            <a class="nav-link" href="gyt/adminlogin.php" style="color:white;">Admin Login</a>
        </div>
    </div>
</nav>

    <script>
    $(document).ready(function () {
        // Add a click event listener to the navbar-toggler button
        $(".navbar-toggler").click(function () {
            // Toggle the show class on the navbarNav element
            $("#navbarNav").toggleClass("show");
        });

        // Add a click event listener to each nav-item, so that the menu collapses when an item is clicked
        $(".nav-item").click(function () {
            // Optionally, collapse the navbar when a nav-item is clicked
            $("#navbarNav").removeClass("show");
        });
    });
</script>
</body>
</html>
