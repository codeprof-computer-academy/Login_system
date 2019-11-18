<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration System Using HTML, CSS, PHP & MYSQL</title>
    <link href="https://www.codeprof.net/login_style.css" rel="stylesheet">
</head>
<body>
<div class="left-door"></div>
    <div class="right-door"></div>
   
  
    <div class="container">
  
    <form action="signup.php" method="post">
<!--Display Validation Error -->
        <?php include('errors.php'); ?>
   
  <img src="icon.png" alt="signup icon">
  

    <div class="input-container">
    <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
    <input type="password" placeholder="Password" name="password_1">
    <input type="password" placeholder="Comfirm Password" name="password_2">

    <input type="submit" value="Signup" class="btn" name="register">

    <p>Already a member? <a href="login.php" style="font-style:normal; color:#3398dd padding:5px;">Login </a></p>
    
   
    
    
    </form>

    </div>
</body>
</html>