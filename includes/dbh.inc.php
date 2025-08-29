<?php

//    $serverName = "localhost";
//    $dbUsername = "spec05264362_spec";
//    $dbPassword = "specweb2023";
//    $dbName = "spec05264362_spec";

   $serverName = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "specprofit";
   
   $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
   
   if (!$conn) {
       die("Connection failed: ". mysqli_connect_error());
   }