
<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login System Using HTML, CSS, PHP & MYSQL</title>
    <link href="https://www.codeprof.net/login_style.css" rel="stylesheet">
</head>
<body>
<div class="left-door"></div>
    <div class="right-door"></div>
    
    <div class="container" style="margin:70px auto !important;">
   
    <form  action="login.php" method="post">
        <!--display validation error!-->
      <?php include('errors.php'); ?>
   
    <img src="lock.png" alt="Login icon">


    <input type="text" placeholder="Username" name="username">
    <input type="password" placeholder="Password" name="password">
   
    <input type="submit" value="Login" class="btn" name='login'>
    <p><a href="#" style="font-style:normal;">Forgot password? </a> <span class="new_member" style="font-style:normal; display:block; padding:5px;" >New member? <a href="signup.php" style="font-style:normal; color:#3398dd;"> Signup</a></span></p>

  

    
    
    </form>

    </div>
</body>
</html>