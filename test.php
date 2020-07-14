<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.2/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/docs/assets/vendors/jquery.min.js"></script>
</head>
<body>
    <?php
                
                
 $hostname = "localhost";
 $uname = "root";
 $pass = "";
 $dbname = "elib";

  $conn = mysqli_connect($hostname,$uname,$pass) or die("unable to connect");

  if($conn)
  {
      echo 'done';
  }
  else {
      echo '';
  }

  mysqli_select_db($conn,$dbname);

    
?>

    <form action="" method="post">

    <?php 

          if(isset($_POST['input']))
                      {
                       $fname = $_POST['fname'];
                       $content = $_POST['content'];
                       $age = $_POST['age'];
                       $phone = $_POST['phone'];
                       

                        $q="INSERT INTO `try` VALUES ( '0' ,'$fname' , '$content' , '$phone' , '$age' )";

                        $res=mysqli_query($conn,$q);

                        if($res)
                        {?>
  <script>
                        $(document).ready(function(){
    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Message has been sent',
  showConfirmButton: false,
  timer: 1500
})
                        });
                           </script>
                           <?php 
                        }
                        else 
                        {?>
                        <script>
                        $(document).ready(function(){
    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Message has been sent',
  showConfirmButton: false,
  timer: 1500
})
                        });
                           </script>
                           <?php 
                        }
                      }
    ?>
        <input type="text" name="fname">
        <input type="text" name="content">
        <input type="text" name="phone">
        <input type="submit" name="input">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>
</html>