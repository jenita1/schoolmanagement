<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "admin";
$db_name     ="School";

ini_set('display_errors', 1); 


//creating connection 
$conn = mysqli_connect($db_server,$db_username,$db_password,$db_name);



//checking connection
if($conn->connect_error){
	die("connection failed:".$conn->mysqli_connect_error());
            }
 
?>