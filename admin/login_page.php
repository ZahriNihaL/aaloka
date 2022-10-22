<?php
// session_start();
// if (isset($_SESSION["loggedin"])) {
//   header("Location:index.php");
// }

include("includes/db.php");

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="admin/assets/css/login_style.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <!-- <link rel="stylesheet" href="../admin/assets/css/style.css"> -->
  <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>

<div class="col-lg-2 sidebar-left">
    <div class="profile d-flex mx-3">
        <img src="assets/images/camera.png" class=" me-3">
        <div class="profile-details">
            <div class="profile-name" style="font-family:'Poppins' ;">AALOKA</div>
            <div class="profile-description">CREATIONS</div>
        </div>
    </div>

    <ul class="nav flex-column" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link active home-nav" href="home.php">
            <i class="bi bi-house"></i>Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link about-nav" href="about.php">
            <i class="bi bi-file-earmark-slides"></i>About</a>
        </li>

        <li class="nav-item">
            <a class="nav-link category-nav" href="category.php">
            <i class="bi bi-file-earmark-slides"></i>Category</a>
        </li>

        <li class="nav-item">
            <a class="nav-link services-nav" href="services.php">
            <i class="bi bi-bucket-fill"></i>Services</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link portfolio-nav" href="portfolio.php">
            <i class="bi bi-tv"></i>Portfolio</a>
        </li>

        <li class="nav-item">
            <a class="nav-link about-nav" href="customers.php">
            <i class="bi bi-file-earmark-slides"></i>Customers</a>
        </li>

        <li class="nav-item">
            <a class="nav-link blog-nav" href="blog.php">
            <i class="bi bi-soundwave"></i>Blog</a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link about-nav" href="testimonial.php">
            <i class="bi bi-file-earmark-slides"></i>Testimonial</a>
        </li>

        <li class="nav-item">
            <a class="nav-link about-nav" href="team.php">
            <i class="bi bi-file-earmark-slides"></i>Team</a>
        </li>

        <li class="nav-item">
            <a class="nav-link about-nav" href="contact.php">
            <i class="bi bi-file-earmark-slides"></i>Contact Us</a>
        </li>

        <li class="nav-item">
            <a class="nav-link about-nav" href="footer.php">
            <i class="bi bi-file-earmark-slides"></i>Footer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link about-nav" href="settings.php">
            <i class="bi bi-file-earmark-slides"></i>Settings</a>
        </li>
       
        <form method="POST" action="functions/functions.php">
            <li class="nav-item">
                <a class="nav-link logout-nav" href="#" type="submit" name="logout"><i class="bi bi-person-circle"></i>Logout</a>
            </li>
        </form>
    </ul>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>