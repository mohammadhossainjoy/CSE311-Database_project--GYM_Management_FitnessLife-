<?php
include "connect.php";
$eid = $_GET["eid"];
$sql_query = "DELETE FROM employee WHERE eid = $eid";
$result = mysqli_query($conn, $sql_query);

if ($result) {
    header("Location: manager.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}