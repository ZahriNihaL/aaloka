<?php
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/styles.css">

    <!-- Icons -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body> 
    <div class="row min-vh-100 g-0">    
        <?php include("content/navbar.php") ?>

        <div class="col-lg-10 wrapper">
            <div class="card custom-card-2 mb-3">
            <div class="card-body p-3 d-flex align-items-center justify-content-between">
                <h5 class="mb-0 fw-bold">DASHBOARD</h5>
                <!-- <a href="add_dashboard.php" class="btn btn-success" style="background-color:#FEB700;">Add Dashboard</a> -->
                <div class="d-flex">
                <div class="admin-names me-2">
                    <h6 class="fw-bold me-0 text-center mt-2">Admin</h6>
                    <p class="text-left">(Super Admin)</p>
                </div>
                <div class="user-icon">
                    <img src="assets/images/user.png" alt="" class="img-fluid mt-2">
                </div>

                </div>
            </div>
            </div>

            <div class="row mb-4">
            <div class="col-lg-2 col-md-12 col-xl-2 mb-2 ">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            ABOUT
                            <?php
                                $dash_query = "SELECT * from tbl_portfolio";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_portfolio_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.' </h4>';
                                }
                            ?>
                        </div>                      
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-xl-2 mb-2 ">
                <!-- <div class="col-sm-6 col-md-12 col-xl-5 mb-2 "> -->
                    <div class="custom-card card-left">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-file-earmark-slides"></i></div>
                            <button class="btn ms-auto text-white py-0 px-1"></button>
                        </div>
                        <div class="card-text">
                            HOME
                            <?php
                                $dash_query = "SELECT * from tbl_home";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_home_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_home_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_home_total.' </h4>';
                                }

                            ?>
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-xl-2 mb-2 ">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            PORTFOLIO
                            <?php
                                $dash_query = "SELECT * from tbl_portfolio";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_portfolio_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.' </h4>';
                                }
                            ?>
                        </div>                      
                    </div>
                </div>

                <div class="col-lg-2 col-md-12 col-xl-2 mb-3">
                    <div class="custom-card card-left">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-soundwave"></i></div>
                            <button class="btn ms-auto text-white py-0 px-1"></button>
                        </div>
                        <div class="card-text">
                            SERVICES
                            <?php
                                $dash_query = "SELECT * from tbl_services";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_services_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_services_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_services_total.' </h4>';
                                }
                            ?>
                                                       
                        </div>                        
                    </div>
                </div>

                <div class="col-lg-2 col-md-12 col-xl-2 mb-3">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            CUSTOMERS
                            <?php
                                $dash_query = "SELECT * from tbl_portfolio";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_portfolio_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.' </h4>';
                                }
                            ?>
                        </div>                      
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-xl-2 mb-3">
                    <div class="custom-card card-left">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-soundwave"></i></div>
                            <button class="btn ms-auto text-white py-0 px-1"></button>
                        </div>
                        <div class="card-text">
                            BLOG
                            <?php
                                $dash_query = "SELECT * from tbl_services";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_services_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_services_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_services_total.' </h4>';
                                }
                            ?>
                                                       
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-xl-2 mb-3">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            TESTIMONIAL
                            <?php
                                $dash_query = "SELECT * from tbl_portfolio";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_portfolio_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.' </h4>';
                                }
                            ?>
                        </div>                      
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-xl-2 mb-3">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            TEAM
                            <?php
                                $dash_query = "SELECT * from tbl_portfolio";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_portfolio_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.' </h4>';
                                }
                            ?>
                        </div>                      
                    </div>
                </div>

                
            </div>
        </div>            
        <!-- <div class="col-lg-3 sidebar-right"> -->
            