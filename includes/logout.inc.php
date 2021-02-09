<?php
if(session_status() === PHP_SESSION_NONE){
        session_start();
}

$_SESSION['userId'] = null ;
unset($_SESSION['userId']);

session_destroy();

header('location: ../login.php');
exit('You should have been forwarded to the index.');
