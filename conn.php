<?php
define('DB_SERVER', 'remotemysql.com');
define('DB_USERNAME', 'DJAWEpRzV1');
define('DB_PASSWORD', 'SPkXbWkjHP');
define('DB_NAME', 'DJAWEpRzV1');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>