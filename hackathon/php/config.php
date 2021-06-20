<?php
  $hostname = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
//$conn = mysqli_connect("localhost", "root", "root", "bot") or die("Database Error");

if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
