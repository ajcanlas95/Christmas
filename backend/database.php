<?php
$servername = "localhost";
$username = "aylc";
$password = "Isaiah 43:2";
$dbname = "aylcdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

mysqli_close($conn);
?>
