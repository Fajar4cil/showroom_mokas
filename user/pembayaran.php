<!doctype html>
<html lang="en">
  <head>

    <?php
      $koneksi = mysqli_connect('localhost', 'root', '', 'db_mokas');
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="stylec4.css">
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Showroom Mokas!</title>
    <link rel="shortcut icon" href="asset/images/logoo.png" />
  </head>
  <body class="detail">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php?id=">Showroom<span class="text-primary">Mokas</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php?id=">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kategori.php?id=">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.php?id=">Contact</a>
            </li>
          </ul>
    
          <div class="navbar-extra">
            <a href="../login.php" id="log-out"> <i data-feather="log-out"></i></a>
          </div>
    </nav>

  <div class="judul pt-3">
        <div class="container">
            <div class="row">
                <div class="section-header text-center">
                    <h1>Pembayaran</h1>
                </div>
            </div>
        </div>
    </div>

  <div class="container">
    <form action="pembayaran.php?id="method="POST" enctype="multipart/form-data" class="row g-3 ">
        <div class="col-md-6">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Fajar a" Required>
        </div>
        <div class="col-md-6">
          <label for="id" class="form-label">ID</label>
          <input type="text" class="form-control" name="id" id="id" placeholder="#x">
        </div>
        <div class="col-md-6">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Jl.cimahi, Jawa Barat" Required>
        </div>
        <div class="col-md-6">
          <label for="merk" class="form-label">Merk</label>
          <input type="text" class="form-control" name="merk" id="merk" placeholder="Honda" Required>
        </div>
        <div class="col-md-6">
          <label for="no_telp" class="form-label">No_Telp</label>
          <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="022xxxxxx" Required>
        </div>
        <div class="col-md-6">
          <label for="no_mesin" class="form-label">No_Mesin</label>
          <input type="text" class="form-control" name="no_mesin" id="no_mesin" placeholder="XYZ1234ABC" Required>
        </div>
        <div class="col-12">
          <label for="harga" class="form-label">Harga</label>
          <input type="text" class="form-control" name="harga" id="harga" placeholder="xxxxxx" Required>
        </div>
        <div class="col-12">
          <label for="tanggal">Tanggal :</label>
          <input type="date" name="tanggal" id="tanggal" required>
        </div>
        <div class="mb-1">
          <input for="gambar" class="form-control" type="file" name="gambar"  id="gambar" Required>
        </div>

        <div class="col-md-6">
          <span>cards accepted :</span>
          <img src="img/card.png" alt="">
        </div>
        <div class="col-md-6">
          <span>credit card number :</span>
          <input type="number" placeholder="1111-2222-3333-4444" Required>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Menyetujui Pembayaran ini
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-danger"  name="submit" value="upload">Lanjutkan Pembayaran</button>
          <a href="detailkategori.php?id=" type="button"  class="btn btn-primary">Kembali</a>
        </div>
</form>
</div>

<!-- Footer -->
    <footer>
      <div class="socials">
        <a href=""><i data-feather="instagram"></i></a>
        <a href=""><i data-feather="twitter"></i></a>
        <a href=""><i data-feather="facebook"></i></a>
      </div>

      <div class="credit">
        <p>Created by <a href="">Fajar_A</a>.| &copy; 2023.</p>
      </div>
    </footer>


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

// Menyimpan gambar
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
 echo "<script>alert('Pembayaran Berhasil!');
 document.location.href = 'kategori.php';
 </script>";
 } else {
 echo "<script>alert('Maaf...Pembayaran Gagal !');
 document.location.href = 'pembayaran.php';
 </script>";
 }
 } 
?>

<!-- Icons -->
    <script>
      feather.replace();
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

