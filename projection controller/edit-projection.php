<?php
include "../login/login-check.php";
?>
<?php

$id_projection = $_GET["id_projection"];

if (isset($_POST["submit"])) {

  $id_film = $_POST['id_film'];
  $id_salle = $_POST['id_salle'];

  /*$horaire = $_POST['horaire'];
  $durée = $_POST['durée'];
  $horaire = date('d/m/Y H:i:s', ($_POST['horaire']));
  $horaire = date('Y-m-d H:i:s', strtotime($_POST['horaire']));
  /*$durée = $_POST['durée'];
  $durée = $_POST['durée'];
  $durée = sprintf('%02d:%02d:%02d', floor($durée / 3600), ($durée / 60) % 60, $durée % 60);*/

  $horaire = $_POST['horaire'];
  $horaire = date('Y-m-d H:i:s', strtotime($horaire));
  $duree = $_POST['duree'];


  $sql = "UPDATE `projection` SET `id_film`='$id_film',`id_salle`='$id_salle',`horaire`='$horaire',`duree`='$duree' WHERE id_projection = '$id_projection' ";
 /* $sql = "ALTER TABLE `projection` CHANGE `horaire` `horaire` DATETIME NOT NULL;";*/

  echo $sql;

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index-projection.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `projection` WHERE id_projection = $id_projection LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">ID Film:</label>
            <input type="text" class="form-control" name="id_film" value="<?php echo $row['id_film'] ?>">
          </div>

          <div class="col">
            <label class="form-label">ID Salle:</label>
            <input type="text" class="form-control" name="id_salle" value="<?php echo $row['id_salle'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">horaire:</label>
          <input type="text" class="form-control" name="horaire" value="<?php echo $row['horaire'] ?>">
        </div>

        <div class="form-group mb-3">
        <label class="form-label">Durée:</label>
          <input type="text" class="form-control" name="duree" value="<?php echo $row['duree'] ?>">
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="projections-table.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>