<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';   	   

   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   $sql = 'CREATE Database Patient';

   $retval = mysqli_query( $conn, $sql);
   
   if(! $retval ) {

    die('Could not create database: ' . mysqli_error($conn));
   }
   
   echo "Database patient created successfully\n";

?>