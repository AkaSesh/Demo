<?php
  include('connection.php');
  $db = new DBConnection;
  $conn = $db->createconn();
  if(isset($_POST["Submit"])) {
   $Id = $_POST["Id"];
   mysqli_select_db($conn, 'Employee');

$sql = 'UPDATE Employee
SET Firstname = "'.$_POST['First_name'].'", Middlename = "'.$_POST['Middle_name'].'", Lastname = "'.$_POST['Last_name'].'", 
Age = "'.$_POST['Age'].'", Field_of_study = "'.$_POST['Field_of_study'].'", Department = "'.$_POST['Department'].'", 
Salary = "'.$_POST['Salary'].'", Address = "'.$_POST['Address'].'", 
Email = "'.$_POST['Email_address'].'", Phone_number = "'.$_POST['Phone_number'].'"
WHERE Id="'.$Id.'";';

   $retval = mysqli_query( $conn, $sql);
        if(! $retval ) {
            die('Could not get data: ' . mysqli_error($conn));
         }
         echo "Updated successfuly";
  }
     
     ?>