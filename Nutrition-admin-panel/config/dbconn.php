<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$dbname = "nutrition_db";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
