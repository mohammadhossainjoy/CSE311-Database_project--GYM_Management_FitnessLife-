<?php
include "connect.php";
$Branch_no = $_GET["Branch_no"];
$sql_query = "DELETE FROM branch WHERE Branch_no = '$Branch_no' ";
$result = mysqli_query($conn, $sql_query);

if ($result) {
    header("Location: branch.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}
?>