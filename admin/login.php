<?php
$user=$_POST["user"];
$pw=$_POST["pw"];

include "../backend/database.php";

$sql = "SELECT Count(*) as LOGIN FROM login where username='".$user."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $condition=$row["LOGIN"];
  }
}

if ($condition>0){
  $sql = "SELECT Count(*) as LOGIN FROM login where username='".$user."' and password='".$pw."'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $condition2=$row["LOGIN"];
    }
  }
  if ($condition2>0){
    con_close($conn);
    session_start();
    $_SESSION["login"] = "yes";
    $_SESSION["user"] = $user;
    $_SESSION["password"]= $pw;
    header("Location: ./admin.php");
  } else {
    con_close($conn);
    header("Location: ./index.php?msglevel=PASSWORD");
  }
} else {
  con_close($conn);
  header("Location: ./index.php?msglevel=ERROR");
}



?>
