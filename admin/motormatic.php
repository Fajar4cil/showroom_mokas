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
                    <h3 class="font-weight-bold" align="center">Data Motor</h3>
                  </div>
                
                <div class="table-responsive">
                    <a href="tambahmotor.php?id=" type="button" class="btn btn-outline-primary" >Tambah Data</a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">No Mesin</th>
                          <th scope="col">Merk</th>
                          <th scope="col">Tahun</th>
                          <th scope="col">Jenis</th>
                          <th scope="col">Warna</th>
                          <th scope="col">Harga</th>
                          <th scope="col">Tanggal</th>
                          <th scope="col">Gambar</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <?php foreach ($result as $data){ ?>
                            <tr>
                            <td><?php echo $data["id"]; ?></td>
                            <td><?php echo $data["no_mesin"]; ?></td>
                            <td><?php echo $data["merk"]; ?></td>
                            <td><?php echo $data["tahun"]; ?></td>
                            <td><?php echo $data["jenis"]; ?></td>
                            <td><?php echo $data["warna"]; ?></td>
                            <td><?php echo $data["harga"]; ?></td>
                            <td><?php echo $data["tanggal"]; ?></td>
                            <td><img src="image/<?php echo $data['gambar'] ; ?>"/></td>
                            <td> 
                            <a href="updatemotor.php?id=<?php echo 
                             $data["id"]; ?>" type="button" class="btn btn-outline-warning btn-sm" >Update</a>
                            <a href="deletemotor.php?id=<?php echo 
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