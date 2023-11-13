<?php
include "connect.php";
$eid = $_GET["eid"];
$sql_query = "DELETE FROM gym_equipment WHERE eid = $eid";
$result = mysqli_query($conn, $sql_query);

if ($result) {
    header("Location: equipmqintqins.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}