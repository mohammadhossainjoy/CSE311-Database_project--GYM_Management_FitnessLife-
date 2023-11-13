<?php
include "connect.php";
?>

<?php
$Package_id=$_GET["Package_id"];
$sql = "SELECT * from package where Package_id=$Package_id" ;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

 if (isset($_POST["submit"])) 
 {
   
    $Package_name=$_POST['Package_name'];
    $type = $_POST['type'];
    $duration=$_POST['duration'];
    $price=$_POST['price'];
     
  
    
    
    $sql_query="UPDATE package SET Package_name='$Package_name',type='$type',duration='$duration',price='$price' WHERE Package_id ='$Package_id' " ;
    $result=mysqli_query($conn, $sql_query); 
    
      if ($result) { 
    header("Location: packages.php?msg=Data updated successfully");
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
                <h3>Add New Trainer</h3>
                <p class="text-muted">Complete the form below to add a new Trainer</p>
            </div>




            <div class="container d-flex justify-content-center">

                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Package Name:</label>
                            <input type="text" name="Package_name" value="<?php echo $row['Package_name']  ?>"
                                class="form-control" required>
                        </div>

                        <div class="col">
                            <label class="form-label">Package Type:</label>
                            <input type="text" class="form-control" required name="type"
                                value="<?php echo $row['type'] ?>">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Duration:</label>
                        <input type="text" class="form-control" required name="duration"
                            value="<?php echo $row['duration'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price:</label>
                        <input type="text" class="form-control" required name="price"
                            value="<?php echo $row['price'] ?>">
                    </div>


                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
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