//check if user login . put at every page that need login

<?php
session_start();

//if not login redirect to login page
if(!isset($_SESSION['username'])) {
  header("Location: /login.php");
  exit();
}
