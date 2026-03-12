<?php
/* ================================
   SDSC Website – Database Config
   ================================ */

$host = "localhost";     // XAMPP default
$user = "root";          // XAMPP default
$pass = "";              // XAMPP default (empty)
$db   = "sdscollege";    // <-- CHANGE THIS to your actual database name

// Create database connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// Set UTF-8 encoding
mysqli_set_charset($conn, "utf8");

?>
