<?php

// Database credentials
$servername = "localhost"; // Change this to your MySQL server address
$username = "doliuser";
$password = "$#Iraji12120";
$dbname = "thinkerdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close connection
$conn->close();

?>
