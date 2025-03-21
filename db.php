<?php
// Database credentials
$servername = "mysqldb"; //"10.96.234.251";
$username = "root"; // Use your MySQL username
$password = "1234"; // Use your MySQL password
$dbname = "userinfo"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if ($conn->query($sql) === TRUE) {

// Select the database
$conn->select_db($dbname);

} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// SQL to create table
$tableSql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    class VARCHAR(255) NOT NULL,
    address TEXT NOT NULL
)";

// Execute the query to create the table
if ($conn->query($tableSql)) {
} 

// Close connection

?>
