
<?php
include "../login/login-check.php";
?>
<?php

$id_film = $_GET["id_film"];
$sql = " DELETE FROM `film` WHERE id_film = $id_film ";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: films-table.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
