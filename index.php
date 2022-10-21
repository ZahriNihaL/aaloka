<?php

include("admin/includes/db.php");

?>

<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <title>Aaloka</title>
    
    <link rel="icon" type="image/x-icon" href="images/aaloka.png">

    <?php include('style.php') ?>

</head>

<body>

<?php include('contents/nav.php') ?>

<section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>Lorem ipsum dolor sit amet consectetur </h1>
                        <p>Lorem ipsum dolor sit amet consectetur Donec odio lacus, tempus quis placerat a, congue sit
                            amet dolor</p>
                        <button class="btn wobble-horizontal">Learn more</button>
                        <div class="home-icons">
                            <div class="d-flex">
                                <div class="fb">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="insta">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="whatsapp">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path
                                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="images/home-img.png" alt="" class="img-fluid vert-move">
                    </div>
                </div>
            </div>
        </section>
    </section>




    <!-- ------------------------------------about start---------------------------------------------- -->

    <section class="about">
        <div class="container">
            <h3 class="text-center fw-bold">ABOUT</h3>
            <img src="images/underline.png" alt="" class="img-fluid underline">
            <p class="content-color">Aaloka creations, is an integrated production house for Ad Films & Short Films
                based in Puthanathani near Kottakkal in Malappuram district, Kerala. Conceived with the idea of bringing
                in uniqueness in our advertisements, we utilize the creative mind of film making, which makes our ads
                visually enriching which soothes the viewer's visions.Aaloka creations, is an integrated production
                house for Ad Films & Short Films based in Puthanathani near Kottakkal in Malappuram district, Kerala.
                Conceived with the idea of bringing in uniqueness in our advertisements, we utilize the creative mind of
                film making, which makes our ads visually enriching which soothes the viewer's visions.Aaloka creations,
                is an integrated production house for Ad Films & Short Films based in Puthanathani near Kottakkal in
                Malappuram district, Kerala. Conceived with the idea of bringing in uniqueness in our advertisements, we
                utilize the creative mind of film making, which makes our ads visually enriching which soothes the
                viewer's visions.Aaloka creations, is an integrated production house for Ad Films & Short Films based in
                Puthanathani near Kottakkal in Malappuram district, Kerala. Conceived with the idea of bringing in
                uniqueness in our advertisements, we utilize the creative mind of film making, which makes our ads
                visually enriching which soothes the viewer's visions.</p>
            <div class="text-center">
                <button class="btn btn-sm wobble-horizontal">Learn more</button>
            </div>

        </div>
    </section>

    <!-- ------------------------------------about end---------------------------------------------- -->




    <!-- ------------------------------------services start---------------------------------------------- -->

    <section class="services">
        <div class="container">
            <h3 class="text-center fw-bold text-white">SERVICES</h3>
            <img src="images/underline.png" alt="" class="img-fluid underline">
            <!-- <img src="images/services-bg.png" alt="" class="service-img-bg1">
            <img src="images/services-bg.png" alt="" class="service-img-bg2"> -->
            <p class="content-color">Aaloka creations, is an integrated production house for Ad Films & Short Films
                based in Puthanathani near Kottakkal in Malappuram district, Kerala. Conceived with the idea of bringing
                in uniqueness in our advertisements, we utilize the creative mind of film making, which makes our ads
                visually enriching which soothes the viewer's visions.Aaloka creations, is an integrated production
                house for Ad Films & Short Films based in Puthanathani near Kottakkal in Malappuram district, Kerala.
                Conceived with the idea of bringing in uniqueness in our advertisements, we utilize the creative mind of
                film making, which makes our ads visually enriching which soothes the viewer's visions.Aaloka creations,
                is an integrated production house for Ad Films & Short Films based in Puthanathani near Kottakkal in
                Malappuram district, Kerala.</p>
            <div class="service-cards">
                <div class="row mb-5">

                    <?php

                        $sql = "select * from tbl_services";
                        $run = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($run)) {

                            $img = $row["img"];
                            $title = $row["title"];
                            $description = $row["description"];

                    ?>
                    
                    <div class="col-lg-4 card-top-gap mt-2">
                        <div class="service-card-bg">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <a href="#"><img src="./admin/assets/images/services/<?php echo $img ?>"></a>
                                    <h5 class="card-title text-white text-center"><?php echo $title ?></h5>
                                    <p class="card-text content-color"><?php echo $description ?></p>
                                    <div class="text-center">
                                        <a href="#">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php } ?>

                    

                    


                </div>



                
                




            </div>
        </div>
    </section>
    <!-- ------------------------------------services end---------------------------------------------- -->






    <!-- ------------------------------------portfolio start---------------------------------------------- -->

    <!-- <section class="portfolio">
        <div class="container">
            <h3 class="text-center fw-bold text-white">SERVICES</h3>
            <img src="images/underline.png" alt="" class="img-fluid underline" >
            <p class="content-color">Aaloka creations, is an integrated production house for Ad Films & Short Films based in Puthanathani near Kottakkal in Malappuram district, Kerala. Conceived with the idea of bringing in uniqueness in our advertisements, we utilize the creative mind of film making, which makes our ads visually enriching which soothes the viewer's visions.Aaloka creations, is an integrated production house for Ad Films & Short Films based in Puthanathani near Kottakkal in Malappuram district, Kerala. Conceived with the idea of bringing in uniqueness in our advertisements, we utilize the creative mind of film making, which makes our ads visually enriching which soothes the viewer's visions.Aaloka creations, is an integrated production house for Ad Films & Short Films based in Puthanathani near Kottakkal in Malappuram district, Kerala.</p>
            
        </div>
    </section> -->



    <section class="portfolio" id="portfolio">
        <div class="container">
            <h3 class="text-center fw-bold text-white text-uppercase">portfolio</h3>
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

                        <?php
           
                            $sql = "select * from tbl_category";
                            $run = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($run)){

                                $id = $row["id"];
                                $category_name = $row["category_name"];
                            
                                
                        ?>      
                        <button type="button" data-filter=".<?php echo $id ?>" class="btn btn-primary mx-1"><?php echo $category_name ?></button>

                        <?php } ?>

                        <a href="portfolio.php"><button type="button" class="btn btn-primary mx-auto view-all ">VIEW ALL</button></a>

                    </div>
                </div>

                <div class="row justify-content-center g-4" id="portfolio-works">
                    <?php
                    
                      $sql = "select * from tbl_portfolio";
                      $run = mysqli_query($con,$sql);
                      while($row=mysqli_fetch_array($run)){

                          $img = $row["img"];

                    ?>
                    <div class="col-lg-4 col-md-6 webdevelopment mt-4">
                        <div class="hvrbox">
                            <div class="portfolio-img">
                                <img src="admin/assets/images/portfolio/1.png" class="img-fluid  mx-auto">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------portfolio end---------------------------------------------- -->




    <!-- ------------------------------------customers start---------------------------------------------- -->


    <section class="customers">
        <div class="container">
            <h3 class="text-center fw-bold text-white">TRUSTED CUSTOMERS</h3>
            <img src="images/underline.png" alt="" class="img-fluid underline">
            <div class="customer-para"><p class="content-color">Aaloka creations, is an integrated production house for Ad Films & Short Films
                based in Puthanathani near Kottakkal in Malappuram district, Kerala. Conceived with the idea of bringing
                in uniqueness in our advertisements, we utilize the creative mind of film making, which makes our ads
                visually enriching which soothes the viewer's visions.Aaloka creations, is an integrated production
                house for Ad Films & Short Films based in Puthanathani near Kottakkal in Malappuram district, Kerala.
                Conceived with the idea of bringing in uniqueness in our advertisements, we utilize the creative mind of
                film making, which makes our ads visually enriching which soothes the viewer's visions.Aaloka creations,
                is an integrated production house for Ad Films & Short Films based in Puthanathani near Kottakkal in
                Malappuram district, Kerala.</p></div>

          

            <div class="customer-logos">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">

                          <?php
                            $sql = "select * from tbl_customers";
                            $run = mysqli_query($con , $sql);
                            $count = mysqli_num_rows($run);

                            $loop = 0;

                            while($row = mysqli_fetch_array($run)){

                              $loop ++;
                              $img = $row["image"];
                          ?>

                            <div class="col-lg-3">
                                <img src="./admin/assets/images/customers/<?php echo $img ?>" >
                            </div>

                            <?php
                              if ($loop % 4 == 0 || $loop == $count) {
                            ?>

                        </div>
                      </div>

                      <?php
                        if ($loop !=  $count) { 
                      ?>
                        <div class="carousel-item">
                        <div class="row">

                        <?php }
                            }
                          }
                        ?>
                     

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
             



        </div>
    </section>


    <!-- ------------------------------------customers end---------------------------------------------- -->






    <!-- ------------------------------------blog start---------------------------------------------- -->


    <section class="blog">
        <div class="container">
            <h3 class="text-center fw-bold text-white">BLOG</h3>
            <img src="images/underline.png" alt="" class="img-fluid underline">
            <div class="blog-para"><p class="content-color">Aaloka creations, is an integrated production house for Ad Films & Short Films
                based in Puthanathani near Kottakkal in Malappuram district, Kerala. Conceived with the idea of bringing
                in uniqueness in our advertisements, we utilize the creative mind of film making, which makes our ads
                visually enriching which soothes the viewer's visions.Aaloka creations, is an integrated production
                house for Ad Films & Short Films based in Puthanathani near Kottakkal in Malappuram district, Kerala.
                Conceived with the idea of bringing in uniqueness in our advertisements, we utilize the creative mind of
                film making, which makes our ads visually enriching which soothes the viewer's visions.Aaloka creations.
            </p></div>

            <div class="row blog-cards">

              <?php

                $sql = "select * from tbl_blog";
                $run = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($run)) {

                    $img = $row["img"];
                    $title = $row["title"];
                    $description = $row["description"];

              ?>
                <div class="col-lg-4">
                    <div class="card" >
                        <img src="images/blog/<?php echo $img ?>" class="card-img-top" >
                        <div class="card-body">
                            <div class="overlay">
                          <h5 class="card-title  text-white"><?php echo $title ?></h5>
                          <p class="card-text content-color"><?php echo $description ?></p><br>
                            <a href="#">VIEW MORE</a>
                          </div>
                        </div>
                      </div>
                </div>
                <?php } ?>
                
            </div>

            <div class="text-center">
                <a href=""  class="view-all mt-5">VIEW ALL<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg></a>
            </div>
        </div>
    </section>

    <!-- ------------------------------------blog end---------------------------------------------- -->







    <!-- ------------------------------------testimonial start---------------------------------------------- -->


    <section class="testimonial">
        <div class="container">
            <h3 class="text-center fw-bold text-white">TESTIMONIAL</h3>
            <img src="images/underline.png" alt="" class="img-fluid underline">
            <div class="testimonial-para"><p class="content-color">Aaloka creations, is an integrated production house for Ad Films & Short Films
                based in Puthanathani near Kottakkal in Malappuram district, Kerala. Conceived with the idea of bringing
                in uniqueness in our advertisements, we utilize the creative mind of film making, which makes our ads
                visually enriching which soothes the viewer's visions.Aaloka creations, is an integrated production
                house for Ad Films & Short Films based in Puthanathani near Kottakkal in Malappuram district.
            </p></div>

            <div class="testimonial-carousel">
                <div id="carouselExampleIndicator" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <!-- <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">

                          <?php
            
                            $sql = "select * from tbl_testimonial"; 
                            $run = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($run)){

                              $id = $row["id"];
                              $name = $row["name"];
                              $designation = $row["designation"];
                              $img = $row["img"];
                              $description = $row["description"]; 
                            
                          ?>

                            <div class="col-lg-4">
                                <div class="testimonial-cards">
                                    <div class="testimonial-card-bg">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="testimonial-img-bg  mb-4">
                                                            <img src="./admin/assets/images/testimonial/<?php echo $img ?>" class="card-img-top" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <h6 class="text-white card-title text-uppercase mt-4">Lorem ipsum dolor sit amet, consectetur !</h6>
                                                    </div>
                                                </div>
                                              <p class="card-text content-color mt-4"><?php echo $description?></p>
                                              <p class="text-white fw-bold"><?php echo $name ?></p>
                                              <p class="content-color designation"><?php echo $designation ?></p>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>

                        </div>
                      </div>

                      <div class="carousel-item">
                        <div class="row">        
                        </div>
                      </div>
                      <!-- <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                      </div> -->
                    </div>   
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------testimonial end---------------------------------------------- -->


    



    <!-- ------------------------------------team start---------------------------------------------- -->


    <section class="team">
        <div class="container">
            <h3 class="text-center fw-bold text-white">MEET OUR TEAM</h3>
            <img src="images/underline.png" alt="" class="img-fluid underline">
            <p class="content-color">Aaloka creations, is an integrated production house for Ad Films & Short Films
                based in Puthanathani near Kottakkal in Malappuram district, Kerala. Conceived with the idea of bringing
                in uniqueness in our advertisements, we utilize the creative mind of film making, which makes our ads
                visually enriching which soothes the viewer's visions.Aaloka creations, is an integrated production
                house for Ad Films & Short Films based in Puthanathani near Kottakkal in Malappuram district.
            </p>
            <div class="team-carousel">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">

                          <?php
            
                            $sql = "select * from tbl_team";
                            $run = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($run)){

                                $id = $row["id"];
                                $img = $row["img"];
                                $title = $row["name"];
                                $designation = $row["designation"];
                              
                              
                          ?>

                            <div class="col-lg-4">
                                <div class="team-cards">
                                    <div class="card">
                                        <div class="card-body ">
                                          <div class="team-card-img-bg-1">
                                            <div class="team-card-img-bg">
                                                <img src="./admin/assets/images/team/<?php echo $img ?>" class="card-img-top mt-3" alt="...">
                                              </div>
                                          </div>
                                          <h6 class="card-title text-center fw-bold text-white mt-3"><?php echo $title ?></h6>
                                          <p class="card-text text-center"><?php echo $designation ?></p>
                                          <div class="d-flex social-icons mb-3">
                                            <a href=""><i class="fa fa-facebook-f"></i></a>
                                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            <a href=""><i class="fa fa-linkedin"></i></a>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <?php }?>
                            
                        </div>
                      </div>
                      
                            
                    

                    </div>
                    <button class="carousel-control-prev  position-absolute top-50 start-0 translate-middle d-none d-md-block" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next  osition-absolute top-50 start-100 translate-middle d-none d-md-block" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------team end---------------------------------------------- -->







    <!-- ------------------------------------contact start---------------------------------------------- -->

    <section class="contact">
        <div class="container">
            <h3 class="text-center fw-bold text-white">CONTACT US   </h3>
            <img src="images/underline.png" alt="" class="img-fluid underline">
            <div class="contact-para"><p class="content-color">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
            </p></div>
            <div class="row">
                <div class="col-lg-6">
                    <form class="mt-5">
                        <h6 class="text-white text-uppercase text-center  mt-3 mb-3">Lorem ipsum dolor sit amet !</h6>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputname1" aria-describedby="emailHelp" placeholder="Name">
                        </div>
                        <div class="mb-3">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputSubject" aria-describedby="emailHelp" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <input type="phone" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Phone">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                          </div>
                        <div class="text-center">
                            <button type="submit" class="btn text-white wobble-horizontal">Submit</button>
                        </div>
                      </form>
                </div>
                <div class="col-lg-6 contact-img">
                    <img src="images/contact-bg.png" alt="" class="img-fluid">
                </div>
            </div>

            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title content-color text-center text-uppercase mt-3">Lorem Ipsum es simplemente el texto de.</h5>
                      <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                    <div class="row text-center mt-5">
                      
                      <?php

                        $sql = "select * from tbl_company where id='1'";
                        $run = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($run);

                        $company_name = $row["company_name"];
                        $place = $row["place"];
                        $email1 = $row["email1"];
                        $phone_number1 = $row["phone_number1"];
                        $phone_number2 = $row["phone_number2"];
                        $link = $row["link"];
                        $facebook = $row["facebook"];
                        $instagram = $row["instagram"];
                        $watsapp = $row["watsapp"];

                      ?>
                        <div class="col-lg-3 mail ">
                            <div class="contact-address-bg">
                                <h6 class="content-color fw-bold text-uppercase text-center">Email</h6>
                                <a href="" class="content-color"><?php echo $email1 ?></a><br><br>
                                <a href="aalokacreations@gmail.com"> <img src="images/contact/email.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>

                        <div class="col-lg-3 mail">
                            <div class="contact-address-bg">
                                <h6 class="content-color fw-bold text-uppercase text-center">Location</h6>
                                <p class="content-color text-center"><?php echo $place ?></p>
                                <a href=""><img src="images/contact/location.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>

                        <div class="col-lg-3 mail">
                            <div class="contact-address-bg">
                                <h6 class="content-color fw-bold text-uppercase text-center">Phone</h6>
                                <p class="content-color text-center"><?php echo $phone_number1 ?> ,<?php echo $phone_number2 ?></p>
                                <img src="images/contact/telephone.png" alt="" class="img-fluid ">
                            </div>
                        </div>

                        <div class="col-lg-3 ">
                            <div class="contact-address-bg">
                                <h6 class="content-color fw-bold text-uppercase text-center">social media</h6>
                                <p class="content-color text-center">Follow Us On</p>
                                <div class="d-flex social-media">
                                    <a href="https://www.facebook.com/aaloka.advertising/"><i class="fa fa-facebook-f"></i></a>  
                                    <a href="https://www.instagram.com/aalokaadvertising/"><i class="fa fa-instagram"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                    <a href=""><i class="fa fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>

                      

                        
                      <!-- </div></div></div></div></div></section> -->


                    </div>
                </div>
            </div>



        </div>
    </section>

    <!-- ------------------------------------contact end---------------------------------------------- -->

    <!-- ------------------------------------footer start---------------------------------------------- -->

  
    <?php include('footer.php') ?>


    <!-- ------------------------------------footer end---------------------------------------------- -->


    <?php include('script.php') ?>


</body>

</html>