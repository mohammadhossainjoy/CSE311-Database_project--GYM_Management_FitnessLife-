<?php
session_start();
include("connect.php");

if (isset($_POST['login'])) {
  $sql = mysqli_query(
    $conn,
    "SELECT * FROM customer WHERE email='"
    . $_POST["email"] . "' AND
    password='" . $_POST["password"] . "'    "
  );

  $num = mysqli_num_rows($sql);

  if ($num > 0) {

    $rt = mysqli_fetch_assoc($sql);
    $userId = $rt['id'];
    $pack = $rt['pack_id'];
    $_SESSION['logpack'] = $pack;
    $_SESSION['log'] = $userId;
    $_SESSION['successMsg'] = "Welcome";
    header("location:profile.php");
    exit();
    
} else {
$_SESSION['errorMsg'] = "Invalid Login credentials";

                      
                    

}
}
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
                <a class="navbar-brand" href="">Fitnes<span>Life</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav mr-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link" href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about.html">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="package.html">Package</a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>



                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item cta-btn">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                    </ul>

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
                        <h1>Login Now</h1>
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
                    <div class="form-wrap overlap element-animate">

                        <h2 style="text-align:center" class="h2">Login</h2>

                        <!--login form start-->
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="form-group">
                                <p>Don't have an Account? <a href="registration.php"> Registration Now</a></p>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block py-3" value="Login" name="login">
                            </div>




                        </form>
                        <!--login form end-->

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