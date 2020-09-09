<?php
#1
//open & close connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db1';

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// echo "<pre>";
// var_dump($link);
// echo "</pre>";
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
