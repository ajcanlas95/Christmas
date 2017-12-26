<?php

include "database.php";

$sql="Truncate Table registration";

if (mysqli_query($conn, $sql)) {
    $msg="Truncate Successful";
} else {
    $msg="Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo json_encode($msg);
con_close($conn);

?>
