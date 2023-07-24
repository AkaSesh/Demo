<!DOCTYPE html>
<html>
<?php 
ob_start();
session_start();
$_SESSION['user'] = "username";
?>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    background-color:grey;
    color:darkblue;
}
</style>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

tr:nth-child(even) {
    background-color: darkkhaki;
}

th, td {
  border-bottom: 1px solid darkgreen;
  text-align: left;
  padding: 8px;
  }
</style>
</head>
<body style="background-color:gray;">
<nav class="navbar navbar-inverse">
    <div style="background-color:darkkhaki;" class="container-fluid">
        <a class="navbar-brand" style="color:black" href="http://localhost/Final P/index.php">-Home</a>
        <a class="navbar-brand" style="color:black" href="mailto:Tikuranbassa@gmail.com">-Tikuranbassa@gmail.com</a>
    </div>
    <div>    
      <a href="http://localhost/Final P/logout.php"  class="btn btn-default navbar-btn btn-lg">Log out</a>  
    </div>
</nav>
<?php
   include('createconn.php');

	 $sql = 'SELECT * FROM Record';
   $retval = mysqli_query( $conn, $sql);

   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
?>
<section class="content">
<div class="container-fluid" style="overflow-x:auto;">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <header style="background:green; color:white; padding:20px 20px;">Patient record</header>              
            </div>
              <!-- /.card-header -->
              <div class="card-body">
    <table style ="table-layout:inherit" id="view" class="table table-bordered table-hover">
    <colgroup>
    <th>Site_of_registration</th>
    <th>Diagnosis</th>
    <th>Fullname</th>
    <th>Phone_number1</th>
    <th>Next_of_kin_Phone_number1</th>
    <th>Phone_number2</th>
    <th>Gender</th>
    <th>Other_diagnosis</th>
    <th>Attach_echo_report</th>
    <th>Date_of_regist_at_hospital</th>
    <th>Echo_for_vhd</th>
    <th>Echo_for_conclusion</th>
    <th>Echo_for_ef</th>
    <th>Pulmonary_hypertension</th>
    <th>Echo_for_chd</th>
    <th>Todays_date</th>
    <th>Medications</th>
    <th>Others_drug_specify</th>
    <th>Region</th>
    <th>Specific_village</th>
    <th>Adress_closest</th>
    <th>Card_number</th>
    <th>Unique_rhd_number</th>
    <th>House_number</th>
    <th>Nyha_class</th>
    <th>Interventions_done</th>
    <th>Interventions_recomended</th>
    </colgroup>
    <tbody>
    <?php 
  while($row = mysqli_fetch_assoc($retval)) {
    ?>
    <tr> 
    <td><?php echo $row['Site_of_registration']; ?> </td>
     <td><?php echo $row['Diagnosis']; ?> </td> 
     <td><?php echo $row['Fullname']; ?></td> 
     <td><?php echo $row['Phone_number1']; ?> </td> 
     <td><?php echo $row['Next_of_kin_phone_number1']; ?></td> 
     <td><?php echo $row['Phone_number2']; ?></td> 
     <td><?php echo $row['Gender']; ?></td> 
     <td><?php echo $row['Other_diagnosis']; ?></td> 
     <td><?php echo $row['Attach_echo_report']; ?></td> 
     <td><?php echo $row['Date_of_regist_at_hospital']; ?></td> 
     <td><?php echo $row['Echo_for_vhd']; ?></td> 
     <td><?php echo $row['Echo_conclusion']; ?></td> 
     <td><?php echo $row['Echo_ef']; ?></td> 
     <td> <?php echo $row['Pulmonary_hypertension']; ?></td>
     <td> <?php echo $row['Echo_for_chd']; ?></td>
     <td><?php echo $row['Todays_date']; ?></td>
     <td><?php echo $row['Medications']; ?></td>
     <td><?php echo $row['Others_drug_specify']; ?></td>
     <td><?php echo $row['Region']; ?></td>
     <td><?php echo $row['Specific_village']; ?></td>
     <td><?php echo $row['Adress_closest']; ?></td>
     <td><?php echo $row['Card_number']; ?></td>
     <td><?php echo $row['Unique_rhd_number']; ?></td>
     <td><?php echo $row['House_number']; ?></td>
     <td><?php echo $row['Nyha_class']; ?></td>
     <td><?php echo $row['Interventions_done']; ?></td>
     <td><?php echo $row['Interventions_recomended']; ?></td>
    </tr> 
    </tbody>
  <?php }?>
    </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </body>
</html>