<?php
session_start();

$clubstr = 'Jamming in the Bozone';


echo <<<_INIT
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='javascript.js'></script>
        <link href="https://fonts.googleapis.com/css?family=Arsenal|Lora|Muli|Source+Sans+Pro|Playfair+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='css/styles.css'>
        <title>$clubstr</title>
        </head>
_INIT;
<<<<<<< HEAD
=======





>>>>>>> d6362407cad827738e7f9fc1a2502e3b14d42ff7
echo <<<_HEADER_OPEN
        <div id="wrapper">
        <header>
            <div id='logo'>$clubstr</div>
<<<<<<< HEAD
            <div class='username'>$userstr</div>
               <nav><ul>
                            <li><a href='index.php'>Home</a></li>
                            <li><a href='members.php'>About</a></li>
                            <li><a href='messages.php'>Photo Share</a></li>
                           	<li><a href='featured.php'>Featured Artist</a></li>
                        </ul></nav>
_HEADER_OPEN;



=======
            <img id="logoImg" src="bg.jpg">

                     <nav><ul>
                            <li><a href='index.php'>Home</a></li>
                            <li><a href='calender.php'>Calender</a></li>
                            <li><a href='featured.php'>Featured Artist</a></li>
                            <li><a href=#>Photo Share</a></li>
                        </ul></nav>


_HEADER_OPEN;

>>>>>>> d6362407cad827738e7f9fc1a2502e3b14d42ff7

echo <<<_HEADER_CLOSE

        </header>

        <div id="content">
_HEADER_CLOSE;

?>
