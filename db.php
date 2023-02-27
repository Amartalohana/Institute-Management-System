<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'schoolmanagement');
$con = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>