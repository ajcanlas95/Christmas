<?php
session_start();
$user=$_SESSION["user"];
$oldpw=$_POST["oldpw"];
$newpw=$_POST["newpw"];
include "../backend/database.php";

$sql="UPDATE login SET password='".$newpw."' WHERE username='".$user."'";
if (mysqli_query($conn, $sql)) {
    $password="Update Successful";
} else {
    $password="Error: " . $sql . "<br>" . mysqli_error($conn);
}
con_close($conn);
?>
