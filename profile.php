<?php
    session_start();
?>
<!DOCTYPE html>

    <head>
        <title></title>

    </head>
<body>
    <h2>Profile</h2>

 
        
        
  <b>First Name</b>  <input type="text" name="fname" id="fname" value="<?php echo  $row["fname"];?>" ><br>
   <b>Second name</b>        <input type="text" name="sname" id="sname" value="<?php echo $_SESSION['sname'];?>"><br>
  <b> Last name  </b>      <input type="text" name="lname" id="lname" value="<?php echo $_SESSION['lname'];?>"><br>
  <b> Email </b>       <input type="text" name="email" id="email" value="<?php echo $_SESSION['email'];?>"><br>
 <b>  Phone number  </b>      <input type="text" name="mobile" id="mobile" value="<?php echo $_SESSION['Mobile'];?>"><br>
  <b> Gender </b>       <input type="text" name="gender" id="gender" value="<?php echo $_SESSION['gender'];?>"><br>
 <b>  Date of birth </b>       <input type="text" name="dfb" id="dfb" value="<?php echo $_SESSION['dfb'];?>"><br>
<b>   Region </b>       <input type="text" name="city" id="city" value="<?php echo $_SESSION['city'];?>"><br>
 <b>  Street </b>       <input type="text" name="street" id="street" value="<?php echo $_SESSION['street'];?>">
      
  

</body>
</html>