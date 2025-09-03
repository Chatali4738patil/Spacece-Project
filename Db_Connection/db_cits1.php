<?php
include('constants.php');

// Create connection
$conn = new mysqli('localhost', 'root', 'Csp@1312', 'cits');

// Check connection
if ($conn->connect_error) {
   echo("Failed to connect to Database: " . $conn->connect_error);
}
?>