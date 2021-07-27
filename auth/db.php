<?php
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }

$servername = "localhost";
$database   = "company_request";
$username   = "root";
$password   = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// mysqli_close($conn);
?>