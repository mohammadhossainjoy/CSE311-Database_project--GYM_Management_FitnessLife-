<?php
include "connect.php";
$Package_id = $_GET["Package_id"];
$sql_query = "DELETE FROM package WHERE Package_id = $Package_id";
$result = mysqli_query($conn, $sql_query);

if ($result) {
    header("Location: packages.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}