<?php
   include ('Employee.php');
   $firstname = $_POST['First_name'];
   $middlename = $_POST['Middle_name'];
   $lastname = $_POST['Last_name'];
   $age = $_POST['Age'];
   $field_of_study = $_POST['Field_of_study'];
   $department = $_POST['Department'];
   $salary = $_POST['Salary'];
   $gender = $_POST['radio'];
   $address = $_POST['Address'];
   $email = $_POST['Email_address'];
   $phone_number = $_POST['Phone_number'];
   
   $st1=new Employee($firstname, $middlename, $lastname, $age, $field_of_study, $department, $salary, $gender, $address, $email, $phone_number);
   $st1->insertEmployee();
  

?>