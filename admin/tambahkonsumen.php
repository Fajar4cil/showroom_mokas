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
                    <h3 class="font-weight-bold" align="center">Tambah Pembeli</h3>
                  </div>
                
                <div class="table-responsive">
                    <form action="tambahkonsumen.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-1">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" name="id" id="id" placeholder="1-10" Required>
                        </div>
                        <div class="mb-1">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" Required>
                        </div>
                        <div class="mb-1">
                            <label for="no_telp" class="form-label">No_Telp</label>
                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="022xxxxxx" Required>
                        </div>
                        <div class="mb-1">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Fajar a" Required>
                        </div>
                        <div class="mb-1">
                            <label for="pasword" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pasword" id="pasword" Required>
                        </div>
                        <div class="mb-1">
                            <select for="rolee" name="rolee" id="rolee" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="create_at" class="form-label">Create-at</label Required>
                            <input type="datetime-local" class="form-control" name="create_at" id="create_at">
                        </div>
                         <button type="submit" class="btn btn-outline-primary" name="submit" value="upload">Tambah Data</button>
                         <a href="konsumen.php" type="button">Kembali</a>
                    </form>
                </div>
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
  $query3 = "INSERT INTO tabel_konsumen (id, nama, no_telp, username, pasword, rolee, create_at) VALUES
 ('".$id."', '".$nama."', '".$no_telp."','".$username."', '".$pasword."', '".$rolee."','".$create_at."')";

 $result3 = mysqli_query($koneksi, $query3);
 if($result3){
 echo "<script>alert('Data Berhasil ditambahkan!');
 document.location.href = 'konsumen.php';
 </script>";
 } else {
 echo "<script>alert('Data Gagal ditambahkan!');
 document.location.href = 'konsumen.php';
 </script>";
 }
 } 
?>