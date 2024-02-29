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
                    <h3 class="font-weight-bold" align="center">Update Konsumen</h3>
                  </div>
                
                  <?php
                    $id = $_GET['id'];
                    // Query ambil data dari param jika ada.
                    $query3 = "SELECT * FROM tabel_konsumen WHERE id = $id";
                    // Hasil Query
                    $result3 = mysqli_query($koneksi, $query3);
                    foreach($result3 as $data) {
                  ?>

                  <div class="table-responsive">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-1">
                            <input type="hidden" class="form-control" name="id" id="id" value="<?= $data['id'] ?>">
                        </div>
                        <div class="mb-1">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama'] ?>" Required>
                        </div>
                        <div class="mb-1">
                            <label for="no_telp" class="form-label">No_Telp</label>
                            <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?= $data['no_telp'] ?>" Required>
                        </div>
                        <div class="mb-1">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" value="<?= $data['username'] ?>" Required> 
                        </div>
                        <div class="mb-1">
                            <label for="pasword" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pasword" id="pasword" value="<?= $data['pasword'] ?>" Required>
                        </div>
                        <div class="mb-1">
                            <select for="rolee" name="rolee" id="rolee" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="create_at" class="form-label">Create-at</label>
                            <input type="datetime-local" class="form-control" name="create_at" id="create_at" value="<?= $data['create_at'] ?>" Required> 
                        </div>
                           <button type="submit" class="btn btn-outline-primary" name="submit">Perbaharui</button>
                           <a href="konsumen.php" type="button">Kembali</a>
                      </form>
                  </div>
                  <?php
                    }
                  ?>
                </div>
<?php include('includes/footer.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
 
// Buat kondisi jika tombol data di klik
if(isset($_POST['submit'])){

 // Membuat variable setiap field inputan agar kodingan lebih rapi.
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];  
$username = $_POST['username']; 
$pasword = $_POST['pasword'];
$rolee = $_POST['rolee'];
$create_at = $_POST['create_at'];


 // Membuat Query
$query3 = "UPDATE tabel_konsumen SET id = '$id', nama = '$nama', 
no_telp = '$no_telp', username = '$username', pasword = '$pasword', rolee = '$rolee', create_at = '$create_at' WHERE id = '$id'";

 $result3 = mysqli_query($koneksi, $query3);
 if($result3){
 echo "<script>alert('Data Berhasil diupdate!!');
 document.location.href = 'konsumen.php';
 </script>";
 } else {
 echo "<script>alert('Data Gagal diupdate!!');
 document.location.href = 'konsumen.php';
 </script>";
 }
 } 