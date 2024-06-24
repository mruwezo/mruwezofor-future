<?php
// Start session
session_start();
require 'db.php';

// Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    $pass = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM member WHERE uname = '$uname' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User exists, set session and redirect to home page
        $_SESSION['uname'] = $uname;
        header("Location: home.php");
        exit();
    } else {
        // User does not exist, redirect to login page with error message
        $_SESSION['error'] = "Invalid username or password";
        header("Location: login.php");
        exit();
    }
}
?>
<html>
    <head>
        <title>login</title>
       
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            padding-top: 60px;
        }


 
            .form-group{
            width: 400px;
            height: 40px;
            border-radius: 60px;
            border: none;
            border-color: red;
            }
            h1{
                text-align: left;
            }
            .container{
                border-radius: 20px;
            }
            .submit-hover{
                background-color:black ;
            }
    </style>
</head>
    <body>
        <center>
    <div class="container p-3 my-3 bg-dark text-white" style="background-color:pink; width:30%; height:50%">
    <h1>Login</h1><br>
<form method="post" action="login.php">
   
<div class="form-group">
    <input type="text" name="uname" class="form-control" id="uname" value="" placeholder="User name" required>
</div>
<br>
<div class="form-group">
    <input type="password" name="password" class="form-control" id="password" value="" placeholder="Password" required>
</div>

<br>

<div class="form-group">
    <input type="submit" class="form-control" style="background-color:blue; color:white; hover:blue" value="Login" />
    </div>
    <br>
    <div class="3u 12u$(xsmall)">
<a href="login.php">Forget password</a>
</div>
<br>
    <div class="3u 12u$(xsmall)">
    Don't have an account?
<a href="signup.php">Signup</a>

</div>
</form>

    </div>
        </center>
    </body>
</html>