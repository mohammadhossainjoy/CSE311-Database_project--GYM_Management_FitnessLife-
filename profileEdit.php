<?php
include "connect.php";
?>

<?php
$id = $_GET["id"];
$sql_query= "SELECT * from customer where id='$id' ";
$getData = mysqli_query($conn, $sql_query);
$row = mysqli_fetch_array($getData);

if (isset($_POST["submit"])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
$password = $_POST['password'];


$sql = "UPDATE customer SET fname='$fname',lname='$lname',phone_no='$phone_no',email='$email',address='$address',password='$password' WHERE
id ='$id' ";
$result = mysqli_query($conn, $sql);

if ($result) {
header("Location: profile.php?msg=Data updated successfully");
} else {
echo "Failed: " . mysqli_error($conn);
}
}
?>


<!---->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>addteacher</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/userstyle.css">
</head>

<body>

    <div class="row">
        <div class="col-md-2">
        </div>


        <div class="col-md-10">
            <div class="text-center mb-4">
                <h1></h1>
                <h3><b><i>Profile Edit Information</i></b></h3>

            </div>




            <div class="container d-flex justify-content-center">

                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">First Name:</label>
                            <input type="text" name="fname" value="<?php echo $row['fname'] ?>" class="form-control"
                                required>
                        </div>

                        <div class="col">
                            <label class="form-label">Last name:</label>
                            <input type="text" class="form-control" required name="lname"
                                value="<?php echo $row['lname'] ?>">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" required name="email"
                            value="<?php echo $row['email'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone_no:</label>
                        <input type="text" class="form-control" required name="phone_no"
                            value="<?php echo $row['phone_no'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address:</label>
                        <input type="text" class="form-control" required name="address"
                            value="<?php echo $row['address'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="text" class="form-control" required name="password"
                            value="<?php echo $row['password'] ?>">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="profile.php" class="btn btn-danger">Cancel</a>
                    </div>

                </form>

            </div>
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>





<!---->