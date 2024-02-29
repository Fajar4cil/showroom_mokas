<!DOCTYPE html>
<html lang="en">

<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'db_mokas');

    $query3 = "SELECT * FROM tabel_konsumen";
    $result3 = mysqli_query($koneksi, $query3);
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="admin/asset/vendors/feather/feather.css">
  <link rel="stylesheet" href="admin/asset/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="admin/asset/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/asset/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="admin/asset/images/logoo.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-3 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="admin/asset/images/logo.png" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form action="register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-1">
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" Required>
                </div>
                <div class="mb-1">
                  <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telpon" Required>
                </div>
                <div class="mb-1">
                  <input type="text" class="form-control" name="username" id="username" placeholder="Email" Required>
                </div>
                <div class="mb-1">
                  <input type="password" class="form-control" name="pasword" id="pasword" placeholder="Password" Required>
                </div>
                <div class="form-group">
                  <select for="rolee" name="rolee" id="rolee" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                  </select>
                </div>
                <div class="">
                  <input type="datetime-local" class="form-control" name="create_at" id="create_at" Required>
                </div>
                <div class="col-12 ml-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    I agree to all Terms & Conditions
                  </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit" value="upload"> Daftar</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php?id=" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
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
 echo "<script>alert('Daftar Berhasil !');
 document.location.href = 'login.php';
 </script>";
 } else {
 echo "<script>alert('Daftar Gagal..Mohon Coba lagi!');
 document.location.href = 'register.php';
 </script>";
 }
 } 
?>
</body>

</html>
