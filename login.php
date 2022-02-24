<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
  <div class="header">
    
  </div>
   
  <form method="post" action="login.php" >
    <?php include('errors.php'); ?>
    <div class="loginbox">
    
    
    <img src="img\avatar.png" alt="login" class="avatar">
    

       <h1>User Login </h1>
       
        
            <p>Username</p>
            <input type="text" name="username" id= "username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <input type="submit" name="login_user" class="login_user" value="Login">
            

            <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
        
  </form>
</body>
</html>