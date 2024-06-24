


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
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
sub {
		font-size: 0.8em;
		position: relative;
		top: 0.5em;
	}

	sup {
		font-size: 0.8em;
		position: relative;
		top: -0.5em;
	}
  /* Icon */

	.icon {
		text-decoration: none;
		border-bottom: none;
		position: relative;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.icon > .label {
			display: none;
		}

		.icon.rounded {
			border-radius: 100%;
			border: 1px solid #4dac71;
			display: inline-block;
			height: 2em;
			line-height: 2em;
			text-align: center;
			width: 2em;
		}

			.icon.rounded.big {
				font-size: 3.5em;
			}
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
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
        <a class="dropdown-item" href="profile.php" style="color:black">Pofile</a>
        <a class="dropdown-item" href="edit.php" style="color:black">Edit</a>
        <a class="dropdown-item" href="logout.php" style="color:black">Logout</a>
      </div>
    </li>
</div>


<div class="container">
  <h2>Members</h2>
  <p>The member who join me</p>
  <table class="table">
    <thead class="thead-dark">
      
            <tr>
            <th>ID</th>
            <th>Firstname</th>
        <th>Secondname</th>
        <th>Lastname</th>
        <th>Date of birth</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>Country</th>
        <th>Region</th>
        <th>Picture</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $sql = "SELECT id, fname, sname, lname, dfb, mobile, country, region, picture FROM users";
             $result = $conn->query($sql);
             if ($result->num_rows > 0) {
               // output data of each row
               while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['fname'] . "</td>";
                    echo "<td>" . $row['sname'] . "</td>";
                    echo "<td>" . $row['lname'] . "</td>";
                    echo "<td>" . $row['dfb'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['mobile'] . "</td>";
                    echo "<td>" . $row['country'] . "</td>";
                    echo "<td>" . $row['region'] . "</td>";
                    echo "<td>" . $row['picture'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No members found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>
      <div class="jumbotron text-center" style="margin-bottom:0; background-color:  dark;">
      <a class="navbar-brand" href="#">
<img src="image/bara.jpg" class="rounded-circle" alt="Cinque Terre" width="60px" > 
</a>
<p>Powered by Mr uwezo For Future //@copyright 2024</p>
<div>
				<i class="fa fa-phone"></i>
				<p style="font-size:20px"><b>+255713397067<span>+255626305034</span></p>
			</div>
</div>
    </body>
    </html>