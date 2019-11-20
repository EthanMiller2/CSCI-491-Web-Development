<?php
session_start();
require_once 'header.php';

echo <<<_BODY
    <div id="section1">
        <h2>Welcome to Jamming in the Bozone</h2>
            <p>Bringing our love of local musicians to you by compiling a list of venues and promoters, an up to date calender, and featured bands</p>
            <p></p>
    </div>
    <div id="section2">
        <h3>Local Venues & Promoters</h3>

            <div class="row">
            <div class="venueDiv">
                <img class="venue" src="rialto.png">
                <p>The Rialto features a dynamic theater, live music, private meeting and event space and a bar in downtown Bozeman.</p>
            </div>
            <div class="venueDiv">
                <img class="venue" src="chickenJam.jpeg">
                <p>Through presenting touring and local music, we aim to serve artists and the community the most enjoyable experience possible.</p>
            </div>
            </div>
            <div class="row">
            <div class="venueDiv">
                <img class="venue" src="taproom.jpg">
                <p>One of Bozeman best restaurants with 75 taps of Montana craft beer, regular live music and a rooftop patio.</p>
            </div>
            <div class="venueDiv">
                <img class="venue" src="logjam.png">
                <p>World-class production, state-of-the-art venues and exeptional service define the Logjam experience.</p>
            </div>
            </div>

            <p><strong>Links to other notable Montana venues</strong></p>
            <ul>
                <li>KettleHouse Ampitheater- Bonner</li>
                <li>Top Hat- Missoula </li>
                <li>Pub Station- Billings </li>
                <li>Filling Station- Bozeman</li>
            </ul>

    </div>
    <div id="section3">
        <h3>Previously Featured</h3>

    </div>
</html>
_BODY;

require_once 'footer.php';
?>
