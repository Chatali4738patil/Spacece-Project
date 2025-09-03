<?php
include('constants.php');

// Create connection
$conn = new mysqli('localhost', 'root', 'Csp@1312', 'libforsmall');

// Check connection
if ($conn->connect_error) {
    die("Failed to connect to Database: " . $conn->connect_error);
}