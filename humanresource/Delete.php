<?php
   include('connection.php');
   $db = new DBConnection;
   $conn = $db->createconn();

   if(isset($_POST["Submit"])) {
    $Id = $_POST["Enter_Id"];

        mysqli_select_db($conn, 'Employee');

        $sql = 'DELETE FROM Employee WHERE Id="'.$Id.'"';
        $retval = mysqli_query( $conn, $sql);
        
        if(! $retval ) {
            die('Could not get data: ' . mysqli_error($conn));
         }
         echo "Deleted successfuly";
   }
?>