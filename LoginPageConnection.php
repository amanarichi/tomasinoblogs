<?php
 //Connection String
 $servername = "localhost";
 $username = "root"; 
 $password = "";
 $database = "TomasinoBlogsDB";
 

  //Create Connection
 $connection = new mysqli($servername, $username, $password, $database);
 if($connection->connect_error){
    die("connection Failed".$connection->connect_error);
 }
 echo "";
?>