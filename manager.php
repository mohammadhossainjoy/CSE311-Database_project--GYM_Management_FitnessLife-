<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fitness Life</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <li><a href="adminpanel.php"> Dashboard</li>
                        <li><a href="customer.php">Customer</a></li>
                        <li><a href="packages.php">Package</li>

                        <li><a href="employee.php">Employee</li>
                        <li><a href="branch.php">Branch</li>
                        <li><a href="gymEquip.php">GymEquipment</li>
                        <li><a href="equipmaintains.php">EquipMaintains</li>

                    </ul>
                </div>
            </div>

        </div>

        <div class="col-md-10">
            <!--  Trainer-->
            <div class="container">
                <?php
                  if (isset($_GET["msg"])) {
                       $msg = $_GET["msg"];
                       echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        ' . $msg . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                    }
                ?>
                <h1></h1>
                <a href="addmanager.php" class="btn btn-dark mb-3">Add New Manager</a>
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Employee ID</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Employee Address</th>
                            <th scope="col">SSN</th>
                            <th scope="col">Employee Phone No</th>

                            <th scope="col">Salary</th>
                            <th scope="col">Branch no</th>


                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           $sql_query = "SELECT e.eid,e.ename,e.eaddress,e.SSN,e.ephone_number,e.Salary,m.Br_no
                           FROM employee as e join manager as m 
                            on (e.eid=m.eid) ";
                            $result = mysqli_query($conn, $sql_query);
                         while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                        <tr>
                            <td>
                                <?php echo $row["eid"] ?>
                            </td>
                            <td>
                                <?php echo $row["ename"] ?>
                            </td>
                            <td>
                                <?php echo $row["eaddress"] ?>
                            </td>
                            <td>
                                <?php echo $row["SSN"] ?>
                            </td>
                            <td>
                                <?php echo $row["ephone_number"] ?>
                            </td>

                            <td>
                                <?php echo $row["Salary"] ?>
                            </td>
                            <td>
                                <?php echo $row["Br_no"] ?>
                            </td>



                            <td>

                                <a href="Editmanager.php?eid=<?php echo $row["eid"] ?>"> <button type="button"
                                        class="btn btn-danger">Edit</button></a>

                            </td>

                            <td>


                                <a href="Deletemanager.php?eid=<?php echo $row["eid"] ?>"> <button type="button"
                                        class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        <?php
                                }
                            ?>
                    </tbody>
                </table>



            </div>

        </div>














        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

</body>

</html>