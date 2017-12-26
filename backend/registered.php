<?php

  include "database.php";

  $sql = "SELECT name,email,cnum,reg_type as REG FROM registration";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $msg->name=$row["name"];
        $msg->email=$row["email"];
        $msg->cnum=$row["cnum"];
        $msg->reg_type=$row["reg_type"];
    }
    }
  echo json_encode($msg);
  con_close($conn);
?>
