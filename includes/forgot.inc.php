<?php

//lets validate the email and check if it's in the database;

$email = $_POST['email'];

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
    //They did not type a correct email address in
    header('location: ../forgot.php?error=Your email address was invalid.');
    die("$email is an invalid email address.");
}
