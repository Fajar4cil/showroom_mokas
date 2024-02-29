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
                    <h3 class="font-weight-bold" align="center">Tambah Motor</h3>
                  </div>
                
                <div class="table-responsive">
                    <form action="tambahmotor.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-1">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" name="id" id="id" placeholder="1-10" Required>
                        </div>
                        <div class="mb-1">
                            <label for="no_mesin" class="form-label">No_Mesin</label>
                            <input type="text" class="form-control" name="no_mesin" id="no_mesin" placeholder="XYZ1234ABC" Required>
                        </div>
                        <div class="mb-1">
                            <label for="merk" class="form-label">Merk</label>
                            <input type="text" class="form-control" name="merk" id="merk" placeholder="Honda" Required>
                        </div>
                        <div class="mb-1">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="text" class="form-control" name="tahun" id="tahun" placeholder="20xx" Required>
                        </div>
                        <div class="mb-1">
                            <select for="jenis" name="jenis" id="jenis" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="1">Matic</option>
                                <option value="2">Automatic</option>
                                <option value="3">Kopling</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="warna" class="form-label">Warna</label>
                            <input type="text" class="form-control" name="warna" id="warna" placeholder="merah" Required>
                        </div>
                        <div class="mb-1">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" id="harga" placeholder="xxxxxx" Required>
                        </div>
                        <div class="mb-1">
                            <label for="tanggal">Tanggal :</label>
                            <input type="date" name="tanggal" id="tanggal" required>
                        </div>
                        <div class="mb-1">
                            <input for="gambar" class="form-control" type="file" name="gambar"  id="gambar" Required>
                        </div>
                        
                         <button type="submit" class="btn btn-outline-primary" name="submit" value="upload">Tambah Data</button>
                         <a href="motormatic.php" type="button">Kembali</a>
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
$no_mesin = $_POST['no_mesin'];
$merk = $_POST['merk'];
$tahun = $_POST['tahun'];
$jenis = $_POST['jenis'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];

$gambar = $_POST['gambar'];
$gambar = $_FILES['gambar']['name'];
$gambar_tmp = $_FILES['gambar']['tmp_name'];

// Periksa apakah file yang diunggah adalah gambar
    move_uploaded_file($gambar_tmp, 'image/'.$gambar);
    


 // Membuat Query
 $query = "INSERT INTO tabel_motor (id, no_mesin, merk, tahun, jenis, warna, harga, tanggal, gambar) VALUES
 ('".$id."', '".$no_mesin."', '".$merk."','".$tahun."', '".$jenis."', '".$warna."','".$harga."', '".$tanggal."', '".$gambar."')";
 
 $result = mysqli_query($koneksi, $query);
 if($result){
 echo "<script>alert('Data Berhasil ditambahkan!');
 document.location.href = 'motormatic.php';
 </script>";
 } else {
 echo "<script>alert('Data Gagal ditambahkan!');
 document.location.href = 'motormatic.php';
 </script>";
 }
 } 
?>