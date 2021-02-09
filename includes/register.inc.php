<?php
//make sure we have a session

if(session_status() === PHP_SESSION_NONE){
        session_start();
}

//check to see if a user is logged in already and ended up on this page any ways

if (isset($_SESSION['userid'])){
    //We are already logged in.
    header('location: ../index.php?error=You seem to already be logged in.');
    die('We were already logged in.');
}


//check to see if we are attempting to register fromt the registration form

if (!(isset($_POST['register']))){
    //we didn't get here with the correct form.
    header('location: ../register.php?error=No form information sent.');
    die('We got here without form infomation!');
}

//check to see if we are attempting to register fromt the registration form

if ($_POST['agree'] !== "true"){
    //They didn't make the promise
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    header('location: ../register.php?error=You must agree to the hotdog promise.&email=' . $email);
    die('We got here without form infomation!');
}


//now we have arrived at this page with form information in post

$email = $_POST['email'] ;
$password = $_POST['password'];
$passwordCheck = $_POST['password2'];

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
    //They did not type a correct email address in
    header('location: ../register.php?error=Your email address was invalid.');
    die("$email is an invalid email address");
}

//make a database connection

require_once('database.inc.php');

//we have a connection to the database and need to check to see if this email exists in the database.
//check to see if that email exists in the database already
  $sql = "SELECT email FROM users WHERE email=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)){
    header('location: ../register.php?error=The statement seems to be incorrect. Error: 46584');
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if (mysqli_fetch_assoc($resultData) > 0){
    header('location: ../register.php?error=You have supplied an invalid email or your email is already in use.');
    exit();
  }


  //make sure they typed in a PASSWORD
  if ($password == ""){
      //the passwords were not the same
      header('location: ../register.php?error=You must enter a password.&email=' . $email);
      exit('Password was null.');
  }


  //check to ensure the password are the same
  if ($password !== $passwordCheck){
      //the passwords were not the same
      header('location: register.php?error=The passwords you submitted were not the same.');
      exit('Password !==');
  }

  //hash their password
  $password = password_hash($password, PASSWORD_DEFAULT);


  //upload to database
  $stmt = $conn->prepare("INSERT INTO users (email, password) values(?, ?)");
  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();
  //fetching result would go here, but will be covered later
  $stmt->close();

  //if there was no error send them to the log in page with a success message
  header('location: ../login.php?success=You may now login.');
  exit();
