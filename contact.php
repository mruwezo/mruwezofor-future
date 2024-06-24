<?php
session_start();
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Contact submitted successfully!";
        header("Location: contact.php");
        exit();
    } else {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<html>
    <head>
        <title></title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
          body{
            background-color: wheat;
          }
            .menu-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 32px;
            text-align: center;
            
        }
        .menu-bar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }
       
        .menu-bar .icons {
            display: flex;
            align-items: center;
        }
        .menu-bar .icons img {
            margin-right: 30px;
            cursor: pointer;
        }
        .container {
          width: 500px;
        }
        .input-type{
            width: 400px;
            border-radius: 10px;

        }
        label{
            text-align: left;
        }
        textarea{
            width: 450px;
        }
        .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
        </style>
    </head>
    <body>
    <>

<div class="menu-bar">
<a class="navbar-brand" href="#">
<img src="image/bara.jpg" class="rounded-circle" alt="Cinque Terre" width="40px" > 
</a>
    <div>
        <a href="home.php">Home</a>
        <a href="about.php">About Me</a>
        <a href="service.php">Services</a>
        <a href="member.php">Member</a>
        <a href="contact.php">Contact Me</a>
    </div>

    <li class="nav-item dropdown">
    <a href="#"><i class="glyphicon glyphicon-user"></i></a>
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
    
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="profile.php" style="color:black">Pofile</a>
        <a class="dropdown-item" href="edit.php" style="color:black">Edit</a>
        <a class="dropdown-item" href="logout.php" style="color:black">Logout</a>
      </div>
    </li>
</div>


<h2 style="color:black">Contact me</h2>

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



<div class="card-group">
    <div class="card bg-primary">
      <div class="card-body text-left">
        <p class="card-text">
<form method="post" action="contact.php">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" style="width: 450px; height: 40px; border-radius:5px; border: none;" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" style="width: 450px; height: 40px; border-radius:5px; border: none;" required><br><br>

    <label for="subject">Subject:</label><br>
    <input type="text" id="subject" name="subject" style="width: 450px; height: 40px; border-radius:5px; border: none;" required><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="8" style="color:black;"  required></textarea><br><br>

    <input type="submit" value="Send" style="background-color:blue; color:white; width: 450px; height: 40px; border-radius:5px; border: none;">
</form>
        </p>
        
      </div>
    </div>
    <div class="card bg-warning">
      <div class="card-body text-left">
        <p class="card-text">
        <h2><b>On Social Media</b></h2>
<h3>barakamarongori@gmail.com</h3>
<h3>baraka_marongori21</h3>
<h3>baraka marongori(mruwezo)</h3>
<h3>Marongori_Tv</h3>
<h3>+255760453017</h3>
<h3>Dar es salaam</h3>

        </p>
      </div>
    </div>
    
    <div class="card bg-white">
      <div class="card-body text-left">
        <p class="card-text">
        <h2><b>Message</b></h2>
        <?php
        
        $sql = "SELECT name,  message FROM contact";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            
            echo "<b>" .$row["name"]. "</b>" ."<br>";
            echo  $row["message"]  ."<br>";
          }
        } else {
          echo "0 results";
        }
  
    ?>
        </p>
      </div>
    </div>  
 





</div>
<div class="jumbotron text-center" style="margin-bottom:0; background-color: black;">
<a class="navbar-brand" href="#">
<img src="image/bara.jpg" class="rounded-circle" alt="Cinque Terre" width="40px" > 
</a>
<p>Powered by Mr uwezo For Future //@copyright 2024</p>
</div>
</body>
</html>