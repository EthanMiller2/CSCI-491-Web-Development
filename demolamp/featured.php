<?php
require_once 'header.php';
?>

<?php

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
    <body>
      <h1>Featured Artist: The Hawthorne Roots</h1>
      <h3>Genre: Rock</h3>"
      <img src="img/hawthorne_roots.jpg" alt="pic" />
      <br>
      <a href='https://www.hawthorneroots.com' target='_blank'>Visit Their Website</a>
      <p> Enter a band you would like to see featured and some information about the band
        such as a genre, links to their page, and links to their events/photos. </p>
      <form name="bandRequest" method="post" action="featured.php" onsubmit="validateForm()">
        <textarea name="message"></textarea>
        <input type="submit">
      </form>
    </body>
</html>

<?php
require_once 'footer.php';
?>
