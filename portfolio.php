<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="images/aaloka.png">
</head>

<body>
    <section class="nav-section">
        <nav class="navbar navbar-expand-lg navbar-light yellow-bg pt-4 fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="images/aaloka-logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link about-nav" href="about.html">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle service-nav" href="services.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu text-justify" aria-labelledby="navbarDropdown">
                      <div class="row">
                        <h5 class="text-center mb-4">Explore our Services</h5>
                        <div class="col-lg-4">
                            <li><a class="dropdown-item" href="services.html">Photography</a></li>
                            <li><a class="dropdown-item" href="services.html">Videography</a></li>
                            <li><a class="dropdown-item" href="services.html">Video Editing</a></li>
                            <li><a class="dropdown-item" href="services.html">Digital Marketing</a></li>
                            <li><a class="dropdown-item" href="services.html">Film Production</a></li>
                            <li><a class="dropdown-item" href="services.html">Film School</a></li>
                        </div>
                        <div class="col-lg-4">
                            <img src="images/dropdown.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-4">
                            <i><h6 class="mt-4 ">Lorem ipsum dolor sit amet consectetur Donec odio lacus, tempus quis placerat a, congue sit
                                amet dolor</h6></i>
                        </div>
                      </div>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link portfolio-nav active" href="portfolio.html">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link blog-nav" href="blog.html">Blog</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <a href="contact.html"><button class="btn btn-sm  contact-btn wobble-horizontal" type="submit">Contact</button></a>
                </form>
              </div>
            </div>
          </nav>

        





    <!-- ------------------------------------portfolio start---------------------------------------------- -->



    <section class="portfolio" id="portfolio">
        <div class="container">
            <h3 class="text-center fw-bold text-white">PORTFOLIO</h3>
            <img src="images/underline.png" alt="" class="img-fluid underline">
            <div class="portfolio-para"><p class="content-color">Aaloka creations, is an integrated production house for Ad Films & Short Films
                based in Puthanathani near Kottakkal in Malappuram district, Kerala. Conceived with the idea of bringing
                in uniqueness in our advertisements, we utilize the creative mind of film making, which makes our ads
                visually enriching which soothes the viewer's visions.Aaloka creations, is an integrated production
                house for Ad Films & Short Films based in Puthanathani near Kottakkal in Malappuram district, Kerala.
                Conceived with the idea of bringing in uniqueness in our advertisements, we utilize the creative mind of
                film making, which makes our ads visually enriching which soothes the viewer's visions.Aaloka creations,
                is an integrated production house for Ad Films & Short Films based in Puthanathani near Kottakkal in
                Malappuram district, Kerala.</p></div>

            <!-- <div class="portfolio-gallery"></div> -->
            <!-- <div class = "row">
                    
                </div> -->

            <div class="portfolio-gallery">
                <div class="row mt-3 mb-4 button-group filter-button-group">
                    <div class="col d-flex filter-buttons">
                        <button type="button" data-filter="*" class="btn btn-primary mx-1 active
                        ">All</button>
                        <button type="button" data-filter=".webdevelopment" class="btn btn-primary mx-1">Web
                            Development</button>
                        <button type="button" data-filter=".web-app-development" class="btn btn-primary mx-1 ">Web
                            App Development</button>
                        <button type="button" data-filter=".softwaredevelopment" class="btn btn-primary mx-1 ">Software
                            Development</button>
                        <button type="button" data-filter=".digitalmarketing" class="btn btn-primary mx-1">Digital
                            Marketing</button>

                    </div>
                </div>

                <div class="row justify-content-center g-4" id="portfolio-works">
                    <?php
                        $sql = "select * from tbl_portfolio";
                        $run = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($run)){

                            $img = $row["img"];
                        
                        }
                    ?> 
                    <div class="col-lg-4 col-md-6 webdevelopment mt-4">
                        <div class="hvrbox">
                            <div class="portfolio-img">
                                <img src="./admin/assets/images/portfolio/<?php echo $img ?>" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                    </div>
                    

                    
                </div>
            </div>



        </div>
    </section>

    <!-- ------------------------------------portfolio end---------------------------------------------- -->




   





    <!-- ------------------------------------footer start---------------------------------------------- -->


    <?php include('footer.php') ?>


    <!-- ------------------------------------footer end---------------------------------------------- -->


    <?php include('script.php') ?>





</body>

</html>