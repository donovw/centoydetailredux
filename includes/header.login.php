<?php
  if (!isset($_SESSION['id'])) {
    echo "<div onclick=\"openMenu('login')\">Login</div>";
  }else {
    echo "<div onclick=\"openMenu('user')\">Welcome</div>";
  }

 ?>
