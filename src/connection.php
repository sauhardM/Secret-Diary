<?php

$link = mysqli_connect("mysql-server", "root", "secret", "secretDiary");

  if (mysqli_connect_error()) {

    die("Database Connection Error");
  }

?>  