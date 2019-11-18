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
    <title>Dashboard</title>
    <link href="https://www.codeprof.net/login_style.css" rel="stylesheet">
</head>
<body>
<div class="left-door"></div>
    <div class="right-door"></div>
    
    
    <div class="header">

    <div class="img-box">
       <img src="icon.png" alt="codeprof computer academy" >
   </div>
            <?php if(isset($_SESSION['username'])):  ?>

        <p style="text-align:right; margin-bottom:10px;">Welcome <strong><?php echo($_SESSION['username']);  ?></strong></p>
        <p><a href="index.php?logout='1'" style="float:right; font-style:normal; font-family:sans-serif; background-color:red; color:white; padding:10px; border-radius:4px;">Logout</a> <a href="dashboard.php" style="float:right; font-style:normal; font-family:sans-serif; background-color:green; color:white; padding:10px; border-radius:4px;"> My Dashboard</a></p>

        <?php endif ?>
    </div>

<div class="sidebar">
   <ul>
  
       <li><a href="#"><span style=" padding-right:10px;"><img src="icon.png" width="20" height="20"></span>MY PROFILE</a></li>
       <li><a href="#"><span style=" padding-right:10px;"><img src="courses.png" width="20" height="20"></span>COURSES</a></li>
       <li><a href="#"><span style=" padding-right:10px;"><img src="download.png" width="20" height="20"></span>DOWNLOAD </a></li>
       <li><a href="#"><span style=" padding-right:10px;"><img src="setting.png" width="20" height="20"></span>SETTINGS</a></li>
       <li><a href="#"><span style=" padding-right:10px;"><img src="message.png" width="20" height="20"></span>MESSAGE US</a></li>
       <li><a href="#"><span style=" padding-right:10px;"><img src="logout.png" width="20" height="20"></span>LOGOUT</a></li>

   </ul>

  
</div>

<div class="menu_box">
<div class="wrapper">
<div class="menu">
    <h4><span style=" padding-right:10px;"><img src="icon.png" width="20" height="20"></span>PROFILE</h4>
</div>

<div class="menu">
    <h4><span style=" padding-right:10px;"><img src="courses.png" width="20" height="20"></span>COURSES</h4>
</div>

<div class="menu">
    <h4><span style=" padding-right:10px;"><img src="download.png" width="20" height="20"></span>DOWNLOAD</h4>
</div>

<div class="menu">
    <h4><span style=" padding-right:10px;"><img src="setting.png" width="20" height="20"></span>SETTINGS</h4>
</div>

<div class="menu">
    <h4><span style=" padding-right:10px;"><img src="message.png" width="20" height="20"></span>MESSAGE US</h4>
</div>

<div class="menu">
    <h4><span style=" padding-right:10px;"><img src="logout.png" width="20" height="20"></span>LOGOUT</h4>
</div>

</div>
</div>
   
    


  

    
    
   

    
</body>
</html>