<?php
   $sname= "localhost:3306";
   $unmae= "root";
   $password = "";
   $db_name = "Patient";
   
   $conn = mysqli_connect($sname, $unmae, $password, $db_name);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }

   $sql = "CREATE TABLE adminn(
      username VARCHAR(50) NOT NULL,
      password VARCHAR(50) NOT NULL)";
      $retval = mysqli_query( $conn, $sql);
      
   if(! $retval ) {
      die('Could not create Table: ' . mysqli_error($conn));
   }

   echo "Table created successfully\n";

?>