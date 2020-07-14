<?php 
      $serve = "127.0.0.1";
      $username = "root";
      $password = "";
      $dbname = "ListView";
   
      $conn = new Mysqli($serve, $username, $password, $dbname);
      if($conn->connect_error){
          die('connect error: ' . $conn->connect_error);
      }
      //echo '連線成功';
?>