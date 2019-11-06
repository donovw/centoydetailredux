<?php
  if (!isset($_POST['button-submit-login'])){
    header('location: ../index.php');
   exit();
} else {
    $uname = $_POST['username'];
    $upwd = $_POST['pass'];
    if (empty($uname) || empty($upwd)) {
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit();
}   else {
      require_once 'dbh.php';
      $sql = "SELECT * FROM users WHERE uname = ?";
      $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
          echo "workin";
          header('Location: ' . $_SERVER['HTTP_REFERER']);
          exit();
        }else{
          mysqli_stmt_bind_param($stmt,"s",$uname);
          mysqli_stmt_execute($stmt);
        $result =  mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) !== 1){
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        };
        if ($row = mysqli_fetch_assoc($result)){
          $hashpwd =  $row['password'];
            if (password_verify($upwd,$hashpwd) === true){
              session_start();
              $_SESSION = $row;
              echo "working";
              header('Location: ' . $_SERVER['HTTP_REFERER']);
              exit();
            }else {
              echo "wrong password";
              header('Location: ' . $_SERVER['HTTP_REFERER']);
             exit();
            }
    }

  }
}
}
