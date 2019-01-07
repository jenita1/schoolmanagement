<?php
//link to db
include("config.php");

session_start();
if($_SERVER['REQUEST METHOD']==POST)
{
  $inUsername =$_POST["username"];
  $inPassword =$_POST["password"];
  $inEmail =$_POST["email"];
  $inPost=$_POST["post"];
  $encryptPassword =password_hash($inPassword,PASSWORD_DEFAULT);
  $query =$conn->prepare("INSERT INTO teachers(username,password,email,post) VALUES(?,?,?,?)");
$query->bind_params("ssss",$inUsername,$inPassword,$inEmail,$post,$encryptPassword);//indicates integer type 
$query->execute();
$result =$query->affected_rows;
$query->close();
$conn->close();
if($result >0){
  // teacher will be directed to login page 
  header("location:login.php");
}else{
  echo "Something went wrong";
}

}

ini_set('display_errors', 1);

?>
