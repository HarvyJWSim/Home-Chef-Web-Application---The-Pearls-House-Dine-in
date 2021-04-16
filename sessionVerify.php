<?php
  session_start();
  if(!isset($_SESSION["is_login_verified"]) || !isset($_SESSION["user_ID"]) || !isset($_SESSION["user_email"]))
    header("Location: index.html");
?>
