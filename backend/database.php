<?php
$servername = "localhost";
$username = "aylc";
$password = "Isaiah 43:2";
$dbname = "aylcdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

function con_close($con){
    mysqli_close($con);
}
?>
