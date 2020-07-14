<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

            <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/docs/assets/vendors/jquery.min.js"></script>

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      type="text/css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/animate.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <link rel="stylesheet" href="../css/aos.css" />
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/icofont.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/icofont.css" type="text/css" />
    <link rel="stylesheet" href="../font/flaticon.css" type="text/css" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/fontawesome.min.js"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap"
      rel="stylesheet"
    />

    <link rel="icon" href="resources/filename" />

    <script src="js/jquery-3.4.1.js" type="text/javascript"></script>

    <style>
       * {
        margin: 0;
        padding: 0;
        font-family: "Montserrat", sans-serif;
      }

      h1 {
        text-shadow: 4px 1px 2px rgba(0, 0, 0, 0.5);
      }

      body {
        overflow-x: hidden;
      }

      .submit_btn {
  width:100%;
  height:50px;
  background-color:#18b0b0;
  border:none;
  margin-top:5%;
  transition:.2s ease;
}

.submit_btn:hover {
  width:100%;
  height:50px;
  background-color:transparent;
  border:2px solid #18b0b0;
  color:#18b0b0;
  font-weight:bold;
  text-align:center;
  transition:.2s ease;
}

    </style>
</head>
<body>
    
     <section>
         <div class="container mt-5">
            <div class="container">
               <h1 class="text-center text-capitalize">ADMIN LOGIN</h1>
            </div>

            <form action="" method="post" class="form container">

            <?php 
              include('dbconfig.php');

      if(isset($_POST['login']))
      {
          $uname = $_POST['uname'];
          $pass = $_POST['pass'];

          $q = "SELECT * FROM users WHERE uname = '$uname' AND pass = '$pass' ";


          $run = mysqli_query($conn,$q);

          $num = mysqli_num_rows($run);

          if($num == 1)
          {
              session_start();

              $_SESSION['loggedin'] = true;

              $_SESSION['uname'] = $uname;

              header('location:admin.php');
          }
      }
            ?>
                <div class="parent mt-5">
                   <label for="username">Username</label>
                   <input type="text" class="form-control" name="uname">
                </div>
                <div class="parent mt-5">
                   <label for="password">Password</label>
                   <input type="password" class="form-control" name="pass">
                </div>

                <input type="submit" class="submit_btn" name="login">
            </form>
         </div>
     </section>

    
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <script  src="js/aos.js" type="text/javascript"></script> 
</body>
</html>