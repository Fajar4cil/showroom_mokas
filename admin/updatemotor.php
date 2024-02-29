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
                    <h3 class="font-weight-bold" align="center">Update Motor</h3>
                  </div>
                
                  <?php
                    $id = $_GET['id'];
                    // Query ambil data dari param jika ada.
                    $query = "SELECT * FROM tabel_motor WHERE id = $id";
                    // Hasil Query
                    $result = mysqli_query($koneksi, $query);
                    foreach($result as $data) {
                  ?>

                  <div class="container mt-4">
                      <form action="" method="POST" enctype="multipart/form-data">
                          <div class="mb-1">
                              <input type="hidden" class="form-control" name="id" id="id" value="<?= $data['id'] ?>">
                          </div>
                          <div class="mb-1">
                              <label for="no_mesin" class="form-label">No_Mesin</label>
                              <input type="text" class="form-control" name="no_mesin" id="no_mesin" value="<?= $data['no_mesin'] ?>" Required>
                          </div>
                          <div class="mb-1">
                              <label for="merk" class="form-label">Merk</label>
                              <input type="text" class="form-control" name="merk" id="merk" value="<?= $data['merk'] ?>" Required>
                          </div>
                          <div class="mb-1">
                              <label for="tahun" class="form-label">Tahun</label>
                              <input type="text" class="form-control" name="tahun" id="tahun" value="<?= $data['tahun'] ?>" Required>
                          </div>
                          <div class="mb-1">
                              <select for="jenis" name="jenis" id="jenis" value="<?= $data['jenis'] ?>" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                  <option selected>Jenis Motor</option>
                                  <option value="1">Matic</option>
                                  <option value="2">Automatic</option>
                                  <option value="3">Kopling</option>
                              </select>
                          </div>
                          <div class="mb-1">
                              <label for="warna" class="form-label">Warna</label>
                              <input type="text" class="form-control" name="warna" id="warna" value="<?= $data['warna'] ?>" Required>
                          </div>
                          <div class="mb-1">
                              <label for="harga" class="form-label">Harga</label>
                              <input type="text" class="form-control" name="harga" id="harga" value="<?= $data['harga'] ?>" Required>
                          </div>
                          <div class="mb-1">
                              <label for="tanggal">Tanggal :</label>
                              <input type="date" name="tanggal" id="tanggal" value="<?= $data['tanggal'] ?>" required>
                          </div>
                          <div class="mb-1">
                              <input for="gambar" class="form-control" type="file" name="gambar"  id="gambar" value="<?= $data['gambar'] ?>">
                          </div>

                           <button type="submit" class="btn btn-outline-primary" name="submit">Perbaharui</button>
                           <a href="motormatic.php" type="button">Kembali</a>
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
 $no_mesin = $_POST['no_mesin'];
 $merk = $_POST['merk'];
 $tahun = $_POST['tahun'];
 $jenis = $_POST['jenis'];
 $warna = $_POST['warna'];
 $harga = $_POST['harga'];
 $tanggal = $_POST['tanggal'];



// Menyimpan gambar
$gambar = $_POST['gambar'];
$gambar = $_FILES['gambar']['name'];
$gambar_tmp = $_FILES['gambar']['tmp_name'];

// Periksa apakah file yang diunggah adalah gambar
    move_uploaded_file($gambar_tmp, 'image/'.$gambar);
    

 // Membuat Query
$query = "UPDATE tabel_motor SET id = '$id', no_mesin = '$no_mesin', 
merk = '$merk', tahun = '$tahun', jenis = '$jenis', warna = '$warna', harga = '$harga' 
, tanggal = '$tanggal', gambar = '$gambar' WHERE id = '$id'";

 $result = mysqli_query($koneksi, $query);
 if($result){
 echo "<script>alert('Data Berhasil diupdate!!');
 document.location.href = 'motormatic.php';
 </script>";
 } else {
 echo "<script>alert('Data Gagal diupdate!!');
 document.location.href = 'motormatic.php';
 </script>";
 }
 } 
?>