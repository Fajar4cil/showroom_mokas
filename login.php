<!DOCTYPE html>
<html lang="en">

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
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="admin/asset/images/logo.png" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form action="login.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" id="username" placeholder="Email" Required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="pasword" id="pasword" placeholder="Password" Required>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit" value="upload"> Login </button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
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
session_start();

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $pasword = $_POST['pasword'];

  // Koneksi ke database
  $koneksi = mysqli_connect('localhost', 'root', '', 'db_mokas');

  // Memeriksa apakah user dengan username dan password yang diinputkan ada di database
  $query3 = "SELECT * FROM tabel_konsumen WHERE username='$username' AND pasword='$pasword'";
  $result3 = mysqli_query($koneksi, $query3);

  if (mysqli_num_rows($result3) == 1) {
    // Jika data sesuai, maka set session untuk user
    $row = mysqli_fetch_assoc($result3);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['rolee'] = $row['rolee'];

    // Alihkan user ke halaman sesuai dengan role-nya
    if ($row['rolee'] == 'admin') {
      header('Location: admin/index.php');
    } else {
      header('Location: user/index.php');
    }
  } else {
    // Jika data tidak sesuai, tampilkan pesan error
    $error = 'Username atau password salah';
  }
}
?>
</body>

</html>
