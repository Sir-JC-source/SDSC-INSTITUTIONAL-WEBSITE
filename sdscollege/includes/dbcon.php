<?php
$host = "localhost";
$user = "root";       // default XAMPP username
$pass = "";           // default XAMPP password is empty
$db   = "sdscollege";    // change this to your actual database name

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
