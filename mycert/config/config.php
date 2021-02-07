<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_NAME', 'hotdog_freesslauto');
define('DB_USERNAME', 'hotdog');
define('DB_PASSWORD', 'LedG1090#');
define('DB_HOST', 'localhost');
define('KEY', 'TzncJiqF&Rt0ekm1#K9$4:f!ojb({sd*u[N)xh2QZ-w53%8vyVrp@alP6EM}7U^X');
                
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
                
// Check connection
if($mysqli->connect_error){
    die('ERROR: Could not connect. ' . $mysqli->connect_error);
}
define('APP_SETTINGS_PATH', '/home/qov0blw833fo/autossl/settings/settings.json');