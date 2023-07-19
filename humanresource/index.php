<?php
	//start session
	session_start();
 
	//redirect if logged in
	if(isset($_SESSION['username'])){
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: url('Background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="http://localhost/humanresource/index.php">Human_Resource Management</a>
        </div>
    </div>
</nav>
<div class="col-md-2 col-md-offset-2">
		<a href="http://localhost/humanresource/hire.php"  class="btn btn-success navbar-btn btn-lg" >Hire employee</a>
        
    <a href="http://localhost/humanresource/fire.php" class="btn btn-danger navbar-btn btn-lg">Fire employee</a>
        
		<a href="http://localhost/humanresource/update.php" class="btn btn-primary navbar-btn btn-lg">Update employee info</a>
        
		<a href="http://localhost/humanresource/view.php"  class="btn btn-info navbar-btn btn-lg">View employees</a>  
</div>
<div class="col-md-2 col-md-offset-2">
<a href="http://localhost/humanresource/Admin.php"  class="btn btn-default navbar-btn btn-lg">Log out</a>  
</div>
</body>
</html>
