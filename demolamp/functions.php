<?php
$dbhost  = 'localhost';

global $db;


$db = 'db63';
$dbuser  = 'user63';
$dbpass  = '63clop';


$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error)
    die("Fatal Error 1");

function queryMysql($query) {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die("Fatal Error 2");
    return $result;
}

function sanitizeString($var){
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    if (get_magic_quotes_gpc())
        $var = stripslashes($var);
    return $connection->real_escape_string($var);
}

?>

