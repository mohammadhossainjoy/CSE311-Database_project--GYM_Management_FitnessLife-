<?php
session_start();
include("connect.php");

$userId = $_SESSION['log'];
$pack=$_SESSION['logpack'];
$sql_query="SELECT id,fname,lname,phone_no,email,address,Package_id,Package_name,
type,duration ,start_date,end_date,Branch_no,baddress
FROM customer  join package 
on(pack_id=Package_id)
join offers
on(pid=Package_id)
join branch
on(Branch_no=Bno)
  where id='$userId' ";


$getData = mysqli_query($conn, $sql_query);

$sql_query1 = "SELECT id,fname,lname,phone_no,email,address
FROM customer 
WHERE id='$userId' ";
$getData1 = mysqli_query($conn, $sql_query1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">


    <!-- Theme Style -->
    <!--
    <link rel="stylesheet" href="css/profile.css">
    -->
    <style>
    body {
        background-color: #f9f9fa
    }

    .padding {
        padding: 3rem !important
    }

    .user-card-full {
        overflow: hidden;
    }

    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        border: none;
        margin-bottom: 30px;
    }

    .m-r-0 {
        margin-right: 0px;
    }

    .m-l-0 {
        margin-left: 0px;
    }

    .user-card-full .user-profile {
        border-radius: 5px 0 0 5px;
    }

    .bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
        background: linear-gradient(to right, #ee5a6f, #f29263);
    }

    .user-profile {
        padding: 20px 0;
    }

    .card-block {
        padding: 1.25rem;
    }

    .m-b-25 {
        margin-bottom: 25px;
    }

    .img-radius {
        border-radius: 5px;
    }



    h6 {
        font-size: 14px;
    }

    .card .card-block p {
        line-height: 25px;
    }

    @media only screen and (min-width: 1400px) {
        p {
            font-size: 14px;
        }
    }

    .card-block {
        padding: 1.25rem;
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0;
    }

    .m-b-20 {
        margin-bottom: 20px;
    }

    .p-b-5 {
        padding-bottom: 5px !important;
    }

    .card .card-block p {
        line-height: 25px;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .text-muted {
        color: #919aa3 !important;
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0;
    }

    .f-w-600 {
        font-weight: 600;
    }

    .m-b-20 {
        margin-bottom: 20px;
    }

    .m-t-40 {
        margin-top: 20px;
    }

    .p-b-5 {
        padding-bottom: 5px !important;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .m-t-40 {
        margin-top: 20px;
    }

    .user-card-full .social-link li {
        display: inline-block;
    }

    .user-card-full .social-link li a {
        font-size: 20px;
        margin: 0 10px 0 0;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
    </style>
</head>

<body>





    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius"
                                            alt="User-Profile-Image">
                                    </div>
                                    <h6 class="f-w-600">


                                        <?php
                                 if (is_null($pack)) {
                                          ?>

                                        <?php
                                  while ($row = mysqli_fetch_assoc($getData1)) {
                                        ?>

                                        <?php echo $row['fname']; ?> &nbsp;
                                        <?php echo $row['lname']; ?>
                                    </h6>
                                    <p>
                                        <?php echo $row['phone_no']; ?>
                                    </p>

                                    <a href="profileEdit.php?id=<?php echo $row["id"] ?>">
                                        <button type="button" class="btn btn-danger">Edit</button></a>


                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-muted f-w-400">
                                                <?php echo $row['email']; ?>
                                            </h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">
                                                Address
                                            </p>
                                            <h6 class="text-muted f-w-400">
                                                <?php echo $row['address']; ?>
                                            </h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>


                                </div>
                                <a href="Addpackidregistration.php">
                                    <button type="button" class="btn btn-danger">Add Package</button></a>
                                <h1></h1>
                                <a href="login.php">
                                    <button type="button" class="btn btn-danger">logout</button></a>

                                <?php  }
                                ?>
                                <?php
                                        } else {
                                            ?>
                                <?php
                                while ($row = mysqli_fetch_assoc($getData)) {
                                    ?>

                                <?php echo $row['fname']; ?> &nbsp;
                                <?php echo $row['lname']; ?>
                                </h6>
                                <p>
                                    <?php echo $row['phone_no']; ?>
                                </p>

                                <a href="profileEdit.php?id=<?php echo $row["id"] ?>">
                                    <button type="button" class="btn btn-primary">Edit</button></a>


                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600"><b>Information</b></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><b>Email</b></p>
                                        <h6 class="text-muted f-w-400">
                                            <?php echo $row['email']; ?>
                                        </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">
                                            <b>Address</b>
                                        </p>
                                        <h6 class="text-muted f-w-400">
                                            <?php echo $row['address']; ?>
                                        </h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><b>Package ID</b></p>
                                        <h6 class="text-muted f-w-400">
                                            <?php echo $row['Package_id']; ?>
                                        </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><b>Package Name</b></p>
                                        <h6 class="text-muted f-w-400">
                                            <?php echo $row['Package_name']; ?>
                                        </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><b>Package Type</b></p>
                                        <h6 class="text-muted f-w-400">
                                            <?php echo $row['type']; ?>
                                        </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><b>Package Duration</b></p>
                                        <h6 class="text-muted f-w-400">
                                            <?php echo $row['duration']; ?>
                                        </h6>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><b>Start Date</b></p>
                                        <h6 class="text-muted f-w-400">
                                            <?php echo $row['start_date']; ?>
                                        </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">
                                            <b>End Date</b>
                                        </p>
                                        <h6 class="text-muted f-w-400">
                                            <?php echo $row['end_date']; ?>
                                        </h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><b>Branch No</b></p>
                                        <h6 class="text-muted f-w-400">
                                            <?php echo $row['Branch_no']; ?>
                                        </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">
                                            <b>Branch Address</b>
                                        </p>
                                        <h6 class="text-muted f-w-400">
                                            <?php echo $row['baddress']; ?>
                                        </h6>
                                    </div>
                                </div>

                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="login.php">
                                            <button type="button" class="btn btn-danger">logout</button></a></li>
                                    <?php
                                } ?>
                                    <?php
                                        }
                                    ?>



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>