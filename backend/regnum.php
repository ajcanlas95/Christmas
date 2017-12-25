<?php

  include "database.php";

  $sql = "SELECT Count(*) FROM registration";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $msg=$row["Count (*)"];
    }
    } else {
      $msg="0"
    }
  echo json_encode($msg);

?>
