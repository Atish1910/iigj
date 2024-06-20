<?php

  // Database connection parameters
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "shreeratnadeep_cvraman";


  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if(!$conn){
      echo "die";
  }
  
?>