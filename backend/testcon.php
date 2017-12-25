<?php

include "database.php";

// Check connection
if ($conn->connect_error) {
    $msg = "Connection failed: " . $conn->connect_error;
}
$msg = "Connected successfully";

echo json_encode($msg);

 ?>
