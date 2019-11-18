<?php
session_start();
$username = "";
$email = "";
$errors = array();
// connect to the database

$db = mysqli_connect('localhost','root', '', 'registration');

// if the signup button is clicked

if (isset($_POST['register'])) {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


// to ensure that the fileds are filled properly

if (empty($username)){
    array_push($errors, "Username is required");
}

if (empty($email)){
    array_push($errors, "email is required");
}

if (empty($password_1)){
    array_push($errors, "password is required");
}

if ($password_1 != $password_2){
    array_push($errors, "The two passwords do not match");
}

// if there are no errors, save user to database
if (count($errors)==0){
    //Encrypt password before storing inside the database (Security reasons)
    $password = md5($password_1);
    $sql = "INSERT INTO users2 (username, email, pass) VALUES ('$username', '$email', '$password')";
    mysqli_query($db, $sql);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');  // redirect to home page

}

}

// log user in from login system

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);


// to ensure that the fileds are filled properly

if (empty($username)){
    array_push($errors, "Username is required");
}

if (empty($password)){
    array_push($errors, "password is required");
}
 
if(count($errors)==0){
    $password = md5($password); // encrypt password before comparing with that from database.
    $query = "SELECT * FROM users2 WHERE username='$username' AND pass='$password'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)==1){
        // log user in

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');  // redirect to home page
    }else{
        array_push($errors, "Wrong username/password combination");
       
    }

}

}

// logout 

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}



?>