<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "feedback";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
 ("Connection failed: " . mysqli_connect_error());
}
?>