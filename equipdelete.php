<?php
include "connect.php";
$equipment_id = $_GET["equipment_id"];
$sql_query = "DELETE FROM gym_equipment WHERE equipment_id = '$equipment_id' ";
$result = mysqli_query($conn, $sql_query);

if ($result) {
    header("Location: gymEquip.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}
?>