<?php 

require "koneksi.php";
require "function.php";

// memeriksa tombol ketika di klik
if (isset($_POST["register"])) {

// menampilkan registrasi sukses
  if (register($_POST) > 0) {
    echo "<script>
          alert('User baru berhasil ditambahkan.');
          </script>";
?>
  <meta http-equiv="refresh" content="1; url=login.php"/>
<?php 
  } else {
    echo mysqli_error($conn);
  }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="main-container">
      <input type="checkbox" id="slide" />
      <div class="container">

        <div class="signup-container">
          <div class="text">Register</div>

          <form action="" method="post">
            <div class="data">
              <label for="">Username</label>
              <input type="text" name="username" autofocus autocomplete="off" required />
            </div>

            <div class="data">
              <label for="">Password</label>
              <input type="password" name="password" required />
            </div>

            <div class="data">
              <label for="">Confirm Password</label>
              <input type="password" name="password2" required />
            </div>

            <div class="btn-signup">
              <button type="submit" name="register" id="register" >Register</button>
            </div>

            <div class="signup-link">
              Udah punya akun ?
              <a href="login.php">Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
