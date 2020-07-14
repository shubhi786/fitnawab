<?php
 
 $hostname = "sql311.epizy.com";
 $uname = "epiz_26207018";
 $pass = "6APfHtsRnmHL";
 $dbname = "epiz_26207018_focusfit";

  $conn = mysqli_connect($hostname,$uname,$pass) or die("unable to connect");

  if($conn)
  {
      echo '';
  }
  else {
      echo '';
  }

  mysqli_select_db($conn,$dbname);

 
?>