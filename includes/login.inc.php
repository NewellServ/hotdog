<?php
if(session_status() === PHP_SESSION_NONE){
        session_start();
}

if ($_POST['email'] == null || $_POST['password'] == null){
  //user didn't fill out the fields
  header('location: ../login.php?error=You didn\'t actually fill anything out.');
  exit('User didn\'t fill out form.');
}
