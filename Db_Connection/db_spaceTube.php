<?php

include('constants.php');

// Create connection
$conn = new mysqli('localhost', 'root', 'Csp@1312', 'spaceTube');

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to Database: " . $conn->connect_error;
  //  exit();
}