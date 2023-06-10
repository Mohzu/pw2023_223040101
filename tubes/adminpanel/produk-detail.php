<?php 

session_start();

// Cek apakah session 'login' sudah di set, jika tidak diarahkan ke halaman login
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit();
  }
 require "session.php";
 require "../koneksi.php";

  $id = $_GET['q'];

// Query untuk mengambil data produk berdasarkan id
  $query = mysqli_query($conn, "SELECT a.*, b.nama AS nama_kategori FROM produk a JOIN kategori b ON 
  a.kategori_id=b.id WHERE a.id='$id'");

// Mengambil data hasil query
  $data = mysqli_fetch_array($query);

// Query untuk mengambil data kategori selain kategori produk yang sedang ditampilkan
  $queryKategori = mysqli_query($conn, "SELECT * FROM kategori WHERE id!='$data[kategori_id]'");
 
  // Rename File
  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];

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
    <title>Produk Detail</title>
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
</head>

    <style>
        form div {
            margin-bottom: 10px;
        }
    </style>

<body>
    <?php require "navbar.php" ?>

    <div class="container mt-7 pt-5" style= "margin-top: 5rem;">
        <h2 class="text-black">Detail Produk</h2>

        <div class="col-12 col-md-6 mb-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="nama" class="text-black">Nama</label>
                    <input type="text" id="nama" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" autocomplete="off" required>
                </div>
                <div>
                    <label for="kategori" class="text-black">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="<?php echo $data['kategori_id']; ?>"><?php echo $data['nama_kategori']; ?></option>
                        
                        <?php 
                        while ($dataKategori = mysqli_fetch_array($queryKategori)) {
                        ?>
                            <option value="<?php echo $dataKategori['id']; ?>; ?>"><?php echo $dataKategori['nama']; ?></option>
                        <?php 
                        }
                        ?>
                        
                    </select>
                </div>
                <div>
                    <label for="harga" class="text-black">Harga</label>
                    <input type="text" class="form-control" value="<?php echo $data['harga'] ?>" name="harga" autofocus autocomplete="off" required >
                </div>
                <div>
                    <label for="currentFoto" class="text-black">Foto Produk :</label>
                    <img src="../img/<?php echo $data['foto'] ?>" alt=""
                    width="300px">
                </div>
                <div>
                    <label for="foto" class="text-black">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div>
                    <label for="detail" class="text-black">Detail</label>
                    <textarea name="detail" id="detail" cols="30" rows="10" class="form-control" autofocus autocomplete="off" required>
                        <?php echo $data['detail'] ?>
                    </textarea>
                </div>
                <div>
                    <label for="ketersediaan_stok" class="text-black">Ketersediaan Paket</label>
                    <select name="ketersediaan_stok" id="ketersediaan_stok" class="form-control">
                        <option value="<?php echo $data['ketersediaan_stok']; ?>"><?php echo $data['ketersediaan_stok']; ?></option>
                        <?php 
                            if($data['ketersediaan_stok']=='tersedia'){
                        ?>
                             <option value="habis">Habis</option>
                        <?php
                            }
                            else {
                        ?>
                             <option value="tersedia">Tersedia</option>
                        <?php
                            }
                        ?>
                        <option value="habis">Habis</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
                </div>
            </form>

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
                        $queryUpdate = mysqli_query($conn, 
                        "UPDATE produk 
                        SET kategori_id='$kategori', 
                        nama='$nama', 
                        harga='$harga', 
                        detail='$detail', 
                        ketersediaan_stok='$ketersediaan_stok' 
                        WHERE id='$id'");

                        if($nama_file!=''){
                            if($image_size > 500000) {
             ?>
                        <div class="alert alert-primary mt-3" role="alert">
                            File tidak boleh lebih dari 500 kb
                        </div>
            <?php       
                            }
                            else{
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

                                    $queryUpdate = mysqli_query($conn, "UPDATE produk SET 
                                    foto='$new_name' WHERE id='$id'");
                                    

                                    if($queryUpdate) {
             ?>
                                        <div class="alert alert-primary mt-3" role="alert">
                                             Produk Berhasil Diupdate            
                                        </div>
                    
                                         <meta http-equiv="refresh" content="1; url=produk.php" />
             <?php
                                    }
                                    else {
                                        echo mysqli_error($conn);
                                    }
                                }
                            }
                        }
                     }
                }

                if(isset($_POST['hapus'])) {
                    $queryHapus = mysqli_query($conn, "DELETE FROM produk WHERE id='$id'");

                    if($queryHapus) {
             ?>
                    <div class="alert alert-primary mt-3" role="alert">
                         Produk Berhasil Dihapus          
                    </div>

                     <meta http-equiv="refresh" content="1; url=produk.php" />
            <?php
                    }
                }
            ?>
        </div>
    </div>





    <?php require "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>