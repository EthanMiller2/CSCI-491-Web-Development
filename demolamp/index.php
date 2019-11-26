<?php
session_start();
require_once 'header.php';

echo <<<_BODY
    <div id="section1">
        <h2>Welcome to Jamming in the Bozone</h2>
         <head>
                 <meta name="viewport" content="width=device-width, initial-scale=1">
                     <style>
                         * {box-sizing: border-box;}
                         body {font-family: Verdana, sans-serif;}
                         .mySlides {display: none;}
                         img {vertical-align: middle;}

                         /* Slideshow container */
                         .slideshow-container {
                             max-width: 800px;
                             position: relative;
                             margin: auto;
                         }

                         /* Caption text */
                         .text {
                             color: #f2f2f2;
                             font-size: 15px;
                             padding: 8px 12px;
                             position: absolute;
                             bottom: 8px;
                             width: 100%;
                             text-align: center;
                         }

                         /* Number text (1/3 etc) */
                         .numbertext {
                             color: #f2f2f2;
                             font-size: 12px;
                             padding: 8px 12px;
                             position: absolute;
                             top: 0;
                         }

                         /* The dots/bullets/indicators */
                         .dot {
                             height: 15px;
                             width: 15px;
                             margin: 0 2px;
                             background-color: #bbb;
                             border-radius: 50%;
                             display: inline-block;
                             transition: background-color 0.6s ease;
                         }

                         .active {
                             background-color: #717171;
                         }

                         /* Fading animation */
                         .fade {
                             -webkit-animation-name: fade;
                             -webkit-animation-duration: 1.5s;
                             animation-name: fade;
                             animation-duration: 1.5s;
                         }

                         @-webkit-keyframes fade {
                             from {opacity: .4}
                             to {opacity: 1}
                         }

                         @keyframes fade {
                             from {opacity: .4}
                             to {opacity: 1}
                         }

                         /* On smaller screens, decrease text size */
                         @media only screen and (max-width: 300px) {
                             .text {font-size: 11px}
                          }
                     </style>
                 </head>
               <body>
                 <div class="slideshow-container">

                     <div class="mySlides fade">
                         <div class="numbertext">1 / 6</div>
                             <img src="img/baxter-vintage-upstairs_1_orig.jpg" style="width:100%">
                         </div>

                     <div class="mySlides fade">
                        <div class="numbertext">2 / 6</div>
                            <img src="img/IndexBand1.jpg" style="width:100%">
                        </div>

                     <div class="mySlides fade">
                          <div class="numbertext">3 / 6</div>
                             <img src="img/in-the-grass_orig.jpg" style="width:100%">
                          </div>
                     <div class="mySlides fade">
                        <div class="numbertext">4 / 6</div>
                            <img src="img/Indexband2.png" style="width:100%">
                        </div>
                     <div class="mySlides fade">
                        <div class="numbertext">5 / 6</div>
                            <img src="img/IndexBand3.jpg" style="width:100%">
                        </div>

                     <div class="mySlides fade">
                         <div class="numbertext">6 / 6</div>
                             <img src="img/group-cervantes_orig.jpg" style="width:100%">
                         </div>
                 </div>
               <br>

               <div style="text-align:center">
                 <span class="dot"></span>
                 <span class="dot"></span>
                 <span class="dot"></span>
                 <span class="dot"></span>
                 <span class="dot"></span>
                 <span class="dot"></span>
               </div>

               <script>
                 var slideIndex = 0;
                 showSlides();

                     function showSlides() {
                         var i;
                         var slides = document.getElementsByClassName("mySlides");
                         var dots = document.getElementsByClassName("dot");
                         for (i = 0; i < slides.length; i++) {
                             slides[i].style.display = "none";
                         }
                         slideIndex++;
                         if (slideIndex > slides.length) {slideIndex = 1}
                         for (i = 0; i < dots.length; i++) {
                             dots[i].className = dots[i].className.replace(" active", "");
                         }
                         slides[slideIndex-1].style.display = "block";
                         dots[slideIndex-1].className += " active";
                         setTimeout(showSlides, 2500); // Change image every 2.5 seconds
                     }
               </script>
             </body>
    </div>
    <div id="section2">
        <h3 style="margin-left:5%">Local Venues & Promoters</h3>

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
            <div style="margin-left: 4.2%">
            <p><strong>Links to other notable Montana venues</strong></p>
            <ul>
                <li><a href="https://classic.kettlehouse.com/kettlehouse-amphitheater/" class="button">KettleHouse Ampitheater- Bonner</a></li>
                <li><a href="https://logjampresents.com/top-hat-restaurant-bar/">Top Hat- Missoula</a></li>
                <li><a href="https://thepubstation.com/" class="button">Pub Station- Billings</a></li>
                <li><a href="https://www.bozemanevents.net//FillingStation" class="button">Filling Station- Bozeman</a></li>
            </ul>
            </div>
    </div>
    <div id="section3"; style="margin-left:5%">
        <h3>Previously Featured</h3>
        <p> Coming Soon </p>
    </div>
</html>
_BODY;

require_once 'footer.php';
?>
