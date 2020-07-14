<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    

    <script src="js/jquery-3.4.1.js" type="text/javascript"></script>

    <style>
      * {
        margin: 0;
        padding: 0;
      }

      .parent label {
        color: #000;
      }
    </style>
  </head>
  <body>
    <section>
      <div class="container">
        <form class="form-signup" method="post" action="">
          <div class="parent">
            <input class="input" type="text" name="fname" required />
            <label>Full Name</label>
          </div>
          <div class="parent">
            <input type="text" name="uname" required />
            <label>Username</label>
          </div>
          <div class="parent">
            <input type="password" name="pass" required />
            <label>Password</label>
          </div>
          <div class="parent">
            <input type="text" name="mobile" required />
            <label>Mobile</label>
          </div>
          <div class="parent">
            <input type="email" name="email" required />
            <label>Email</label>
          </div>
          <div class="submit-button">
            <input
              class="signup-btn"
              type="submit"
              name="signup"
              value="Sign Up"
            />
          </div>
          <div class="userinfo">
            <span class="home"><a href="../index.php">back to home </a></span>
            <span class="signup-text text-light"> , If already a user</span>
          </div>
          <div class="login-info">
            <button class="login-btn" name="signup">
              <a href="login.php">Log In</a>
            </button>
          </div>
        </form>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script src="js/aos.js" type="text/javascript"></script>
  </body>
</html>
