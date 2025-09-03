<?php
include('constants.php');

// Create connection
$mysqli1 = new mysqli('localhost', 'root', 'Csp@1312', 'spacece_active');

// Check connection
if ($mysqli1->connect_errno) {
    echo "Failed to connect to Database: " . $mysqli->connect_error;
    exit();
}