
<DOCTYPE HTML>
    <html>
    <head>
     <script>

   function validate()
            {
                var username =document.register.username.value;
                var email =document.register.email.value;
                var password =document.register.password.value;
                var post =document.register.value;

                if(username==null || username==""){
                    alert("username cannot be blank");
                }else if(email==null || email==""){
                     alert('email cannot be blank');
                }
                else if(password==null || password=""){
                    alert ("password cannot be blank");
                }
                else if(post ==null || post =""){
                    alert("post cannot be blank");
                }
            ini_set('display_errors', 1);

            }


</script>
</head>
</html>



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
        <h2>Add Teachers</h2>
       
        <form action=""<?php echo htmlspecialchars($_POST["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username)) ? 'has-error' : ''; ?>">
                <label>username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
          
            </div>    
            <div class="form-group <?php echo (!empty($password)) ? 'has-error' : ''; ?>">
                <label>password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
   
            </div>
            <div class="form-group <?php echo (!empty($password)) ? 'has-error' : ''; ?>">
                <label>email</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
            
            </div>

            <div class="form-group <?php echo (!empty($post)) ? 'has-error' : ''; ?>">
                <label>post</label>
                <input type="post" name="post" class="form-control" value="<?php echo $post; ?>">
            
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
          
        </form>
    </div>    
</body>
</html>