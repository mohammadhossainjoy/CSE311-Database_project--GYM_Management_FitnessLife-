<?php
include "connect.php";

if (isset($_POST["submit"])) {
    $Package_id = $_POST['Package_id'];
    $Package_name = $_POST['Package_name'];
    $type = $_POST['type'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];
    
    $Bno = $_POST['branch_no'];
    

    $sql_query = "INSERT INTO package(Package_id,Package_name,type,duration,price)
	 VALUES ('$Package_id','$Package_name','$type','$duration','$price');
      INSERT into offers(pid,Bno)
	 VALUES ('$Package_id','$Bno')";

if($conn->multi_query($sql_query)==true){
        header("Location: packages.php?msg=New record created successfully");
}else{
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
                <h3>Add New Package</h3>
                <p class="text-muted">Complete the form below to add a new Package</p>
            </div>


            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">



                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Package ID</label>
                            <input type="text" class="form-control" name="Package_id" placeholder="" required>
                        </div>


                    </div>



                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Package Name</label>
                            <input type="text" class="form-control" name="Package_name" placeholder="" required>
                        </div>

                        <div class="col">
                            <label class="form-label">Package Type:</label>
                            <input type="text" class="form-control" name="type" placeholder="" required>
                        </div>
                    </div>



                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Duration:</label>
                            <input type="text" class="form-control" name="duration" placeholder="" required>
                        </div>

                        <div class="col">
                            <label class="form-label">Price:</label>
                            <input type="text" class="form-control" name="price" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <p style="color:black ">Branch No:</p>
                        </label>
                        <select name="branch_no" id="">

                            <?php
                             include "connect.php";
                             $Bno = mysqli_query($conn, "SELECT * from branch");
                           while ($c = mysqli_fetch_array($Bno)) {
                               ?>

                            <option value="<?php echo $c['Branch_no'] ?>">
                                <?php echo $c['Branch_no'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>


                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
                        <a href="packages.php" class="btn btn-danger">Cancel</a>
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