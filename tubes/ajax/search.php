<?php    
require "../koneksi.php";
$keyword = $_GET['keyword'];

//Membuat query untuk mencari produk berdasarkan nama yang mengandung keyword yang diberikan.
$queryProduk = "SELECT * FROM produk WHERE nama LIKE '%$keyword%'";
$result = mysqli_query($conn, $queryProduk);
?>

<div class="row" style="margin-bottom: 5rem;">
<?php while($produk = mysqli_fetch_array($result)){ ?>
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
                <i data-feather="star" class="star-full"></i>
                <i data-feather="star" class="star-full"></i>
                <i data-feather="star" class="star-full"></i>
                <i data-feather="star" class="star-full"></i>
                <i data-feather="star"></i>
            </div>
            <div class="product-price">
                <h3>Rp <?php echo $produk['harga']; ?></h3>
            </div>
        </div>
    </div>
<?php }  ?>
</div>
<?php 

