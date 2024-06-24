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
          boby{
            background-color: ;
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
        .input{
            width: 400px;
            box-shadow: none;
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
footer{
  
}
        </style>
    </head>
    <body>
    

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
        <a class="dropdown-item" href="#" style="color:black">Pofile</a>
        <a class="dropdown-item" href="#" style="color:black">Edit</a>
        <a class="dropdown-item" href="#" style="color:black">Logout</a>
      </div>
    </li>
</div>
<h2>My Service</h2>
<div class="card-group">
    <div class="card bg-primary">
      <div class="card-body text-left">
        <p class="card-text">
        <h2>1. Web Design and Development<br></h2> 
Baraka creates visually stunning, responsive websites and robust web
 applications using the latest technologies and frameworks. His designs
  are user-friendly and tailored to enhance the online presence and functionality of businesses.
<br>
<img src="image/q.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
        </p>
        
      </div>
    </div>
    <div class="card bg-warning">
      <div class="card-body text-left">
        <p class="card-text">
       <h2>2. Graphics and Logo Design</h2> <br>
With a keen eye for detail and creativity, Baraka produces high-quality 
graphic designs and unique logos. His work effectively communicates brand 
messages and ensures businesses stand out in the competitive market.
<br>
<img src="image/bb.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
        </p>
      </div>
    </div>
    
    <div class="card bg-danger">
      <div class="card-body text-left">
        <p class="card-text">
       <h2>3. Computer Maintenance and Repair<br></h2> 
Baraka offers reliable computer maintenance and repair services,
 ensuring optimal performance and longevity of IT assets. His services 
 include hardware diagnostics, software troubleshooting, and regular maintenance.
<br>
<img src="image/cc.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
        </p>
      </div>
    </div>  
  </div>
</div>
<br>
<div class="card-group">
    <div class="card bg-primary">
      <div class="card-body text-center">
        <p class="card-text">
        <img src="image/cc.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
        </p>
        
      </div>
    </div>
    <div class="card bg-warning">
      <div class="card-body text-center">
        <p class="card-text">
       
<button onclick="myFunction()">Try it</button>
<script>
function myFunction() {
  alert("I am an alert box!");
}
</script>

        </p>
        <img src="image/cc.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
      </div>
    </div>
    
    <div class="card bg-danger">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the fourth card</p>
      </div>
      <img src="image/cc.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
    </div>  
  </div>
</div>

<footer>
<div class="card bg-dark text-white">
    <div class="card-body">Dark card</div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0; background-color: black;">
<a class="navbar-brand" href="#">
<img src="image/bara.jpg" class="rounded-circle" alt="Cinque Terre" width="60px; padding: bottom" > 
</a>
<p>Powered by Mr uwezo For Future //@copyright 2024</p>
</div>

</body>
</html>