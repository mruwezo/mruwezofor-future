<?php
session_start();
require 'db.php';




// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $dfb = $_POST['dfb'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $region = $_POST['region'];
    $pass = $_POST['password'];
    $nida = $_POST['nida'];
   
    // Validate input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format";
        header("Location: signup.php");
        exit();
    }

    // Check if username or email already exists
    $sql = "SELECT * FROM member WHERE uname = '$uname' OR email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Username or email already exists";
        header("Location: signup.php");
        exit();
    }

    // Insert user data into database
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users ( fname, sname, lname, email, mobile, dfb, gender, country, region, password, nida)
    VALUES ( '$name', '$uname', '$email', '$mobile', '$dfb', '$gender', '$country', '$region', '$hash', '$nida',)";


    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Signup successful! You can now login.";
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
        header("Location: signup.php");
        exit();
    }
}

?>

<html>
    <head>
        <title>SingUp</title>
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
             text-align: center;
            
             padding-top: 30px;
            }
            .form-group{
  
            
            width: 400px;
            height: 40px;
            border-radius: 90px;
            border: none;
            border-color: blue;

            }
            select{
            width: 400px;
            height: 40px;
            border-radius: 5px;
            border: none;
            
            
            }
            h1{
            text-align: left;
            }
            .container{
                border-radius: 20px;
            }
            .submit:hover{
                background-color: black;
            }

        </style>

    </head>
    <body>
        <center>
    <div class="container p-3 my-3 bg-dark text-white" style="background-color:pink; width:30%; height:120%">
    <h1>SingUp</h1><br>
    <?php
// Display success or error message
if (isset($_SESSION['success'])) {
    echo "<p style='color: green;'>" . $_SESSION['success'] . "</p>";
    unset($_SESSION['success']);
}

if (isset($_SESSION['error'])) {
    echo "<p style='color: red;'>" . $_SESSION['error'] . "</p>";
    unset($_SESSION['error']);
}
?>
<form method="post" action="Signup.php">
    
<div class="form-group">
    <input type="text" name="fname" class="form-control" id="fname" value="" placeholder="Firstname" required>
</div>
<br>
<div class="form-group">
    <input type="text" name="sname" class="form-control" id="sname" value="" placeholder="Secondname" required>
</div>
<br>
<div class="form-group">
    <input type="text" name="lname" class="form-control" id="lname" value="" placeholder="Lastname" required>
</div>
<br>
<div class="form-group">
    <input type="email" name="email" class="form-control" id="email" value="" placeholder="Email" required>
</div>
<br>
<div class="form-group">
    <input type="number" name="mobile" class="form-control" id="mobile" value="" placeholder="Phone number" required>
</div>
<br>
<div class="form-group">
    <input type="date" name="dfb" class="form-control" id="dfb" value="" placeholder="Date of birth" required>
</div>
<br>
<div class="form-group">
    <input type="text" name="gender" class="form-control" id="gender" value="" placeholder="Gender" required>
</div>
<br>
<div class="form-group">
    <select name="country" id="counrty" value="choose country" placeholder="Choose country" required>
        <option value="Dar es Salaam">Dar es Salaam</option>
        <option value="Arusha">Arusha</option>
        <option value="Dodoma">Dodoma</option>
        <option value="Mwanza">Mwanza</option>
        <option value="Zanzibar">Zanzibar</option>
        <option value="Mbeya">Mbeya</option>
        <option value="Morogoro">Morogoro</option>
        <option value="Tanga">Tanga</option>
        <option value="Kilimanjaro">Kilimanjaro</option>
        <option value="Ruvuma">Ruvuma</option>
    </select>
</div>
<br>
<div class="form-group">
    <select name="region" id="region" value="choose region" placeholder="Choose region" required>
        <option value="Dar es Salaam">Dar es Salaam</option>
        <option value="Arusha">Arusha</option>
        <option value="Dodoma">Dodoma</option>
        <option value="Mwanza">Mwanza</option>
        <option value="Zanzibar">Zanzibar</option>
        <option value="Mbeya">Mbeya</option>
        <option value="Morogoro">Morogoro</option>
        <option value="Tanga">Tanga</option>
        <option value="Kilimanjaro">Kilimanjaro</option>
        <option value="Ruvuma">Ruvuma</option>
    </select>
</div>
<br>
<div class="form-group">
    <input type="password" name="password" class="form-control" id="password" value="" placeholder="Password" required>
</div>
<br>
<div class="form-group">
    <input type="password" name="confpassword" class="form-control" id="confpassword" value="" placeholder="Confirm passsword" required>
</div>
<br>
<div class="form-group">
    <input type="number" name="nida" class="form-control" id="nida" value="" placeholder="NIDA number" required>
</div>
<br>

<div class="form-group">
<input type="submit" class="form-control" style="background-color:blue; color:white; hover:blue"  value="REGISTER" />
</div>
<br>

<div class="form-group">
Already have an account?
<a href="login.php">Login</a>
</div>
</form>
</center>
    </div>
    </body>
</html>