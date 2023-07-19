<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
    mysqli_select_db($conn, 'Employee');
	 $sql = 'INSERT INTO Employee(Id, Firstname, Middlename, Lastname, Age, Field_of_study, Department, Salary, Gender, Address, Email, Phone_number) VALUES ("", "", "",'. 29 . ')';
   $retval = mysqli_query( $conn, $sql);
   
   if(! $retval ) {
      die('Could enter data: ' . mysqli_error($conn));
   }
   
   echo "Data Inserted successfully\n";

?>