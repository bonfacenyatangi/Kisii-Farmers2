<?php
session_start();

if (!isset($_SESSION['login'])) {
  $_SESSION['error'] = "Please Login";
  header("Location: ../login.php");
  
}
?>