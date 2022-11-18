<?php
  session_start();
  if ($_SESSION["akses"] != "user") {
    header("Location: login.php");
    return;
  }
  $_SESSION["produk"] = $_GET["id"];
  header("Location: beliGames.php");
?>