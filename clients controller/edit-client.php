<?php
include "../login/login-check.php";
?>
<?php

$id_client = $_GET["id_client"];

if (isset($_POST["submit"])) {
  $nom_client = $_POST['nom_client'];
   $prenom_client = $_POST['prenom_client'];
   $age = $_POST['age'];
   $categorie = $_POST['categorie'];

  $sql = "UPDATE `client` SET `nom_client`='$nom_client',`prenom_client`='$prenom_client',`age`='$age',`categorie`='$categorie' WHERE id_client = $id_client";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: clients-table.php?msg=Data updated successfully");
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
      <h3>Edit Client Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `client` WHERE id_client = $id_client LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">First Name:</label>
            <input type="text" class="form-control" name="nom_client" value="<?php echo $row['nom_client'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="prenom_client" value="<?php echo $row['prenom_client'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Age:</label>
          <input type="text" class="form-control" name="age" value="<?php echo $row['age'] ?>">
        </div>

        <div class="form-group mb-3">
          <label>categorie:</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="categorie" id="student" value="student" <?php echo ($row["categorie"] == 'student') ? "checked" : ""; ?>>
          <label for="student" class="form-input-label">Student</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="categorie" id="other" value="other" <?php echo ($row["categorie"] == 'other') ? "checked" : ""; ?>>
          <label for="other" class="form-input-label">Other</label>
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="clients-table.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>