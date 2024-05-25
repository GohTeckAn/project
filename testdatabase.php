<!DOCTYPE html>
<html>
<head>
    <title>PHP Database Connection Test</title>
</head>
<body>
    <h1>PHP Database Connection Test</h1>
</body>
</html>

<?php
// PHP code to connect to the database
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "hr_main"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection
$conn->close();
?>