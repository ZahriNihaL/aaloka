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

    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="images/aaloka.png">
</head>

<body>
    
  <?php include('contents/nav.php') ?>

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

                          <?php
           
                            $sql = "select * from tbl_category";
                            $run = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($run)){

                                $id = $row["id"];
                                $category_name = $row["category_name"];
                            
                                
                          ?>    

                        <button type="button" data-filter=".webdevelopment" class="btn btn-primary mx-1"><?php echo $category_name ?></button>

                        <?php } ?>
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