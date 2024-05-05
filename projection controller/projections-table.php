<?php
include "../login/login-check.php";
?>

<?php include('../dashboard/dashboard-temp.php')  ?>
      <div class="container-fluid">
      <?php
              if (isset($_GET["msg"])) {
              $msg = $_GET["msg"];
             echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
        <h4 class="c-grey-900 mT-10 mB-30">Data Tables</h4><div class="row">
          <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
              <h4 class="c-grey-900 mB-20">Projections Table</br>
              <a href="add-new-projection.php" class="btn btn-dark mb-3">Add New</a></h4>
              
              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead><tr><th>ID Film</th><th>ID Salle</th><th>Horaire</th><th>Durée</th><th>ACTION</th></tr></thead>
                <tfoot><tr><th>ID Film</th><th>ID Salle</th><th>Horaire</th><th>Durée</th><th>ACTION</th></tr></tfoot>
                <tbody>
                  <?php
        $sql = "SELECT * FROM `projection`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                  <tr><td><?php echo $row["id_film"] ?></td><td><?php echo $row["id_salle"] ?></td><td><?php echo $row["horaire"] ?></td><td><?php echo $row["duree"] ?></td><td><a href="edit-projection.php?id_projection=<?php echo $row["id_projection"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete-projection.php?id_projection=<?php echo $row["id_projection"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td></tr>
                  <?php
        }
        ?>
<?php include('../dashboard/dashboard-temp-footer.html')  ?>
