<?php  
    require "../koneksi.php";

    $queryProduk = mysqli_query($conn, "SELECT id, nama, harga, foto FROM produk");
    $queryKategori = mysqli_query($conn, "SELECT * FROM kategori");

    if (isset($_GET['search'])) {
      $keyword = $_GET['keyword'];
  
      $query = mysqli_query($conn, "SELECT * FROM produk WHERE nama LIKE '%$keyword%'");
      $queryProduk = mysqli_query($query);
  } else {
    $queryProduk = mysqli_query($conn, "SELECT id, nama, harga, foto FROM produk");
  }

   if (isset($_GET['kategori'])) {
    $kategori = $_GET['kategori'];
    // Dapatkan ID kategori berdasarkan nama kategori
    $queryGetKategoriId = mysqli_query($conn, "SELECT id FROM kategori WHERE nama='$kategori'");
    $kategoriId = mysqli_fetch_array($queryGetKategoriId);
    // Ambil produk berdasarkan kategori ID
    $queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE kategori_id='$kategoriId[id]'");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Education Zone</title>
    
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

    <!--Feather Icons-->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css" />
    
    <link rel="stylesheet" href="../css/kategori.css" />
  </head>

  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">Education<span>Zone</span></a>

      <div class="navbar-nav">
        <a href="../index.php">Home</a>
        <a href="../index.php">Keunggulan</a>
        <a href="../index.php">Paket Belajar</a>
        <a href="../index.php">Teacher</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="../login.php"><i data-feather="users"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- Search Form Start -->
      <div class="search-form">
      <form action="../ajax/search.php" id="search-button" method="GET">
        <input type="text" name="keyword" id="keyword" placeholder="Cari Paket" />
        <button name="search" id="search-button" type="submit" id="button-addon2"><i data-feather="search"></i></button>
      </form>
      </div>
      <!-- Search Form end -->
    </nav>

    <section class="product" id+="products" style="margin-top: 3rem;">
      <h2>Kategori<span> Paket </span></h2>
      <p>
      Sederhana, cepat, dan terorganisir. Cari dengan kategori untuk menemukan hasil yang Anda inginkan
      </p>
    </section>

    <div class="kategori">
      <?php while ($kategori = mysqli_fetch_array($queryKategori)) { ?>
        <a href="produk.php?kategori=<?php echo $kategori['nama']; ?>" class="sub-kategori">
            <?php echo $kategori['nama']; ?>
        </a>
      <?php } ?>
    </div>

    <!-- Produk -->
    <section class="product" id="products" style="margin-top: 3rem;">
  <h2>Paket<span> Belajar</span></h2>
  <p>
    Mau langsung berlangganan? Yuk, pilih paket sesuai kebutuhan dengan
    potongan harga!
  </p>
  

  <div id="search-container">
    <div class="row" style="margin-bottom: 5rem;">
      <?php while($produk = mysqli_fetch_array($queryProduk)) { ?>
        <div class="product-card">
          <div class="product-icons">
            <a href="produk-detail.php?nama=<?php echo $produk['nama']; ?>" class="item-detail-button">
              <i data-feather="eye"></i>
            </a>
          </div>
          <div class="product-image">
            <img src="../img/<?php echo $produk['foto']; ?>" alt="" />
          </div>
          <div class="product-content">
            <h3><?php echo $produk['nama']; ?></h3>
            <div class="product-stars">
              <?php for ($i = 0; $i < 4; $i++) { ?>
                <i data-feather="star" class="star-full"></i>
              <?php } ?>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">
              <h3>Rp <?php echo $produk['harga']; ?></h3>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- Produk -->


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

    <script>
    const keyword = document.getElementById("keyword");
    const searchButton = document.getElementById("search-button");
    const searchContainer = document.getElementById("search-container");


keyword.onkeyup = function () {
  fetch("../ajax/search.php?keyword=" + keyword.value)
    .then((response) => response.text())
    .then((text) => (searchContainer.innerHTML = text));
};
    </script>
  

  </body>
</html>