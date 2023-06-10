<?php 

session_start();

// Periksa apakah pengguna belum login
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit();
  }
    require "session.php";
    require "../koneksi.php";

    $queryKategori = mysqli_query($conn, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kategori</title>
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
    </style>
  </head>

  <body>

  <?php require "navbar.php" ?>

  <div class="container mt-7 pt-5" style= "margin-top: 5rem;">
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
            <a href="indexadmin.php" class="no-decoration text-muted"> <i class="fas fa-home"></i> Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Kategori
            </li>
        </ol>
        </nav>

        <div class="my-5 col-12 col-md-6">
            <h3 class="text-black">Tambah Kategori</h3>

            <form action="" method="post">
                <div>
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" placeholder="input nama kategori" class="form-control" autofocus autocomplete="off">
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="simpan_kategori">Simpan</button>
                </div>
            </form>

            <?php 
                if(isset($_POST["simpan_kategori"])) {
                    $kategori = htmlspecialchars($_POST["kategori"]);

                    $queryExist = mysqli_query($conn, "SELECT nama FROM kategori WHERE nama='$kategori'");
                    $jumlahDataKategoriBaru = mysqli_num_rows($queryExist);

                    if($jumlahDataKategoriBaru > 0) {
                        ?>
                        <div class="alert alert-primary mt-3" role="alert">
                            Kategori Sudah Ada
                        </div>
                        <?php 
                    }
                    else{
                        $querySimpan = mysqli_query($conn, "INSERT INTO kategori (nama) VALUES ('$kategori')" );
                        
                        if($querySimpan) {
                        ?>
                        
                            <div class="alert alert-primary mt-3" role="alert">
                            Kategori Berhasil Disimpan
                            </div>

                            <meta http-equiv="refresh" content="1; url=kategori.php" />
                            <?php 
                            
                        }
                        else{
                            echo mysqli_error($conn);
                        } 
                    }
                }
            ?>
        </div>

        <div class="mt-3">
            <h2 class="text-black">List Kategori</h2>

            <div class="table-responsive mt-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if($jumlahKategori==0){
                        ?>
                            <tr>
                                <td colspan=3 class="text-center">Kategori tidak tersedia</td>
                            </tr>
                        <?php 
                            }
                            else{
                                $jumlah = 1;
                                while($data=mysqli_fetch_array($queryKategori)) {
                        ?>
                                <tr>
                                    <td><?php echo $jumlah; ?></td>
                                    <td><?php echo $data["nama"] ?></td>
                                    <td>
                                        <a href="kategori-detail.php?q=<?php echo $data['id']; ?>"class= "btn btn-info"><i class="fas fa-search"></i></a>
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