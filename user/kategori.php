<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylec4.css">
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Showroom Mokas!</title>
    <link rel="shortcut icon" href="asset/images/logoo.png" />
    
  </head>
  <body>
    <?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'db_mokas');

    $query = "SELECT * FROM tabel_motor";
    $result = mysqli_query($koneksi, $query);
    ?>

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

<section id="kategori" class="kategori">
    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/bg3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/bg5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block fixed">
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/bg6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="judul">
        <div class="container">
            <div class="row">
                <div class="section-header text-center pt-5 pb-4">
                    <h1>Kategori</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, mollitia.</p>
                </div>
            </div>
        </div>
    </div>

  <?php foreach ($result as $data){ ?>
    <div id="card" class="card">
        <div class="row">
            <div class="card" style="width: 25rem;">
              <img src="img/<?php echo $data['gambar']; ?>"/>
              <div class="card-body">
                <h5> <?php echo $data["merk"]; ?> </h5>
                <br>
                <p>Tahun: <?php echo $data["tahun"]; ?></p>
                <p>Jenis: <?php echo $data["jenis"]; ?>.</p> 
                <p>Posting: <?php echo $data["tanggal"]; ?>.</p>
                <p>Rp.<?php echo $data["harga"]; ?>.</p>
              </div>
              <div class="card-body">
                <a href="detailkategori.php?id=" class="btn btn-outline-primary btn-sm">Detail Produk</a>
                <a href="pembayaran.php?id=" class="btn btn-outline-danger btn-sm">Beli Sekarang</a>
              </div>
            </div>
        </div>
    </div>
  <?php } ?>
</section>


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
    <script src="js/script.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>