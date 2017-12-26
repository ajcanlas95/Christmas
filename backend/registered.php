<?php

  include "database.php";

  $sql = "SELECT id_reg,name,email,cnum,reg_type FROM registration";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $msg[$row["id_reg"]]->name=$row["name"];
        $msg[$row["id_reg"]]->email=$row["email"];
        $msg[$row["id_reg"]]->cnum=$row["cnum"];
        $msg[$row["id_reg"]]->reg_type=$row["reg_type"];
        $value[$row["id_reg"]]->value=$msg[$row["id_reg"]];
  }
  }
  echo json_encode($value);
  con_close($conn);
?>
