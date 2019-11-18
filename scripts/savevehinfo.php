<?php
  session_start();
  if (!$_SESSION) {
      http_response_code(401);
      echo "you must be logged in to do this";
  } elseif (!$_POST) {
      header('location: ../index.php');
      echo "unviewable page";
  } else {
      //Set sql
      $update = array_pop($_POST);
      if ($update == false) {
          $sql = "INSERT INTO vehicles (vin,stk, year, make, model, color, status, comment, estimate) VALUES (?,?,?,?,?,?,?,?,?)";

          require_once 'dbh.php';
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "statement failed";
              exit();
          } else {
              mysqli_stmt_bind_param(
                  $stmt,
                  "siisssssi",
                  $_POST['vin'],
                  $_POST['stk'],
                  $_POST['year'],
                  $_POST['make'],
                  $_POST['model'],
                  $_POST['color'],
                  $_POST['status'],
                  $_POST['comment'],
                  $_POST['est']
              );
              mysqli_stmt_execute($stmt);
              http_response_code(201);
          }
      } elseif ($update == true) {
          $sql = "UPDATE vehicles SET stk = ?, year = ?, make = ?, model = ?, color = ?, status = ?, comment = ?, estimate = ? WHERE vin = ?";
          require_once 'dbh.php';
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "statement failed";
              exit();
          } else {
              mysqli_stmt_bind_param(
                  $stmt,
                  "iisssssis",
                  $_POST['stk'],
                  $_POST['year'],
                  $_POST['make'],
                  $_POST['model'],
                  $_POST['color'],
                  $_POST['status'],
                  $_POST['comment'],
                  $_POST['estimate'],
                  $_POST['vin']
              );
              mysqli_stmt_execute($stmt);
              http_response_code(202);
          }
      }
  }
