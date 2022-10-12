<?php
 if(!isset($_SESSION))
      {
        include('./header.php');
        session_start();
      }
  $mysqli = new mysqli('localhost','root','','dzaky_db');
  if ($mysqli -> connect_errno) {
     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
     exit();
    }
?>

