<?php 
  require "../koneksi.php";

  // Mengambil nilai nama dari URL menggunakan $_GET['nama'] dan meneruskannya ke variabel $nama.
  $nama = htmlspecialchars($_GET['nama']);

  // Mengeksekusi query yang mengambil data produk dari tabel berdasarkan nama yang diberikan.
  $queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE nama='$nama'");

  // Menyimpan hasil query dalam variabel $produk.
  $produk = mysqli_fetch_array($queryProduk);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Produk</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="../css/detailsitem.css" />

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!--Font Awesome-->
    <script
      src="https://kit.fontawesome.com/9e462a7e26.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />

    <!-- css navbar -->
    <link rel="stylesheet" href="../css/style.css" />

    <!--Feather Icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
      @media (max-width: 991px) {
  .box {
    width: 750px;
    grid-template-areas:
      "info info"
      "images description";
  }
  .box .basic-info .options a {
    padding: 8.5px 12px;
  }
}

@media screen and (max-width: 991px) and (min-width: 760px) {
  .box,
  .basic-info span {
    position: absolute;
    align-self: flex-end;
  }
  .box .basic-info .options {
    position: absolute;
    align-self: flex-end;
    margin-top: 40px;
  }
}

@media (max-width: 768px) {
  .box {
    width: 600px;
    grid-template-areas:
      "images info"
      "description description";
  }
  .box .images {
    gap: 3px;
  }
  .box .images .img-holder img {
    border-radius: 5px;
  }
}

@media (max-width: 640px) {
  .box {
    width: 100%;
    min-height: 100vh;
    border-radius: 0;
    padding: 35px;
    margin: 0;
    grid-template-columns: 1fr;
    grid-template-rows: repeat(3, auto);
    grid-template-areas:
      "images"
      "info"
      "description";
  }
}

    </style>
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">Education<span>Zone</span></a>

      <div class="navbar-nav">
        <a href="../index.php">Home</a>
        <a href="../index.php">Keunggulan</a>
        <a href="produk.php">Paket Belajar</a>
        <a href="../index.php">Teacher</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="../login.php"><i data-feather="users"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- Search Form Start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
      <!-- Search Form end -->
    </nav>

    <div class="container">
      <div class="box">
        <div class="images">
          <div class="img-holder active">
            <img src="../img/<?php echo $produk['foto']; ?>" />
          </div>
          <div class="img-holder">
            <img src="../img/<?php echo $produk['foto']; ?>" />
          </div>
          <div class="img-holder">
            <img src="../img/<?php echo $produk['foto']; ?>" />
          </div>
          <div class="img-holder">
            <img src="../img/<?php echo $produk['foto']; ?>" />
          </div>
        </div>

        <div class="basic-info">
          <h1><?php echo $produk['nama']; ?></h1>
          <div class="rate">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>

          <div class="product-price">Rp<?php echo $produk['harga']; ?></div>

          <div class="options">
            <a href="https://wa.me/6281949334058"> Hubungi Via Whatsapp </a>
          </div>
          <div class="description">
            <p><?php echo $produk['detail']; ?></p>
          </div>
        </div>
      </div>
    </div>

    <!--Footer -->
    <footer>
      <div class="footer-col">
        <h3>Education<span>Zone</span></h3>
      </div>

      <div class="footer-col">
        <h3>Quick Links</h3>
        <li>Home</li>
        <li>Keunggulan</li>
        <li>Paket Belajar</li>
        <li>Teacher</li>
      </div>

      <div class="footer-col">
        <h3>Social Media</h3>
        <li>Instagram</li>
        <li>Facebook</li>
        <li>Twitter</li>
      </div>

      <div class="footer-col">
        <h3>Newsletter</h3>
        <p>You can Trust us. We only send promo offers</p>
        <div class="subscribe">
          <input type="text" placeholder="Email address" />
          <a href="#" class="yellow">SUBSCRIBE</a>
        </div>
      </div>

      <div class="copyright">
        <span>
          <a href="https://www.instagram.com/m.zuhdimaulana"
            >Copyright ©2023 All rights reserved | Created by MochZuhdi</a
          >
        </span>
        <div class="pro-links">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
    </footer>

    <!--Feather Icons-->
    <script>
      feather.replace();
    </script>

    <!--JavaScript-->
    <script src="../js/script.js"></script>
  </body>
</html>
