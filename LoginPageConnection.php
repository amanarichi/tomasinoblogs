<?php
 //Connection String
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "tomasinoblogsdb";


  //Create Connection
$connection = mysqli_connect($servername, $username, $password, $database);

if ($connection->connect_error) {
      die("Connection failed: " . $conn->connect_error);
} else {
      echo "";
}
?>