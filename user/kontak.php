<!doctype html>
<html lang="en">
  <head>

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

  <div class="judul pt-4">
        <div class="container">
            <div class="row">
                <div class="section-header text-center">
                    <h1>Kontak</h1>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <form action="pembayaran.php?id="method="POST" enctype="multipart/form-data" class="row g-3 ">
        
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.960611217269!2d107.48617257415827!3d-6.895314967475048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e52296753c75%3A0x9c761a967b6313de!2sJl.%20Cangkorah%2C%20Giriasih%2C%20Kec.%20Batujajar%2C%20Kabupaten%20Bandung%20Barat%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1682914940845!5m2!1sid!2sid" 
            width="600" 
            height="300" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <div class="col-md-6">
          <label for="username" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="username" id="username" >
        </div>
        <div class="col-md-6">
          <label for="id" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control" name="id" id="id" >
        </div>
        
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Alamat</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Pesan Yang ingin Disampaikan</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
        <button type="submit" class="btn btn-outline-primary">Kirim Pesan</button>
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

