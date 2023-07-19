<?php
   include('connection.php');
 
class Admin {
 
   
 
    public function check_login($username, $password){
 	    $db = new DBConnection;
        $conn = $db->createconn();
		$sql = "SELECT * FROM Emp WHERE username = '$username' AND password = '$password'";
        $retval = mysqli_query( $conn, $sql);
        if($retval->num_rows > 0){
            $row = $retval->fetch_array();
            return $row['Id'];
        }
        else{
            return false;
        }
    }
 
    public function details($sql){
        $db = new DBConnection;
        $conn = $db->createconn();
		 
        $query = mysqli_query($conn, $sql);
 
         $row = $query->fetch_array();
 
        return $row;       
    }
 
    public function escape_string($value){
        $db = new DBConnection;
        $conn = $db->createconn();
        return $conn->real_escape_string($value);
    }
}