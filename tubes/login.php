<?php 

require 'koneksi.php';
require 'function.php';

if ( isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'" );

  // cek username
  if( mysqli_num_rows($result) === 1 ) {
  
    // cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])) {
      header("Location: index.php");
      exit;
    }
  }

  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>

    <div class="main-container">
      <input type="checkbox" id="slide" />
      <div class="container">
        <div class="login-container">
          <div class="text">Login</div>

          <?php if( isset($error)) : ?>
    <p style="color: red, font-style: italic;" > Username / Password salah</p>
    <?php endif; ?>

          <form action="" method="post">
            <div class="data">
              <label for="">Username</label>
              <input type="text" name="username" id="username" required />
            </div>

            <div class="data">
              <label for="">Password</label>
              <input type="password" name="password" id="username" required />
            </div>

            <div class="btn-login">
              <button type="submit" name="login">login</button>
            </div>

            <div class="signup-link">
              Belum punya akun ?<a href="register.php">Register now</a
              >
            </div>
          </form>
        </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
