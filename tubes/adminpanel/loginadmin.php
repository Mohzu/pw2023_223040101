<!-- <?php 
    session_start();
    require "../koneksi.php";

    if(isset($_POST["login"])) {
    $username = htmlspecialchars($_POST["username"]);
    $pasword = htmlspecialchars($_POST["password"]) ;

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username = ' $username'");
    $countdata = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);

    if($countdata>1) {
        if (password_verify($password, $data["password"])) {
            $_SESSION["username"] = $data["username"];
            $_SESSION["login"] = true;
            header("location: indexadmin.php");
        }
    }

    $error = true;
    }
        
?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css" />
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

          </form>
        </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
