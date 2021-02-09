<?php
if(session_status() === PHP_SESSION_NONE){
        session_start();
}

require_once('database.inc.php');

if ($_POST['email'] == null || $_POST['password'] == null){
  //user didn't fill out the fields
  header('location: ../login.php?error=You didn\'t actually fill anything out.');
  exit('User didn\'t fill out form.');
}


$email = $_POST['email'] ;
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();                    //requires mysqlnd

if($result->num_rows !== 1){
    //bad login
    header('location: ../login.php?error=Your information was incorrect.&email=' . $email);
    exit();
}

while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $names = $row['email'];
      $passHash = $row['password'];
}

if (password_verify($password, $passHash)){
    //the password is correct
    $_SESSION['userId'] = $id ;
    header('location: ../index.php?success=You are now logged in');
    exit();

}else{
  //the password is incorrect

  header('location: ../login.php?error=Your information was incorrect.&email=' . $email);
  exit();

}

$stmt->close();
