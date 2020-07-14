<!DOCTYPE html>
 <?php
   session_start();

    if($_SESSION['loggedin'] == true;)
    {
      $username = $_SESSION['uname'];
    }

    else 
    {
       header('location:login.php');
    }
  
 ?>
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

      .status_btn {
         background-color:#3f4441;
         border-radius:10px;
         padding:10px;
         color:white;
      }

     </style>

</head>
<body>
    <div class="container">
       <div class="heading"><h1 class="text-center bg-secondary">Admin Panel</h1></div>

       <div class="container">
          <h2 class="text-center text-capitalize mt-5" style="font-size:35px;"> WELCOME <?php echo $username; ?></h2>

          <a href="logout.php" class="text-decoration-none text-white p-2 bg-secondary rounded" style="font-size:20px;">Log Out</a>
       </div>

       <table class="table table-bordered table-striped table-hover">
          <tr>
             <th>
                ID
             </th>

             <th>
                FULL NAME
             </th>

             <th>
                PHONE
             </th>

             <th>
                AGE
             </th>

             <th>
                QUESTION
             </th>
             <th>
                STATUS
             </th>
             <th>
                CHANGE
             </th>
          </tr>

<?php

            //  include('dbconfig.php');

          include('dbconfig.php');

            $q = "SELECT * FROM `advice`";

            $run = mysqli_query($conn,$q);

            $num = mysqli_num_rows($run);

            if($num > 0)
            {
                while($rows = mysqli_fetch_assoc($run))
                { 
                   
                   ?>
          <tr>
             <td><?php echo $rows['id']; ?></td>
             <td><?php echo $rows['fname']; ?></td>
             <td><?php echo $rows['phone']; ?></td>
             <td><?php echo $rows['age']; ?></td>
             <td><?php echo $rows['content']; ?></td>

             <?php
                if($rows['status'] == 1)
                {?>
             <td class="check" style="background-color:#91bd3a;"><?php echo $rows['status']; ?></td>
             <?php
                }
                else
                { ?>
             <td class="check" style="background-color:#fa1616;"><?php echo $rows['status']; ?></td>
            <?php
                }
              ?>
             <td>
               <a href="update.php?id=<?php echo $rows['id']; ?> & status=<?php echo $rows['status']; ?> " class="status_btn text-decoration-none ">DONE</a>
             </td>
          </tr>
          <?php
                }
            }
           
           ?>
       </table>
    </div>

    <script>
      // let check = document.querySelector('.check');
      

      
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <script  src="../js/aos.js" type="text/javascript"></script> 
</body>
</html>