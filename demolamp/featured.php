<?php
require_once 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

      <h1>Featured Artist: The Hawthorne Roots</h1>
      <h3>Genre: Rock</h3>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
      * {box-sizing: border-box}
      body {font-family: Verdana, sans-serif; margin:0}
      .mySlides {display: none}
      img {vertical-align: middle;}

      /* Slideshow container */
      .slideshow-container {
        max-width: 800px;
        position: relative;
        margin: auto;
      }

      /* Next & previous buttons */
      .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
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
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }

      .active, .dot:hover {
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
        .prev, .next,.text {font-size: 11px}
      }
      </style>
      </head>
      <body>

      <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/baxter-vintage-upstairs_1_orig.jpg" style="width:100%">
        <div class="text">Big thanks to Pat Hill and The Bozeman Magazine for the write up about our EP release! <a href='http://bozemanmagazine.com/articles/2018/05/31/28300_hawthorne_roots' target='_blank'>Read the article here!</a></div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img/in-the-grass_orig.jpg" style="width:100%">
        <div class="text">We had a blast hanging out with the Trail 103.3 crew in Missoula before our Dec 7th show! <a href='https://www.podbean.com/media/share/pb-zx6c9-a14cd1' target='_blank'>Listen here!</a></div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img/group-cervantes_orig.jpg" style="width:100%">
        <div class="text">We are stoked to return to Helena's Alive@5 Summer Concert Series! <a href='https://helenair.com/helena/helena-heating-up-with-return-of-alive-at-summer-concert/article_ed4bdd38-7617-5829-86b7-a91ef458e3c0.html' target='_blank'>Read the article here!</a></div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

      <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }
      </script>

      </body>
      </html>





      <br>
      <div style="text-align:center">
      <a href='https://www.hawthorneroots.com' target='_blank'>Visit Their Website</a>
      <p> Enter a band you would like to see featured and some information about the band
        such as a genre, links to their page, and links to their events/photos. </p>
      <form name="bandRequest" method="post" action="featured.php" onsubmit="validateForm()">
        <textarea name="message" placeholder="Write Something..."></textarea>
        <input type="submit" value="Submit">
      </form>
      </div>
    </body>
</html>



<?php
require_once 'featuredForm.php';
?>



<?php
require_once 'footer.php';
?>
