<?php

include "database.php";

// Check connection
if ($conn->connect_error) {
    $testcon = "Connection failed: " . $conn->connect_error;
}
$testcon = "Connected successfully";


con_close($conn);
?>
