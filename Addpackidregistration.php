<!doctype html>
<?php
include "connect.php";
session_start();
$userId = $_SESSION['log'];
if (isset($_POST["pack_select"])) {

    $package = $_POST['package'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];


    $sql_query = "UPDATE customer set pack_id='$package', start_date='$start_date' , end_date='$end_date' where id='$userId'   ";

    $result = mysqli_query($conn, $sql_query);

    if ($result) {
        header("Location: login.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>
<html lang="en">

<head>
    <title>Colorlib Fitnezz</title>
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
                <a class="navbar-brand" href="index.html">Fitnes<span>Life</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample05">
                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="home-slider-loop-false  inner-page owl-carousel">
        <div class="slider-item" style="background-image: url('img/gym-1.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>Registration Now</h1>
                    </div>
                </div>
            </div>


        </div>

    </section>

    <!-- END slider -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>

                <div class="col-md-6">
                    <div class="form-wrap overlap primary element-animate">
                        <h2 style="text-align:center" class="h2">Registration</h2>


                        <form action="" method="post">




                            <div class="form-group">
                                <label class="form-label">
                                    <p style="color:white ">Package ID:</p>
                                </label>
                                <select name="package" id="">

                                    <?php
                                    include "connect.php";
                                    $pack_id = mysqli_query($conn, "SELECT * from package");
                                    while ($c = mysqli_fetch_array($pack_id)) {
                                        ?>

                                    <option value="<?php echo $c['Package_id'] ?>">
                                        <?php echo $c['Package_id'] ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    <p style="color:white ">Start Date:</p>
                                </label>

                                <input type="date" class="form-control" name="start_date" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    <p style="color:white ">End Date:</p>
                                </label>
                                <input type="date" class="form-control" name="end_date" placeholder="" required>
                            </div>

                            <div class="form-group" color="white">
                                <p style="color:white">Already have an Account? <a style="color:blue" href="login.php">
                                        Login Now</a></p>
                            </div>
                            <br>


                            <div class="form-group">

                                <input type="submit" class="btn btn-success btn-block py-3" name="pack_select"></input>


                            </div>



                        </form>




                    </div>
                </div>



            </div>
        </div>
    </section>



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