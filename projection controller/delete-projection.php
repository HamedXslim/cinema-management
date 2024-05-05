<?php
include "../login/login-check.php";
?>
<?php
/*
include "db_conn.php";
$id_projection = $_GET["id_projection"];

$sql = "DELETE FROM `projection` WHERE id_projection = '$id_projection' ";
$result = mysqli_query($conn, $sql);

if ($result1 && $result  ) {
  header("Location:index1.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
*/


if (isset($_GET["id_projection"])) {
  $id_projection = $_GET["id_projection"];
} else {
  echo "Failed: ID de projection not provided.";
  exit;
}

// Vérifiez si l'ID de projection existe
$check_sql = "SELECT * FROM `projection` WHERE id_projection = $id_projection ";
$stmt = $conn->prepare($check_sql);
$stmt->bind_param("i", $id_projection);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $delete_sql = "DELETE FROM `projection` WHERE id_projection = $id_projection";
    $stmt = $conn->prepare($delete_sql);
    //$stmt->bind_param("i", $id_projection);
    $stmt->execute();

    if ($conn->affected_rows > 0) {
        header("Location:index-projection.php?msg=Data deleted successfully");
    } else {
        echo "Failed: No rows were affected.";
    }
} else {
    echo "Failed: ID de projection not found.";
}

$stmt->close();
$conn->close();


?>
