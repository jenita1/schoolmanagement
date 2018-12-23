<?php
include ("config.php");
session_start();
if($_SERVER ["REQUEST METHOD"] =="POST"){
  $username =mysqli_real_escape_string($link,$_POST['username']);
  $password =mysqli_real_escape_string($link,$_POST['password']);


//selecting from table teachers
$sql = "SELECT id FROM teachers WHERE username = '$username' and password = '$password'";
$row =mysqli_fetch_array($result,MYSQLI_ASSOC);
$active =$row['active'];
$count =mysqli_num_rows($result);

//after matched matched

if($count==1){
  session_register("username");
  $_SESSION['login user'] =$username;
  header("location:teachers/home.php");

}
else{
  $error="Your login is invalid";
}

           }

?>

  <div class="container">

    <form class="well form-horizontal" action="/login.php?>" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Login</b></h2></center></legend><br>

<!-- Text input-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 50px; }
    </style>
</head>
<body>
    <div class="wrapper">
       
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
                            <input type="submit" class="btn btn-primary" value="Login">
                            <p>Doesnot have and account? <a href="../register.php">Register here</a>.</p>
              
                       
                    </form>
                </div>    
            </body>
            </html>
