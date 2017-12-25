<?php

  include "database.php";

  $sql = "SELECT Count(*) FROM registration";
  $result = $conn->query($sql);
  echo $result

?>
