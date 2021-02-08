<?php

require_once('config.inc.php');

$conn = mysqli_connect($SQLserver,$SQLuser,$SQLpassword,$SQLdatabase) ;

// Check connection
if (mysqli_connect_errno()) {
    header('../index.php?error=An error acurred, if this continues please contact an administrator. Error: Skynet has gained sentience, evacuate immediately.');
  exit("Failed to connect to MySQL: " . mysqli_connect_error());
}
