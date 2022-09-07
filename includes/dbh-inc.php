<?php

$hostname = 'localhost';
$dbusername = 'root';
$dbpwd = '';
$dbname = 'registerandlogingphp';

$conn = mysqli_connect($hostname, $dbusername,$dbpwd,$dbname);

if (!$conn){
    die ('Database connection failed');
}