<?php

  include "database.php";

  $sql = "SELECT id_reg,name,email,cnum,reg_type FROM registration";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $msg->name=$row["name"];
        echo $row["name"];
        $msg->email=$row["email"];
        echo $row["email"];
        $msg->cnum=$row["cnum"];
        echo $row["cnum"];
        $msg->reg_type=$row["reg_type"];
        echo $row["reg_type"];
        $value[$row["id_reg"]]->value=$msg;
  }
  }
  echo json_encode($value);
  con_close($conn);
?>
