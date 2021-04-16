<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "thepearlshousedinein";

  $conn = mysqli_connect($servername,$username,$password,$database);

  if($conn->connect_error){
    die("Failed connection to MySQL: " . $conn->mysqli_connect_error);
  }

?>
