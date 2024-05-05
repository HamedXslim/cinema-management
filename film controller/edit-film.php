<?php
include "../login/login-check.php";
?>
<?php

$id_film = $_GET["id_film"];

if (isset($_POST["submit"])) {
  $titre = $_POST['film_name'];
   $genre = $_POST['Genre'];
   $date_sortie = $_POST['date_sortie'];
   $producteur = $_POST['Producteur'];
   $version = $_POST['Version'];

  $sql = "UPDATE `film` SET `titre`='$titre', `genre`='$genre',`date_sortie`='$date_sortie',
         `producteur`='$producteur' ,`version`='$version' WHERE id_film = $id_film";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: films-table.php?msg=Data updated successfully");
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
  

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `film` WHERE id_film = $id_film LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

<div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Film Name</label>
                  <input type="text" class="form-control" name="film_name" value="<?php echo $row['titre'] ?>">
               </div>

               <div class="col">
                  <label class="form-label">Genre</label>
                  <input type="text" class="form-control" name="Genre" value="<?php echo $row['genre'] ?>">
               </div>

            <div class="row mb-3">
            <div class="col">
               <label class="form-label">Version</label>
               <input type="text" class="form-control" name="Version" value="<?php echo $row['version'] ?>">
            </div>
            <div class="col">
                  <label class="form-label">Producteur</label>
                  <input type="text" class="form-control" name="Producteur" value="<?php echo $row['producteur'] ?>">
               </div>
            </div>
            </div>
               
            <div class="row mb-3">
            <div class="col">
               <label class="form-label">Date de sortie</label>
               <input type="date" class="form-control" name="date_sortie" value="<?php echo $row['date_sortie'] ?>">
            </div>
            </div>
        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="films-table.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>