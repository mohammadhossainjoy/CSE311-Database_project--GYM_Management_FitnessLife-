<?php

include("connect.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Fitness Life</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="">Fitness<span>Life</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav mr-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="userpackagesearch.php">Package</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Admin.php">Admin</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item cta-btn">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="home-slider-loop-false  inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('img/gym-2.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>Packages</h1>

                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Start Search and Fetch data-->

    <h2 style="color:white">...</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <form action="" method="GET">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="">Start Price</label>
                            <input type="text" required name="start_price" value="<?php if (isset($_GET['start_price'])) {
                echo $_GET['start_price'];
            } else {
                echo "100";
            } ?>" class="form-control">
                        </div>
                        <div class="col-md-5">
                            <label for="">End Price</label>
                            <input type="text" required name="end_price" value="<?php if (isset($_GET['end_price'])) {
                echo $_GET['end_price'];
            } else {
                echo "900";
            } ?>" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <h6 style="color:white">...</h6>

                            <button type="submit" class="btn btn-primary px-4">Filter</button>
                        </div>
                    </div>
                </form>




                <h1></h1>

            </div>
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h5 style="text-align:center"> Packages Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                include "connect.php";

                if (isset($_GET['start_price']) && isset($_GET['end_price'])) {
                    $startprice = $_GET['start_price'];
                    $endprice = $_GET['end_price'];

                    $query = "SELECT * FROM package WHERE price BETWEEN $startprice AND $endprice ";
                } else {
                    $query = "SELECT * FROM package";
                }

                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $items) {
                        // 
                        ?>
                            <div class="col-md-4 mb-3">
                                <div class="border p-2">

                                    <h6>Package ID:
                                        <?php echo $items['Package_id']; ?>
                                    </h6>
                                    <h6>Package Name:
                                        <?php echo $items['Package_name']; ?>
                                    </h6>
                                    <h6>Package Type:
                                        <?php echo $items['type']; ?>
                                    </h6>
                                    <h6>Duration:
                                        <?php echo $items['duration']; ?>
                                    </h6>
                                    <h6>PRICE:
                                        <?php echo $items['price']; ?>
                                    </h6>
                                </div>
                            </div>
                            <?php
                    }
                } else {
                    echo "No Record Found";
                }
                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <h1></h1>





    <!-- End Search and Fetch data-->





    <!-- start footer -->
    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-12 text-md-center text-left">
                    <p>&copy;
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved by FITNESS LIFE

                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" />
        </svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
</body>

</html>