<?php
include('constants.php');

// Create connection
$mysqli = new mysqli('localhost', 'root', 'Csp@1312', 'learnonapp');

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}