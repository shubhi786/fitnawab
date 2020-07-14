<?php 

// include('dbconfig.php');

include('dbconfig.php');

  $id = $_GET['id'];

  $status = $_GET['status'];

  if($status == 0)
  {

  $up = "UPDATE `advice` SET `status` = '1' WHERE id='$id' ";

  $update = mysqli_query($conn,$up);

  header('location:admin.php');

  }

  else
  {
    $up1 = "UPDATE `advice` SET `status` = '0' WHERE id='$id' ";

    $update1 = mysqli_query($conn,$up1);

    header('location:admin.php');

  }

?>