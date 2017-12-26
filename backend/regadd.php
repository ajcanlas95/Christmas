<?php

include "database.php";

$name = test_input($_GET["name"]);
$email= test_input($_GET["email"]);
$cnum= test_input($_GET["cnum"]);
$reg_type= test_input($_GET["reg_type"]);


$validate = "Select email,cnum from registration where email='".$email."' or cnum=".$cnum;
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    $valcount=$row["REG"];
}
}

if ($valcount>0){
  $sql = "INSERT INTO registration( `name`, `email`, `cnum`, `reg_type`) VALUES ('".$name."','".$email."','".$cnum."','".$reg_type."');";

  if (mysqli_query($conn, $sql)) {
      $regadd="Registration Successful";
  } else {
      $regadd="Error: " . $sql . "<br>" . mysqli_error($conn);
  }
} else {
  $regadd=$email." or ".$cnum." has a duplicate";
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


con_close($conn);
?>
