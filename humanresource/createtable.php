<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));

   }
   mysqli_select_db($conn, "Admins");
    
   $sql = "CREATE TABLE users(username VARCHAR(50) NOT NULL,
   password VARCHAR(50) NOT NULL)";

    $retval = mysqli_query( $conn, $sql);
      
   if(! $retval ) {
      die('Could not create Table: ' . mysqli_error($conn));
   }

   echo "Table created successfully\n";

   mysqli_select_db($conn, "Employee");
    
   $sql = "CREATE TABLE Employee(Id INT AUTO_INCREMENT PRIMARY KEY,
      Firstname VARCHAR(50) NOT NULL,
      Middlename VARCHAR(50) NOT NULL,
      Lastname VARCHAR(50) NOT NULL,
      Age INT,
      Field_of_study VARCHAR(50) NOT NULL,
      Department VARCHAR(50) NOT NULL,
      Salary INT,
      Gender CHAR(1),
      Address VARCHAR(50) NOT NULL,
      Email VARCHAR(50) NOT NULL,
      Phone_number INT)";
      $retval = mysqli_query( $conn, $sql);
      
   if(! $retval ) {
      die('Could not create Table: ' . mysqli_error($conn));
   }

   echo "Table created successfully\n";

?>