<?php

$sname= "localhost:3306";
$unmae= "root";
$password = "";

$db_name = "Admins";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}