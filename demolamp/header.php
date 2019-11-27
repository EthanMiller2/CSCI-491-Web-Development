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

echo <<<_HEADER_OPEN
        <div id="wrapper">
        <header>
            <div id='logo'>$clubstr</div>
            <img id="logoImg" src="img\bg.jpg">
               <nav><ul>
                            <li><a href='index.php'>Home</a></li>

                            <li><a href='#'>About</a></li>
                            <li><a href='calender.php'>Calendar</a></li>
                            <li><a href='gallery.php'>Photo Share</a></li>
                           	<li><a href='featured.php'>Featured Artist</a></li>
                        </ul></nav>
_HEADER_OPEN;



echo <<<_HEADER_CLOSE

        </header>

        <div id="content">
_HEADER_CLOSE;

?>
