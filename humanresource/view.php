<!DOCTYPE html>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    background-color:grey;
    color:black;
}
</style>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="http://localhost/humanresource/index.php">Human_Resource Management</a>
        </div>
    </div>
</nav>
</body>
<?php
   include('connection.php');
   $db = new DBConnection;
   $conn = $db->createconn();
    mysqli_select_db($conn, 'Employee');
	 $sql = 'SELECT * FROM Employee';
   $retval = mysqli_query( $conn, $sql);

   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
?>
	  
	<table class=table-bordered>   
    <thead>
    <th>Id</th>
    <th>Firstname</th>
    <th>Middlename</th>
    <th>Lastname</th>
    <th>Age</th>
    <th>Field_of_study</th>
    <th>Department</th>
    <th>Salary</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Email</th>
    <th>Phone_number</th>
    </thead>
    <tbody>
    <?php 
  while($row = mysqli_fetch_assoc($retval)) {
    ?>
    <tr> 
     <td><?php echo $row['Id']; ?> </td> 
     <td><?php echo $row['Firstname']; ?></td> 
     <td><?php echo $row['Middlename']; ?> </td> 
     <td><?php echo $row['Lastname']; ?></td> 
     <td><?php echo $row['Age']; ?></td> 
     <td><?php echo $row['Field_of_study']; ?></td> 
     <td><?php echo $row['Department']; ?></td> 
     <td><?php echo $row['Salary']; ?></td> 
     <td><?php echo $row['Gender']; ?></td> 
     <td><?php echo $row['Address']; ?></td> 
     <td><?php echo $row['Email']; ?></td> 
     <td><?php echo $row['Phone_number']; ?></td> 
    </tr> 
    
   <?php }
    ?>
</tbody>
     </table>
     </html>