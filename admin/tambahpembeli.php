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
                    <form action="tambahpembeli.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-1">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" name="id" id="id" placeholder="1-10">
                        </div>
                        <div class="mb-1">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Fajar a">
                        </div>
                        <div class="mb-1">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Jl.cimahi, Jawa Barat">
                        </div>
                        <div class="mb-1">
                            <label for="no_telp" class="form-label">No_Telp</label>
                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="022xxxxxx">
                        </div>
                        <div class="mb-1">
                            <label for="no_mesin" class="form-label">No_Mesin</label>
                            <input type="text" class="form-control" name="no_mesin" id="no_mesin" placeholder="XYZ1234ABC">
                        </div>
                        <div class="mb-1">
                            <label for="merk" class="form-label">Merk</label>
                            <input type="text" class="form-control" name="merk" id="merk" placeholder="Honda">
                        </div>
                        <div class="mb-1">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" id="harga" placeholder="xxxxxx">
                        </div>
                        <div class="mb-1">
                            <label for="tanggal">Tanggal :</label>
                            <input type="date" name="tanggal" id="tanggal" required>
                        </div>
                        <div class="mb-1">
                            <input for="gambar" class="form-control" type="file" name="gambar"  id="gambar">
                        </div>
                        
                         <button type="submit" class="btn btn-outline-primary" name="submit" value="upload">Tambah Data</button>
                         <a href="pembelian.php" type="button">Kembali</a>
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
$username = $_POST['username']; 
$alamat = $_POST['alamat']; 
$no_telp = $_POST['no_telp'];
$no_mesin = $_POST['no_mesin'];
$merk = $_POST['merk'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];
$gambar = $_POST['gambar'];

$gambar = $_POST['gambar'];
$gambar = $_FILES['gambar']['name'];
$gambar_tmp = $_FILES['gambar']['tmp_name'];

// Periksa apakah file yang diunggah adalah gambar
    move_uploaded_file($gambar_tmp, 'image/'.$gambar);

 // Membuat Query
 $query2 = "INSERT INTO tabel_pembelian (id, username, alamat, no_telp, no_mesin,  merk,
harga, tanggal, gambar) VALUES('".$id."','".$username."', '".$alamat."', '".$no_telp."','".$no_mesin."', '".$merk."', 
'".$harga."', '".$tanggal."', '".$gambar."')";

 $result2 = mysqli_query($koneksi, $query2);
 if($result2){
 echo "<script>alert('Data Berhasil ditambahkan!');
 document.location.href = 'pembelian.php';
 </script>";
 } else {
 echo "<script>alert('Data Gagal ditambahkan!');
 document.location.href = 'pembelian.php';
 </script>";
 }
 } 
?>