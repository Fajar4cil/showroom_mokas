<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="stylec4.css">
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Showroom Mokas!</title>
    <link rel="shortcut icon" href="asset/images/logoo.png" />
  </head>
  <body class="detail">
<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'db_mokas');

    $query = "SELECT * FROM tabel_motor ";
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

    <div class="judul">
        <div class="container">
            <div class="row">
                <div class="section-header text-center">
                    <h1>Detail Produk</h1>
                </div>
            </div>
        </div>
    </div>

   <?php foreach ($result as $data){ ?>  
    <div class="main-wrapper">
        <div class="container">
            <div class="product-div">
                <div class="product-div-left">
                    <div class="img-container">
                      <img src="img/<?php echo $data['gambar']; ?>"/>
                    </div>
                    <div class="hover-container">
                        <div>
                            <img src="img/bg4.jpg" alt="">
                        </div>
                        <div>
                            <img src="img/bg.jpg" alt="">
                        </div>
                        <div>
                            <img src="img/bg.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="product-div-roght">
                    <span class="product-name"><?php echo $data["merk"]; ?></span>
                    <span class="product-price"> #<?php echo $data["id"]; ?></span>
                    <div class="product-price">Rp.<?php echo $data["harga"]; ?>.</div>
                    <div class="product-rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span>(250 ratings</span>
                    </div>
                    <p class="product-description">Nomor Mesin <?php echo $data["no_mesin"]; ?></p>
                    <p>Merk     : <?php echo $data["merk"]; ?></p>
                    <p>Tahun    : <?php echo $data["tahun"]; ?></p>
                    <p>Warna    : <?php echo $data["warna"]; ?></p>
                    <p>Jenis    : <?php echo $data["jenis"]; ?></p>
                    <p>Posting  : <?php echo $data["tanggal"]; ?></p>

                    <div class="buton pt-4">
                      <a href="pembayaran.php?id="  class="btn btn-outline-primary"> <i class="fas fa-wallet"></i>buy now</a>  
                      <a href="pembayaran.php?id=" class="btn btn-outline-warning"> <i class="fas fa-shopping-cart"></i>add to cart</a>
                    </div>  

                </div>
            </div>
        </div>
    </div>
  <?php } ?>

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
    <script src="script.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>