<?php

//lets validate the email and check if it's in the database;

$email = $_POST['email'];

if ($email == null){
    //justredirect to forgot password with an error
    header('location: ../forgot.php?error=You need to fill out the form.');
    die('User should have filled out the form.');
}

$email = filter_var($email, FILTER_SANITIZE_EMAIL);


// Validate e-mail
if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
    //They did not type a correct email address in
    header('location: ../forgot.php?error=Your email address was invalid.');
    die("$email is an invalid email address.");
}

//$email is cool - lets search for it in the database.

require_once('database.inc.php');

$stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();                    //requires mysqlnd

$message = "Great!  We may or may not have done something.";                //edit this variable to edit the success message

if($result->num_rows !== 1){
    //bad email justdo nothing
    //header('location: ../forgot.php?success=' . $message); //edit the variable always - it's an effort to ensure the message is always the same.
    //exit('We didn\'t find the email - but we don\'t want an attacker to know so it\'s the same message as if we did.');
}else{
    //we found the email
    //we need to send an email with a password reset link to them now.
}

header('location: ../forgot.php?success=' . $message); //edit the variable always - it's an effort to ensure the message is always the same.
