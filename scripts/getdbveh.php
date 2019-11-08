<?php
  $by = $_GET['by'];
  $sparam =  $_GET['sparam'];


  $sql = "SELECT * FROM vehicles WHERE " . $by . " = ?" ;
  include_once 'dbh.php';
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("location: ../index.php?error=sqlerror");
    exit();
  }else {
   mysqli_stmt_bind_param($stmt,"s",$sparam);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
  }
