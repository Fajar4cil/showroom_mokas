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
                    <h3 class="font-weight-bold" align="center">Tambah Calo</h3>
                  </div>
                
                <div class="table-responsive">
                    <form action="tambahcalo.php" method="POST" enctype="multipart/form-data">
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
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" Required>
                        </div>
                        <div class="mb-1">
                            <label for="nama_motor" class="form-label">Nama Motor</label>
                            <input type="text" class="form-control" name="nama_motor" id="nama_motor" Required>
                        </div>
                        <div class="mb-1">
                            <label for="harga_beli" class="form-label">Harga Beli</label>
                            <input type="text" class="form-control" name="harga_beli" id="harga_beli" Required>
                        </div>
                        <div class="mb-1">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="datetime-local" class="form-control" name="tanggal" id="tanggal" Required>
                        </div>
                         <button type="submit" class="btn btn-outline-primary" name="submit" value="upload">Tambah Data</button>
                         <a href="calo.php" type="button">Kembali</a>
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
$alamat = $_POST['alamat'];  
$nama_motor = $_POST['nama_motor'];  
$harga_beli = $_POST['harga_beli']; 
$tanggal = $_POST['tanggal'];



 // Membuat Query
 $query4 = "INSERT INTO tabel_calo (id, nama, no_telp, alamat, nama_motor ,harga_beli ,tanggal) VALUES
 ('".$id."', '".$nama."','".$no_telp."','".$alamat."','".$nama_motor."', '".$harga_beli."', '".$tanggal."')";

 $result4 = mysqli_query($koneksi, $query4);
 if($result4){
 echo "<script>alert('Data Berhasil ditambahkan!');
 document.location.href = 'calo.php';
 </script>";
 } else {
 echo "<script>alert('Data Gagal ditambahkan!');
 document.location.href = 'calo.php';
 </script>";
 }
 } 
?>