<?php
include "../login/login-check.php";
?>
<?php
$id_client = $_GET["id_client"];
$sql = "DELETE FROM `client` WHERE id_client = $id_client";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: clients-table.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}