<?php
$dbhost  = 'localhost';

global $db;
$db = 'db63';
$dbuser  = 'user63';
$dbpass  = '63clop';


$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error)
    die("Fatal Error 1");


?>
