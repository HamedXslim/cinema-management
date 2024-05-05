<?php
include "../login/login-check.php";
?>
<?php include('../dashboard/dashboard-temp.php'); ?>


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
              <h4 class="c-grey-900 mB-20">Films Table<a href="add-new-film.php" class="btn btn-dark mb-3">Add New</a></h4>
              
              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead><tr><th>TITLE</th><th>RELEASE DATE</th><th>PRODUCTION</th><th>GENRE</th><th>VERSION</th><th>ACTION</th></tr></thead>
                <tfoot><tr><th>TITLE</th><th>RELEASE DATE</th><th>PRODUCTION</th><th>GENRE</th><th>VERSION</th><th>ACTION</th></tr></tfoot>
                <tbody>
                  <?php
        $sql = "SELECT * FROM `film`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                  <tr><td><?php echo $row["titre"] ?></td>
                  <td><?php echo $row["date_sortie"] ?></td>
                  <td><?php echo $row["producteur"] ?></td>
                  <td><?php echo $row["genre"] ?></td>
                  <td><?php echo $row["version"] ?></td>
                  <td><a href="edit-film.php?id_film=<?php echo $row["id_film"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete-film.php?id_film=<?php echo $row["id_film"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td></tr>
                  <?php
        }
        ?>
<?php include('../dashboard/dashboard-temp-footer.html') ?>             
