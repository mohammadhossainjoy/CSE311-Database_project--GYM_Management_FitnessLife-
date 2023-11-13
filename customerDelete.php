<?php
include "connect.php";
?>
<?php
$id = $_GET["id"];
$sql_query = "DELETE FROM customer WHERE id = $id";
$result = mysqli_query($conn, $sql_query);

if ($result) {
header("Location: customer.php?msg=Data deleted successfully");
} else {
echo "Failed: " . mysqli_error($conn);
}
?>