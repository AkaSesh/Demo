<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('Background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
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
<form action="Delete.php" method="POST">
<div class="col-xs-2">
  <label for="Id">Enter_Id:</label>
  <input type="text" class="form-control"  name="Enter_Id" id="Id">
</div>
<div class="col-xs-4">
  <label for="Reason">Reason</label>
  <textarea class="form-control"  name="Reason" rows="5" id="Reason"></textarea>
</div>
<button type="submit" name="Submit" class="btn btn-danger" id="submit">Submit</button>
</form>
</body>
</html>
