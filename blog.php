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

    <title>Blog</title>
    <link rel="icon" type="image/x-icon" href="images/aaloka.png">
</head>

<body>
   
  <?php include('contents/nav.php') ?>

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
                        <img src="images/blog/blog-img1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="overlay">
                              <h5 class="card-title  text-white">Lorem ipsum dolor </h5>
                              <p class="card-text content-color">Lorem ipsum dolor  sit amet, consectetur adipiscing</p><br>
                          
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
   

    <!-- ------------------------------------footer start---------------------------------------------- -->


    <?php include('footer.php') ?>


    <!-- ------------------------------------footer end---------------------------------------------- -->


  <?php include('script.php') ?>



</body>

</html>