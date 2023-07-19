<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';   	   

   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   $sql = 'CREATE Database Admins';

   $retval = mysqli_query( $conn, $sql);
   
   if(! $retval ) {

    die('Could not create database: ' . mysqli_error($conn));
   }
   
   echo "Database Admins created successfully\n";

   $sql = 'CREATE Database Employee';

   $retval = mysqli_query( $conn, $sql);
   
   if(! $retval ) {

    die('Could not create database: ' . mysqli_error($conn));
   }
   
   echo "Database employee created successfully\n";

?>