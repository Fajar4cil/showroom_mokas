<?php include('includes/koneksi.php'); ?>

<?php include('includes/header.php'); ?>

<?php include('includes/navbar.php'); ?>

<?php include('includes/sidebar.php'); ?>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold" align="center">Data Konsumen</h3>
                  </div>
                
                <div class="table-responsive">
                    <a href="tambahkonsumen.php?id=" type="button" class="btn btn-outline-primary" >Tambah Data</a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nama</th>
                          <th scope="col">No Telp</th>
                          <th scope="col">Username</th>
                          <th scope="col">Password</th>
                          <th scope="col">Role</th>
                          <th scope="col">Create_at</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <?php foreach ($result3 as $data){ ?>
                            <tr>
                            <td><?php echo $data["id"]; ?></td>
                            <td><?php echo $data["nama"]; ?></td>
                            <td><?php echo $data["no_telp"]; ?></td>
                            <td><?php echo $data["username"]; ?></td>
                            <td><?php echo $data["pasword"]; ?></td>
                            <td><?php echo $data["rolee"]; ?></td>
                            <td><?php echo $data["create_at"]; ?></td>
                            <td> 
                            <a href="updatekonsumen.php?id=<?php echo 
                             $data["id"]; ?>" type="button" class="btn btn-outline-warning btn-sm" >Update</a>
                            <a href="deletekonsumen.php?id=<?php echo 
                             $data["id"]; ?>" type="button" class="btn btn-outline-danger btn-sm" 
                             onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
                            </td>
                            </tr> 
                            <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
<?php include('includes/footer.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>