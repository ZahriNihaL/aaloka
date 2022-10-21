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

    <?php include('style.php') ?>

    <title>About</title>

    <link rel="icon" type="image/x-icon" href="images/aaloka.png">

</head>

<body>
    

<?php include('contents/nav.php') ?>

    <!-- ------------------------------------about start---------------------------------------------- -->

        <section class="about-page">
            <div class="container">
                <!-- <img src="images/about/Untitled-2.png" alt="" class="img-fluid bg-1"> -->
                <div class="row">
                    <div class="col-lg-6 about-column d-none d-md-block">
                        <div class="about-content-1">
                            <p class="content-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus lacinia nulla pellentesque mollis.</p>
                            <p class="content-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus lacinia nulla pellentesque mollis.</p>

                        </div>
                        <!-- <img src="images/about/Untitled-1.png" alt="" class="img-fluid"> -->
                    </div>
                    <div class="col-lg-6">
                        <h3 class="text-center fw-bold text-white text-uppercase ">Let's know more about US   </h3>
                        <img src="images/underline.png" alt="" class="img-fluid underline">
                        <p class="content-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus lacinia nulla pellentesque mollis. Aenean convallis ligula vitae leo efficitur, a accumsan augue eleifend. Sed vitae orci molestie mi gravida varius id ac est. Nullam posuere viverra blandit. Aenean vitae odio est. Quisque ultricies nunc nec lacus imperdiet, quis mattis lacus posuere. Quisque porttitor diam id dictum convallis. Vivamus laoreet nisl volutpat pellentesque suscipit. Ut viverra erat ultrices consectetur elementum. Proin consequat mollis ex, et rutrum ipsum pharetra vitae. Sed blandit dui a dignissim scelerisque. Quisque sit amet lacinia quam. Etiam tempor velit non orci facilisis, sed tempor arcu blandit. Fusce congue cursus scelerisque. Vestibulum tempor leo quis lorem elementum, quis feugiat elit suscipit. Suspendisse interdum, elit at fermentum maximus, elit lorem accumsan erat, vel sagittis ligula nulla et ante. Praesent placerat porttitor turpis, eget gravida ex pharetra id. Fusce imperdiet in lorem ut commodo. Pellentesque et iaculis lectus.. Cras et mattis arcu. Nulla et nisl tortor. Phasellus vitae molestie diam.</p>
                        <p class="content-color">Curabitur tristique nibh eu sem egestas auctor. Praesent dignissim malesuada accumsan. Integer elementum porttitor vehicula. Nam sollicitudin nisl nulla, id ultricies arcu consectetur eget. Vivamus venenatis hendrerit feugiat. Vestibulum tincidunt interdum commodo. Integer ullamcorper massa vel justo rhoncus, id pulvinar ipsum facilisis. Morbi id facilisis quam, et molestie metus. Morbi semper est et eleifend ornare. Nam mollis porttitor leo, at volutpat neque iaculis at. Nullam porttitor urna sit amet nisi aliquet, vitae mollis dui mattis. Mauris eget dictum turpis. Curabitur posuere magna a urna mollis auctor.</p>
                    </div>
                </div>
            
            
        </div>
        </section>

        <section class="about-customer-carousel">
            <div class="container">
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
                                <img src="./admin/assets/images/customers/<?php echo $img ?>" alt="" class="img-fluid">
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
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button> -->
                  </div>
            </div>
        </section>



    

    <!-- ------------------------------------about end---------------------------------------------- -->






    <!-- ------------------------------------our story end---------------------------------------------- -->

        <section class="story">
            <div class="container">
                <h3 class="text-center fw-bold text-white text-uppercase">our story starts from here</h3>
                <img src="images/underline.png" alt="" class="img-fluid underline">
                <div class="story-para"><p class="content-color">Aaloka creations, is an integrated production house for Ad Films & Short Films
                    based in Puthanathani near Kottakkal in Malappuram district, Kerala. Conceived with the idea of bringing
                    in uniqueness in our advertisements, we utilize the creative mind of film making, which makes our ads
                    visually enriching which soothes the viewer's visions.Aaloka creations, is an integrated production
                    house for Ad Films & Short Films based in Puthanathani near Kottakkal in Malappuram district, Kerala.
                    Conceived with the idea of bringing in uniqueness in our advertisements, we utilize the creative mind of
                    film making, which makes our ads visually enriching which soothes the viewer's visions.Aaloka creations.
                </p></div>
                <div class="row story-contents">
                    <div class="col-lg-6">
                        <div class="container story-img">
                            <img src="images/about/w.jpg" alt="" class="img-fluid">
                            <h5 class="text-white text-center mt-3">Lorem ipsum dolor sit amet</h5>
                            <p class="content-color text-uppercase text-center">2017 august 25</p>
                            <p class="content-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio lacus, tempus quis placerat a, congue sit amet dolor.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="containe story-img">
                            <img src="images/about/w.jpg" alt="" class="img-fluid">
                            <h5 class="text-white text-center mt-3">Lorem ipsum dolor sit amet</h5>
                            <p class="content-color text-uppercase text-center">2017 august 25</p>
                            <p class="content-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio lacus, tempus quis placerat a, congue sit amet dolor.</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="container story-img">
                            <img src="images/about/w.jpg" alt="" class="img-fluid">
                            <h5 class="text-white text-center mt-3">Lorem ipsum dolor sit amet</h5>
                            <p class="content-color text-uppercase text-center">2017 august 25</p>
                            <p class="content-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio lacus, tempus quis placerat a, congue sit amet dolor.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="container  story-img">
                            <img src="images/about/w.jpg" alt="" class="img-fluid">
                            <h5 class="text-white text-center mt-3">Lorem ipsum dolor sit amet</h5>
                            <p class="content-color text-uppercase text-center">2017 august 25</p>
                            <p class="content-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio lacus, tempus quis placerat a, congue sit amet dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- ------------------------------------our story end---------------------------------------------- -->



    <!-- ------------------------------------footer start---------------------------------------------- -->


    <?php include('footer.php') ?>


    <!-- ------------------------------------footer end---------------------------------------------- -->


    <?php include('script.php') ?>


</body>

</html>