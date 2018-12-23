<?php
//connection to db
include("config.php");

session_start();


if(isset($_REQUEST['submit'])){
    echo "hello";
$username =mysqli_escape_real_string($conn,$username);
$password =mysqli_escape_real_string($conn,$password);
$repeatpassword =mysqli_escape_real_string($conn,$repeatpassword);
$name=mysqli_escape_real_string($conn,$name);
$post =mysqli_escape_real_string($conn,$post);





    $sql = "INSERT INTO teachers(username,password,repeatpassword,name,post) VALUES('$username',$password,$repeatpassword,$name,$post)";
    if(mysqli_query($conn,$sql)){
        echo "registered successfully";
    }
    else{
        echo "error in registration" .$sql . "<br>" .mysqli_error($conn);
    }



}
?>

<div class="container">

    <form class="well form-horizontal" action="register.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Names -->
<legend><center><h2><b>Add teacher</b></h2></center></legend><br>

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
            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>name</label>
                <input type="name" name="name" class="form-control" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($post_err)) ? 'has-error' : ''; ?>">
                <label>post</label>
                <input type="post" name="post" class="form-control" value="<?php echo $post; ?>">
                <span class="help-block"><?php echo $post_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
          
        </form>
    </div>    
</body>
</html>