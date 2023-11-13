<?php
include("connect.php");
$query = "SELECT * from admin";
$result = mysqli_query($conn, $query);


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
    <link rel="stylesheet" href="css/userstyle.css">
</head>

<body>

    <nav class="navbar navbar-light bg-secondary justify-content-between">
        <a class="navbar-brand">Fitness Life</a>

    </nav>


    <div class="row">
        <div class="side-background">
            <div class="side-menu">
                <div class="col-md-2">

                    <ul>
                        <li> Dashboard</li>

                        <li><a href="customer.php">Customer</a></li>
                        <li><a href="packages.php">Package</li>

                        <li><a href="employee.php">Employee</li>
                        <li><a href="branch.php">Branch</li>
                        <li><a href="gymEquip.php">GymEquipment</li>
                        <li><a href="equipmaintains.php">EquipMaintains</li>


                        <!--
                        <li>
                            <div class="dropdown show">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Employee</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="">Trainer</a>
                                    <a class="dropdown-item" href="#">Manager</a>
                                    <a class="dropdown-item" href="maintainer.php">Maintainer</a>
                                </div>
                            </div>
                        </li>
 -->
                    </ul>

                    <!-- Example single danger button -->



                </div>
            </div>
        </div>


    </div>







    <!-- loader -->


    <script src=" js/jquery-3.2.1.min.js">
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
</body>

</html>