<?php
$useradmin=$_POST["useradmin"];
$pwadmin=$_POST["pwadmin"];
$role=$_POST["role"];

include "../backend/database.php";

switch($role){
  case "admin":
    $rolenum=1;
    break;
  case "viewer";
    $rolenum=2;
    break;
  default:
    $rolenum=3;
}

$sql = "INSERT INTO login( `username`, `password`, `role_type`) VALUES ('".$useradmin."','".$pwadmin."','".$rolenum."');";

if (mysqli_query($conn, $sql)) {
    $register="Registration Successful";
} else {
    $register="Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location: ./admin.php?msg=".$register);
con_close($conn);
?>
