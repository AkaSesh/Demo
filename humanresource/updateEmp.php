<!DOCTYPE html>
<html>
    <?php
   include('connection.php');
   $db = new DBConnection;
   $conn = $db->createconn();



   if(isset($_POST["Submit"])) {
    $Id = $_POST["Enter_Id"];
    mysqli_select_db($conn, 'Employee');
    $sql = 'SELECT * FROM Employee WHERE Id="'.$Id.'"';
  $retval = mysqli_query( $conn, $sql);

  if(! $retval ) {
     die('Could not get data: ' . mysqli_error($conn));
  }
  ?>
  <?php while($row = mysqli_fetch_array($retval)) { ?>
    
<head>
	<title>PHP </title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <style>
body {
    background-color:grey;
    color:black;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
        <a class="navbar-brand" href="http://localhost/humanresource/index.php">Human_Resource Management</a>
        </div>
    </div>
</nav>
    <form method = "POST" action="Updating.php">
    <div class="row">
    <div class="col-lg-4">
    <div class="col-xs-2">
        <label for="Id">Id:</label>
        <input type="text" name="Id" class="form-control" id="Id" value="<?php echo $row['Id']?>">
      </div> 
      <div class="col-xs-8">
        <label for="First_name">First_name:</label>
        <input type="text" name="First_name" class="form-control" id="First_name" value="<?php echo $row['Firstname']?>">
      </div> 
      <div class="col-xs-8">
        <label for="Middle_name">Middle_name:</label>
        <input type="text" name="Middle_name" class="form-control" id="Middle_name" value="<?php echo $row['Middlename']?>">
      </div> 
      <div class="col-xs-8">
        <label for="Last_name">Last_name:</label>
        <input type="text" name="Last_name" class="form-control" id="Last_name" value="<?php echo $row['Lastname']?>">
      </div> 
    
      <div class="col-xs-8">
          <label for="Field_of_study">Field_of_study:</label>
          <input type="text" name="Field_of_study" class="form-control input-sm" id="Field_of_study" value="<?php echo $row['Field_of_study']?>">
      </div>
      </br>
      <div class="col-xs-6">
      <label for="Department">Department:</label>
      <select class="form-control input-sm" name="Department" id="Department" value="<?php echo $row['Department']?>">
        <option>HR</option>
        <option>Manager</option>
        <option>IT_technician</option>
        <option>Guard</option>
      </select>
    </div>
    </br>
      <div class="col-xs-4">
        <label for="Salary">Salary:</label>
        <input type="text" class="form-control" name="Salary" id="Salary" value="<?php echo $row['Salary']?>">
      </div> 
      <div class="col-xs-4">
        <label for="Salary">Age:</label>
        <input type="text" class="form-control" name="Age" id="Age" value="<?php echo $row['Age']?>">
      </div> 
    <label>   
    Gender :  
    </label> 
        <div>
      <label><input type="radio" name="radio">Male</label>
      <label><input type="radio" name="radio">Female</label>
    </div>
    </br>
      </div>
        <div class="col-lg-4">
              <div class="col-xs-8">
                <input type="text" name="country_code"  value="+251" size="2"/>   
                <label for="phone">Phone_number:</label>
                <input type="text" class="form-control" name="Phone_number" value="<?php echo $row['Phone_number']?>" id="phone">
              </div>
    </br> 
    </br> 
    </br>
    </br>
              <div class="form-group">
                <label for="Address">Address:</label>
                <textarea class="form-control" name="Address" rows="5" value="<?php echo $row['Address']?>" id="Address"></textarea>
              </div>  
    
              <div class="col-xs-8">
                  <label for="email">Email_address:</label>
                  <input type="email" class="form-control" name="Email_address" value="<?php echo $row['Email']?>" id="email">
                </div>
    </br>
    </br> 
    </br>   
    </br> 
              <button type="submit" name="Submit" class="btn btn-success">Submit</button>
          </div>
      </div>
    </form>
  <?php }
}
?>