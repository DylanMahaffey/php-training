<?php
$loggedIn = 'logged in';
$_SESSION['loggedin'] = $loggedIn;

ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = 'localhost';
$username = 'root';
$password = 'secret';

//  Create connection;
$conn = new mysqli($servername, $username, $password);

// Check connection
if($conn->connect_error)
{
    die('No workey :\'( ' . $conn->connect_error);
}
else
{
    $success = 'It worked!';
}