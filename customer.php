<?php


include("connect.php");
$query = "select * from customer";
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
        <div class="side-background bg-secondary">
            <div class="side-menu">
                <div class="col-md-2">

                    <ul>
                        <li><a href="adminpanel.php"> Dashboard</li>


                        <li><a href="customer.php">Customer</a></li>
                        <li><a href="packages.php">Package</li>

                        <li><a href="employee.php">Employee</li>
                        <li><a href="branch.php">Branch</li>
                        <li><a href="gymEquip.php">GymEquipment</li>
                        <li><a href="equipmaintains.php">EquipMaintains</li>






                        <li>
                            <div class="dropdown show">
                                <a class="" href="#" role="button" id="dropdownMenuLink" aria-haspopup="true"
                                    aria-expanded="false">
                                </a>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-10">

            <div class="card-body">
                <table class="table table border text-center">
                    <h6 align="center">Customer Information</h6>
                    <tr class="bg-dark text-white">
                        <td>ID</td>
                        <td>F_Name</td>
                        <td>L_Name</td>
                        <td>Phone No</td>
                        <td>Email</td>
                        <td>Address</td>
                        <td>Package ID</td>
                        <td>Start Date</td>
                        <td>End Date</td>

                        <!--td>Edit</td>-->
                        <td>Delete</td>

                    </tr>


                    <tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                        <td>
                            <?php echo $row['id'] ?>
                        </td>
                        <td>
                            <?php echo $row['fname'] ?>
                        </td>
                        <td>
                            <?php echo $row['lname'] ?>
                        </td>
                        <td>
                            <?php echo $row['phone_no'] ?>
                        </td>
                        <td>
                            <?php echo $row['email'] ?>
                        </td>
                        <td>
                            <?php echo $row['address'] ?>
                        </td>
                        <td>
                            <?php echo $row['pack_id'] ?>
                        </td>
                        <td>
                            <?php echo $row['start_date'] ?>
                        </td>
                        <td>
                            <?php echo $row['end_date'] ?>
                        </td>

                        <td>
                            <a href="customerDelete.php?id=<?php echo $row["id"] ?>"> <button type="button"
                                    class="btn btn-danger">Delete</button></a>
                        </td>


                    </tr>

                    <?php
                        }
                        ?>
                </table>
            </div>

        </div>
    </div>







    <!-- loader -->


    <script src=" js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
</body>

</html>