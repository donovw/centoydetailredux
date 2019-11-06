<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Detail Vehicles</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/menus.js" charset="utf-8"></script>
  </head>
  <body>
  <div class="headerbar">
      <div class="menu" onclick="openMenu('action')"></div>
      <div class="logo"> <a href="index.php"></a> </div>
      <div class="login"> <?php require 'includes/header.login.php'?> </div>
    </div>
      <div class="dropmenu actionmenu" id="action">
      <a href="#">Vehicles</a>
      <a href="#">users</a>
    </div>

    <div class="dropmenu usermenu" id="user">
      <a href="#">Change Password</a>
      <a href="scripts/logout.php">logOut</a>
    </div>

    <div class="loginmenu" id="login">
      <form class="loginform" action="scripts/login.php" method="post">
        <h2>Welcome</h2>
        <h3>Please Log In</h3>
        <input type="text" name="username" required value="" placeholder="Username">
        <input type="password" name="pass" required value="" placeholder="Password">
        <button type="submit" name="button-submit-login" onclick="logMeIn()">Log Me In</button>
      </form>
    </div>
