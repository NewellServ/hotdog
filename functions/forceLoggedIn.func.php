<?php

//This function check to see if the user is currently logged in,
//if not it simply redirects to the logout.ing.php page.

function forceLoggedIn(){
    if(session_status() === PHP_SESSION_NONE){
            session_start();
    }

    if (!(isset($_SESSION['userId'])) || $_SESSION['userId'] == null){
        //they are not logged in, redirect them to to logoutpage to restart this whole thing.
        header('location: ../includes/logout.inc.php');
        exit('User attempted to access a page where being logged in is required');
    }
}
