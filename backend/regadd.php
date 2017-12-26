<?php

include "database.php";

$name = test_input($_GET["name"]);
$email= test_input($_GET["email"]);
$cnum= test_input($_GET["cnum"]);
$reg_type= test_input($_GET["reg_type"]);


$sql = "INSERT INTO registration( `name`, `email`, `cnum`, `reg_type`) VALUES ('".$name."','".$email."','".$cnum."','".$reg_type."');";

if (mysqli_query($conn, $sql)) {
    $msg="Registration Successful";
} else {
    $msg="Error: " . $sql . "<br>" . mysqli_error($conn);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo json_encode($msg);

?>
