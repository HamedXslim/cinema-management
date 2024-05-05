<?php
include "../login/login-check.php";
?>
<?php include('../dashboard/dashboard-temp.php') ?>
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
              <h4 class="c-grey-900 mB-20">Clients Table<a href="add-new-client.php" class="btn btn-dark mb-3">Add New</a></h4>
              
              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead><tr><th>First Name</th><th>Last Name</th><th>Age</th><th>categorie</th><th>ACTION</th></tr></thead>
                <tfoot><tr><th>First Name</th><th>Last Name</th><th>Age</th><th>categorie</th><th>ACTION</th></tr></tfoot>
                <tbody>
                  <?php
        $sql = "SELECT * FROM `client`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                  <tr><td><?php echo $row["nom_client"] ?></td><td><?php echo $row["prenom_client"] ?></td><td><?php echo $row["age"] ?></td><td><?php echo $row["categorie"] ?></td><td><a href="edit-client.php?id_client=<?php echo $row["id_client"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete-client.php?id_client=<?php echo $row["id_client"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td></tr>
                  <?php
        }
        ?>
<?php include('../dashboard/dashboard-temp-footer.html') ?>