<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: logout.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: homepage.php");
                            
                        }
                    }

                }

    }
}    


}


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="hover.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
  background-color: #232120;
  background-image: url("nice.jpg");
  background-size: 85%;
}
form {border: 2px solid #f1f1f1;
  padding:5px 5px;
  margin:10px ;
  height:570px;
  width: 500px;
}

input[type=text], input[type=password] {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 20px;
  display: inline-block;
  border: 0px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #3D3634;
  color: white;
  padding: 20px 20px;
  margin: 15px 80px;
  border: none;
  cursor: pointer;
  width: 40%;
  float: left;
}

button:hover {
  opacity: 0.8;
  
}


.imgcontainer {
  text-align: center;
  height: 100px;
  width: auto;  
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 18px 30px;
  align-content: center;
}

span.psw {
  float: right;
  padding-top: 70px;
  color: rgb(250, 250, 250);
}
h1{
  background-color: darkgrey;
  background-image: linear-gradient(45deg, #ff0000,#ff7300, #00ffd5, #48ff00, #ff00c8, yellow, orange);
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  color: transparent;
      
}
label{
  color: #f1f1f1;
}
</style>
</head>
<body>
<div class="container">
<form action="" method="post">
  <div class="imgcontainer">
    <table><tr><h1>CODOSHALA</h1></tr></table>
    
  </div>
<br>
  <div class="container">
    <label for="username" style="margin-left:30px;" ><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
<br>
    <label for="password" style="margin-left:30px;"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" class="glow-on-hover">Login</button>
    <br>
    <button type="button" class="glow-on-hover" onclick="window.location.href = 'register.php';">CreateAccount</button>
  </div>

  <div class="container"  style="opacity:1">
    <label>
      <input type="checkbox" name="remember" style="padding: 10px 10px;
  margin: 72px 10px;"> Remember me
    </label>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>
</body>
</html>
