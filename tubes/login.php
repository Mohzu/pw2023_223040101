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

          <form action="#">
            <div class="data">
              <label for="">Email</label>
              <input type="text" required />
            </div>

            <div class="data">
              <label for="">Password</label>
              <input type="password" required />
            </div>

            <div class="btn-login">
              <button type="submit">login</button>
            </div>

            <div class="signup-link">
              Belum punya akun ?<a href="#"
                ><label for="slide" class="slide">Signup now</label></a
              >
            </div>
          </form>
        </div>

        <div class="signup-container">
          <div class="text">Sign up</div>

          <form action="#">
            <div class="data">
              <label for="">Email</label>
              <input type="text" required />
            </div>

            <div class="data">
              <label for="">Password</label>
              <input type="password" required />
            </div>

            <div class="data">
              <label for="">Confirm Password</label>
              <input type="password" required />
            </div>

            <div class="btn-signup">
              <button type="submit">Sign Up</button>
            </div>

            <div class="signup-link">
              Udah punya akun ?
              <a href="#"><label for="slide" class="slide">Login</label></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
