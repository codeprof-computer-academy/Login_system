<?php include('server.php'); 

// if user is not logged in, then they cannot access this pagen!
if(empty($_SESSION['username'])){
    header("location: login.php"); 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link href="https://www.codeprof.net/login_style.css" rel="stylesheet">
</head>
<body>
<div class="left-door"></div>
    <div class="right-door"></div>
    
    <div class="container" style="margin:70px auto !important;">
   
    <form>
   
    <img src="icon.png" alt="Login icon">

<div class="content">
    <?php if(isset($_SESSION['success'])): ?>

         <div class="error success">
             <h3>
                 <?php

                 echo $_SESSION['success'];
                 unset($_SESSION['success']);
                 
                 ?>
             </h3>
         </div>

    <?php endif ?>

    <?php if(isset($_SESSION['username'])):  ?>

        <p style="text-align:left; margin-bottom:10px;">Welcome <strong><?php echo($_SESSION['username']);  ?></strong></p>
        <p><a href="index.php?logout='1'" style="float:left; font-style:normal; background-color:red; color:white; padding:10px; border-radius:4px;">Logout</a> <a href="dashboard.php" style="float:right; font-style:normal; background-color:green; color:white; padding:10px; border-radius:4px;"> My Dashboard</a></p>

    <?php endif ?>
</div>

  

    
    
    </form>

    </div>
</body>
</html>