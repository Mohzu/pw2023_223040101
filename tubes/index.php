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

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">Education<span>Zone</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#feature">Keunggulan</a>
        <a href="#products">Paket Belajar</a>
        <a href="#teacher">Teacher</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="login.php"><i data-feather="users"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- Search Form Start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
      <!-- Search Form end -->
    </nav>

    <!--Home-->
    <section id="home">
      <h2>Bingung Cari Bimbel Online? Di EducationZone Aja!</h2>
      <p>Bimbel online terbaik untuk SD, SMP, SMA, dan persiapan masuk PTN</p>

      <div class="btn">
        <a class="blue" href="login.php">Daftar Akun</a>
        <a class="bluesky" href="#products">Paket Belajar</a>
      </div>
    </section>

    <!--feature-->
    <section id="feature">
      <h1>Keunggulan Education<span>Zone</span></h1>
      <p>Pintar, Maksimal, dan Optimal Gunakan EducationZone</p>
      <div class="fea-base">
        <div class="fea-box">
          <i class="fa-solid fa-user-graduate"></i>
          <h3>Pencetak Lulusan Terbaik</h3>
          <p>
            EducationZone adalah Bimbel yang menjadi Pencetak lulusan terbaik
          </p>
        </div>
        <div class="fea-box">
          <i class="fa-solid fa-book-open-reader"></i>
          <h3>Sumber Bacaan Lengkap</h3>
          <p>EducationZone Memiliki Sumber Bacaan yang lengkap</p>
        </div>
        <div class="fea-box">
          <i class="fas fa-award"></i>
          <h3>Memiliki Penghargaan</h3>
          <p>EducationZone di Anugrahi Penghargaan</p>
        </div>
      </div>
    </section>

    <!--Product Section Start-->
    <section class="product" id="products">
      <h2>Paket<span> Belajar</span></h2>
      <p>
        Mau langsung berlangganan? Yuk, pilih paket sesuai kebutuhan dengan
        potongan harga!
      </p>

      <div class="row">
        <div class="product-card">
          <div class="product-icons">
            <a href="pages/paketutbk.php" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>
          <div class="product-image">
            <img src="img/paketintensif.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Paket Intensif UTBK - 2023</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">
              Rp 900.000 <span>Rp 1.300.000</span>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="product-icons">
            <a href="pages/paketus12.php" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>
          <div class="product-image">
            <img src="img/paket 2.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Paket Ujian Sekolah Kelas 12</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">
              Rp 600.000 <span>Rp 1.000.000</span>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>
          <div class="product-image">
            <img src="img/paket 3.jpg" alt="Product 3" />
          </div>
          <div class="product-content">
            <h3>Paket Ujian Sekolah K11 + K10</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">
              Rp 700.000 <span>Rp 1.200.000</span>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>
          <div class="product-image">
            <img src="img/paket 4.jpg" alt="Product 4" />
          </div>
          <div class="product-content">
            <h3>Paket Ujian Sekolah Kelas 9</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">
              Rp 600.000 <span>Rp 1.100.000</span>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>
          <div class="product-image">
            <img src="img/paket 5.jpg" alt="Product 5" />
          </div>
          <div class="product-content">
            <h3>Paket Ujian Sekolah K8 + K7</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">
              Rp 500.000 <span>Rp 1.000.000</span>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>
          <div class="product-image">
            <img src="img/paket 6.jpg" alt="Product 6" />
          </div>
          <div class="product-content">
            <h3>SD Super 1 Tahun Ajaran</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">Rp 400.000 <span>Rp 900.000</span></div>
          </div>
        </div>
      </div>
    </section>

    <!--Teacher-->
    <section id="teacher" class="teacher">
      <h1 class="heading">Kenalan dengan para Master Teacher Berpengalaman</h1>

      <div class="card-container">
        <div class="card">
          <img src="img/teacher 1.jpg" alt="" />
          <h3>Ema Irnik</h3>
          <p>Teacher Matematika</p>
          <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
          </div>
        </div>
        <div class="card">
          <img src="img/teacher 4.jpg" alt="" />
          <h3>Maalik</h3>
          <p>Teacher Geografi</p>
          <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
          </div>
        </div>
        <div class="card">
          <img src="img/teacher 3.jpg" alt="" />
          <h3>Jennifer</h3>
          <p>Teacher Biologi</p>
          <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
          </div>
        </div>
        <div class="card">
          <img src="img/teacher 5.jpg" alt="" />
          <h3>Jacob</h3>
          <p>Teacher Kimia</p>
          <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
          </div>
        </div>
        <div class="card">
          <img src="img/teacher 2.jpg" alt="" />
          <h3>Jason</h3>
          <p>Teacher Fisika</p>
          <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
          </div>
        </div>
      </div>
    </section>

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
    <script src="js/script.js"></script>
  </body>
</html>
