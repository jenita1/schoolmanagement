<?php
$servername   = "localhost";
$username = "root";
$dbpassword = "admin";
$dbname     ="School";


//creating connection 
$conn = new mysqli($servername,$username,$dbpassword,$dbname);

//checking connection
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
            }
else{

      echo "connected succesfully";
  }
?>