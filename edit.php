

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
</head>
<body>
    <h2>Edit Profile</h2>
    <form action="" method="post">
        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" required>
        </div>
        <div>
            <label for="fname">Firstname:</label>
            <input type="text" id="fname" name="fname" value="<?php echo $user['fname']; ?>" required>
        </div>
        <div>
            <label for="sname">Secondname:</label>
            <input type="text" id="sname" name="sname" value="<?php echo $user['sname']; ?>" required>
        </div>
        <div>
            <label for="lname">Lastname:</label>
            <input type="text" id="lname" name="lname" value="<?php echo $user['lname']; ?>" required>
        </div>
        <div>
            <label for="dfb">Email:</label>
            <input type="date" id="dfb" name="dfb" value="<?php echo $user['dfb']; ?>" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>
        </div>
        <div>
            <label for="mobile">Mobile:</label>
            <input type="number" id="mobile" name="mobile" value="<?php echo $user['mobile']; ?>" required>
        </div>
        <div>
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" value="<?php echo $user['country']; ?>" required>
        </div>
        <div>
            <label for="region">Region:</label>
            <input type="text" id="region" name="region" value="<?php echo $user['region']; ?>" required>
        </div>
        
        <div>
            <button type="submit">Update Profile</button>
        </div>
    </form>
</body>
</html>