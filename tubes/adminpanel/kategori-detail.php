<?php 
 // require "session.php"
 require "../koneksi.php";

  $id = $_GET['q'];

 $query = mysqli_query($conn, "SELECT * FROM kategori WHERE id='$id'");
 $data = mysqli_fetch_array($query);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori</title>
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
<body>
    

    <div class="container mt-5">
    <h2>Detail Kategori</h2>

    <div class="col-12 col-md-6">
    <form action="" method="post">
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" id="kategori" class="form-control" value="<?php 
        echo $data['nama'];  ?>">
    </div>
    <div class="mt-5 d-flex justify-content-between">
        <button type="submit" class="btn btn-primary" name="btnedit">Edit</button>
        <button type="submit" class="btn btn-danger" name="btndelete">Delete</button>
        </div>
    </form>

    <?php 
        if(isset($_POST['btnedit'])) {
            $kategori = htmlspecialchars($_POST['kategori']);

          if($data['nama']==$kategori){
            ?>
                <meta http-equiv="refresh" content="1; url=kategori.php" />
            <?php
          }  
          else{
            $query = mysqli_query($conn, "SELECT * FROM kategori WHERE nama='$kategori'");
            $jumlahData = mysqli_num_rows($query);
            
            if($jumlahData > 0) {
                ?>
                    <div class="alert alert-primary mt-3" role="alert">
                            Kategori Sudah Ada
                     </div>
                <?php
            }
            else {
                $querySimpan = mysqli_query($conn, "UPDATE kategori SET nama='$kategori' WHERE id='$id'" );
                        
                        if($querySimpan) {
                        ?>
                        
                            <div class="alert alert-primary mt-3" role="alert">
                            Kategori Berhasil Diupdate
                            </div>

                            <meta http-equiv="refresh" content="1; url=kategori.php" />
                            <?php 
                            
                        }
                        else{
                            echo mysqli_error($conn);
                        } 
                    }
            }
          }

          if(isset($_POST['btndelete'])) {
            $queryDelete = mysqli_query($conn, "DELETE FROM kategori WHERE id='$id'");

            if($queryDelete) {
                ?>
                    <div class="alert alert-primary mt-3" role="alert">
                            Kategori Berhasil Dihapus
                    </div>

                    <meta http-equiv="refresh" content="2; url=kategori.php" />
                <?php
            }
            else {
                echo mysqli_error($conn); 
            }
          }
        
    ?>
    </div>
</div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>