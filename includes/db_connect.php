<?php
$host = "localhost";
$username = "Dimphy";
$password= "test";
$database = "todo";
//connect to database
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
