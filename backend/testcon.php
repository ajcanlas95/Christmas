<?php

include "database.php";

// Check connection
if ($conn->connect_error) {
    $msg = "Connection failed: " . $conn->connect_error;
}
$msg = "Connected successfully";

echo $msg;
con_close($conn);
?>
