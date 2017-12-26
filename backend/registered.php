<?php

  include "database.php";

  $sql = "SELECT id_reg,name,email,cnum,reg_type FROM registration";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $registered[$row["id_reg"]]->name=$row["name"];
        $registered[$row["id_reg"]]->email=$row["email"];
        $registered[$row["id_reg"]]->cnum=$row["cnum"];
        $registered[$row["id_reg"]]->reg_type=$row["reg_type"];
  }
  }

  con_close($conn);
?>
