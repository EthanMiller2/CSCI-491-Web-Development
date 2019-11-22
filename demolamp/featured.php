<?php
require_once 'header.php';
?>

<?php
if($_POST["message"]) {
    mail("baseballfreak07@gmail.com", "Featured Band Request", $_POST["message"], "From: Bozonemusic@gmail.com");
}
?>
<!DOCTYPE html>
<html>
    <head>
      <script>
      function validateForm() {
        var x = document.forms["bandRequest"]["message"].value;
        if (x == "") {
          alert("Section is blank");
          return false;
        }
      }
      </script>
    </head>
    <style>
        .button{
            background-color: #444;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button:hover{
            background-color: crimson;
        }
    </style>
    <body>
      <h1>Featured Artist: The Hawthorne Roots</h1>
      <h3>Genre: Rock</h3>

      <div style="padding-top:20px; padding-bottom: 50px; display:flex">
        <iframe width="50%" height="400px" src="https://www.youtube.com/embed/C8aAefq-CLU"></iframe>
        <div style="padding-left:50px; max-width: 600px; width: 50%; text-align:left;">
            <h1> About Hawthorne </h1>
            <h3 style="line-height: 160%"> The Hawthorne Roots are a 7-time award winning roots rock & roll band from Bozeman,
            Montana fronted by the Kelly sisters. The group brings a refreshing and energetic performance
            to the stage. Their original sound is built off of soulful vocals, three-part harmony, and guitar
            riffs reminiscent of bands like The Allman Brothers, Tedeschi Trucks, and Fleetwood Mac. </h3>
            <div style="text-align:center">
            <a href="https://www.hawthorneroots.com" class="button">Visit Their Website</a>
            </div>
        </div>
      </div>
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                * {box-sizing: border-box;}
                body {font-family: Verdana, sans-serif;}
                .mySlides {display: none;}
                img {vertical-align: middle;}

                /* Slideshow container */
                .slideshow-container {
                    max-width: 1000px;
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
                <div class="numbertext">1 / 3</div>
                    <img src="img/baxter-vintage-upstairs_1_orig.jpg" style="width:100%">
                    <div class="text">Big thanks to Pat Hill and The Bozeman Magazine for the write up about our EP release!
                    <a href="http://bozemanmagazine.com/articles/2018/05/31/28300_hawthorne_roots" class="button2">Read The Article Here!</a></div>
                </div>

            <div class="mySlides fade">
                 <div class="numbertext">2 / 3</div>
                    <img src="img/in-the-grass_orig.jpg" style="width:100%">
                    <div class="text">We had a blast hanging out with the Trail 103.3 crew in Missoula before our Dec 7th show!
                    <a href="https://www.podbean.com/media/share/pb-zx6c9-a14cd1" class="button2">Listen Here!</a> </div>
                 </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                    <img src="img/group-cervantes_orig.jpg" style="width:100%">
                    <div class="text">We are stoked to return to Helena's Alive @ 5 Summer Concert Series!
                    <a href="https://helenair.com/helena/helena-heating-up-with-return-of-alive-at-summer-concert/article_ed4bdd38-7617-5829-86b7-a91ef458e3c0.html" class="button2">Read The Article Here!</a></div>
                </div>

        </div>
      <br>

      <div style="text-align:center">
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
                setTimeout(showSlides, 8000); // Change image every 8 seconds
            }
      </script>
    </body>
</html>
</body>
</html>

<?php
require_once 'footer.php';
?>
