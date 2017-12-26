<?php

  include "database.php";

  $sql = "SELECT Count(*) as REG FROM registration";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $regnum=$row["REG"];
    }
    } else {
      $regnum="0";
    }

  con_close($conn);
?>
