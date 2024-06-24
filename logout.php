<?php
// Start the session
session_start();

// Check if the user is logged in
if(!isset($_SESSION['username'])){
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit();
}