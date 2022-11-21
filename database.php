<?php
  function connection()
  {
    //CONNECT TO MYSQL DATABASE USING MYSQLI
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $databasename = "origin-gamer";
    

    $connect = mysqli_connect($servername,$username,$password,$databasename);
    if (!$connect) {
        die("() failed: " . mysqli_connect_error());
            echo "not connected";
      }
    
      else echo "connected";
      return $connect;
    }

?>
 