<?php 
session_start(); 
include "createconn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: Admin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: Admin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE username= '$uname' AND password= '$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	header("Location: index.php");
		        exit();
            }else{
				header("Location: Admin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: Admin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: Admin.php");
	exit();
}