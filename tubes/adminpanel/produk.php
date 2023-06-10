<?php 
session_start();

// Cek apakah session 'login' sudah di set, jika tidak diarahkan ke halaman login
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit();
  }
     require "session.php";
    require "../koneksi.php";

// Query untuk mengambil data produk berdasarkan id
    $query = mysqli_query($conn, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON 
    a.kategori_id=b.id");
    $jumlahProduk = mysqli_num_rows($query);

    $queryKategori = mysqli_query($conn, "SELECT * FROM kategori");

    // Rename File
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString = $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!--Font Awesome-->
    <script
    src="https://kit.fontawesome.com/9e462a7e26.js"
    crossorigin="anonymous"
    ></script>
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />

    <style>
        .no-decoration {
            text-decoration: none;
        }

        form div {
            margin-bottom: 10px;
        }
        @media print {
            .no-print {
                display: none !important;
            }
        }
    </style>

</head>
<body>
    <?php require "navbar.php"   ?>

    <div class="container mt-7 pt-5" style= "margin-top: 5rem;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                <a href="indexadmin.php" class="no-decoration text-muted"> <i class="fas fa-home"></i> Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Produk
                </li>
            </ol>
        </nav>

        <!-- Tambah Produk -->
        <div class="my-5 col-12 col-md-6 no-print">
            <h3 class="text-black">Tambah Produk</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="nama" class="text-black">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" required>
                </div>
                <div>
                    <label for="kategori" class="text-black">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="">Pilih</option>
                        <?php 
                            while($data = mysqli_fetch_array($queryKategori)) {
                        ?>
                            <option value="<?php echo $data['id'] ?>"><?php echo $data['nama']; ?></option>
                        <?php     
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="harga" class="text-black">Harga</label>
                    <input type="text" class="form-control" name="harga" autofocus autocomplete="off" required >
                </div>
                <div>
                    <label for="foto" class="text-black">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div>
                    <label for="detail" class="text-black">Detail</label>
                    <textarea name="detail" id="detail" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div>
                    <label for="ketersediaan_stok" class="text-black">Ketersediaan Paket</label>
                    <select name="ketersediaan_stok" id="ketersediaan_stok" class="form-control">
                    <option value="tersedia">Tersedia</option>
                            <option value="habis">Habis</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
            </form>

            <!-- Validasi -->
            <?php 
                if(isset($_POST['simpan'])) {
                    $nama = htmlspecialchars($_POST['nama']);
                    $kategori = htmlspecialchars($_POST['kategori']);
                    $harga = htmlspecialchars($_POST['harga']);
                    $detail = htmlspecialchars($_POST['detail']);
                    $ketersediaan_stok = htmlspecialchars($_POST['ketersediaan_stok']);

                    // Upload Foto //
                    $target_dir = "../img/";
                    $nama_file = basename($_FILES["foto"]["name"]);
                    $target_file = $target_dir . $nama_file;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $image_size = $_FILES["foto"]["size"];
                    $random_name = generateRandomString(20);
                    $new_name = $random_name . "." . $imageFileType;


                    if($nama=='' || $kategori=='' || $harga=='' || $detail=='' ) {
            
            ?>
                        <div class="alert alert-primary mt-3" role="alert">
                            Nama, Kategori, Harga dan Detail wajib di isi !
                        </div>
            <?php
                    }
                    else {
                        if($nama_file!='') {
                            if($image_size > 500000) {
            ?>
                        <div class="alert alert-primary mt-3" role="alert">
                            File tidak boleh lebih dari 500 kb
                        </div>
            <?php       
                        }
                        else {
                            if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'gif' ) {
            ?>
                         <div class="alert alert-primary mt-3" role="alert">
                            File wajib bertipe jpg atau png atau gif
                        </div>
            <?php
                        }
                        else {
                            move_uploaded_file($_FILES["foto"]["tmp_name"], 
                            $target_dir . $new_name );
                        }
                     }
                }

                // query insert ke tabel produk
                $queryTambah = mysqli_query($conn, "INSERT INTO produk (kategori_id, nama, harga, foto, detail, ketersediaan_stok) 
                VALUES ('$kategori', '$nama', '$harga', '$new_name', '$detail', '$ketersediaan_stok') ");

                if($queryTambah) {
            ?>
                    <div class="alert alert-primary mt-3" role="alert">
                         Produk Berhasil Disimpan            
                    </div>

                     <meta http-equiv="refresh" content="1; url=produk.php" />
            <?php
                }
                else {
                    echo mysqli_error($conn);
                }

            }
            }
            ?>
        </div>

        <div class="mt-3 mb-5">
            <h2 class="text-black">List Produk</h2>
            
            <!-- PDF -->
            <div class="container no-print">
                <button type="submit" class="btn btn-danger" name="simpan" onclick="window.print()">
                Print</button>
             </div>


            <div class="table-responsive mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Detail</th>
                            <th>Harga</th>
                            <th>Ketersediaan Paket</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if($jumlahProduk==0) {
                        ?>  
                            <tr>
                                <td colspan=8 class="text-center">Produk tidak tersedia</td>
                            </tr>
                        <?php 
                            }
                            else {
                                $jumlah= 1;
                                while($data = mysqli_fetch_array($query)) {
                        ?>      
                                <tr>
                                    <td><?php echo $jumlah; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['nama_kategori']; ?></td>
                                    <td><?php echo $data['detail']; ?></td>
                                    <td><?php echo $data['harga']; ?></td>
                                    <td><?php echo $data['ketersediaan_stok']; ?></td>
                                    <td><img src="../img/<?php echo $data['foto']; ?>" alt="" width="120"></td>
                                    <td>
                                        <a href="produk-detail.php?q=<?php echo $data['id']; ?>
                                        "class= "btn btn-info"><i class="fas fa-search"></i></a>
                                    </td>
                                </tr> 
                        <?php 
                                $jumlah++;
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php require "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>