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

    <title>Services</title>
    <link rel="icon" type="image/x-icon" href="images/aaloka.png">
</head>

<body>

<?php include("./contents/nav.php"); ?>


    <!-- ------------------------------------services start---------------------------------------------- -->

        <section class="services-page">
            <div class="services-header">
            </div>

            <div class="container ">
                <h3 class="text-center fw-bold text-white text-uppercase">OUR SERVICES will help you to build your dream</h3>
                <img src="images/underline.png" alt="" class="img-fluid underline">
                <p class="content-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra nibh tellus, quis cursus libero tincidunt in. Ut aliquet, lorem sit amet feugiat vulputate, lorem eros tempus sem, et suscipit risus neque a odio. Donec non ipsum non magna sollicitudin porttitor. Pellentesque eros magna, tincidunt quis purus nec, placerat dignissim enim. Vivamus aliquam eu purus quis tincidunt.</p>
                <div class="services-page-cards">

                    <div class="row">

                        <?php

                          $sql = "select * from tbl_services";
                          $run = mysqli_query($con, $sql);
                          while ($row = mysqli_fetch_array($run)) {

                              $img = $row["img"];
                              $title = $row["title"];
                              $description = $row["description"];

                        ?>
                        
                        <div class="col-lg-4 service-mg m-top ">
                            <div class="card ">
                                <img src="./admin/assets/images/services/<?php echo $img ?>" class="card-img-top img-fluid" alt="Photography" >
                                <div class="card-body">
                                  <h5 class="card-title text-white text-center"><?php echo $title ?></h5>
                                  <p class="card-text content-color"><?php echo $description ?></p>
                                  <div class="text-center">
                                    <button class="btn btn-primary text-uppercase btn-sm fw-bold wobble-horizontal">Know more</button>
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


    
    <!-- ------------------------------------footer start---------------------------------------------- -->

    <?php include('footer.php') ?>
   
    <!-- ------------------------------------footer end---------------------------------------------- -->


   <?php include('script.php') ?>




</body>

</html>