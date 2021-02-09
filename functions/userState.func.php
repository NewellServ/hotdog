<?php

/*
This function needs to check to see if a user is logged in
It should return false if the user is a guest and an integer of the userid if the user is logged in.
*/


//function userState() requires no input
function userState(){
    if(session_status() === PHP_SESSION_NONE){
            session_start();
    }

    if (!(isset($_SESSION['userId']))){
        //we are not logged in
        //we need to return false
        return false ;
        exit("Function should have returned false.");
    }else{
        return $_SESSION['userId'] ;
    }
}
