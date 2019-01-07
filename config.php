<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "admin";
$db_name     ="School";

ini_set('display_errors', 1);


//creating connection
// $conn = mysqli_connect($db_server,$db_username,$db_password,$db_name);
// //checking connection
// if($conn->connect_error){
//     die("connection failed:".$conn->mysqli_connect_error());
//             }

// else{
//     echo "connected successfully";
// }
try {
   $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_username, $db_password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
}
catch(PDOException $e)
{
   echo "Connection failed: " . $e->getMessage();
}

?>