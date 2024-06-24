<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $lname = $_POST['lname'];
    $dfb = $_POST['dfb'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pic = $_POST['picture'];
    $country = $_POST['country'];
    $region = $_POST['region'];
    // Update user details
    $sql = "UPDATE users SET username = ?, fname = ?, sname = ?, lname = ?, dfb = ?, email = ?, mobile = ?, picture = ?, country = ?, region = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $username, $fname, $sname, $lname, $dfb, $email, $mobile, $pic, $country, $region, $user_id);

    if ($stmt->execute()) {
        echo "Profile updated successfully.";
    } else {
        echo "Error updating profile: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>