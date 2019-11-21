<?php
require_once 'header.php';

$galleryPath = "uploads";



if (isset($_FILES['image']['name'])) {
    $fileName = basename($_FILES["image"]["name"]);
    $fileName = filter_var($fileName, FILTER_SANITIZE_STRING);
    $filteredName = preg_replace('/\s+/', '', $fileName);
    $saveto = "uploads/$filteredName";
    move_uploaded_file($_FILES['image']['tmp_name'], $saveto);
    $typeok = TRUE;
    switch($_FILES['image']['type']) {
        case "image/gif":   $src = imagecreatefromgif($saveto); break;
        case "image/jpeg":  // Both regular and progressive jpegs
        case "image/pjpeg": $src = imagecreatefromjpeg($saveto); break;
        case "image/png":   $src = imagecreatefrompng($saveto); break;
        default:            $typeok = FALSE; break;
    }
    if ($typeok) {
        list($w, $h) = getimagesize($saveto);
        $max = 300;
        $tw  = $w;
        $th  = $h;
        if ($w > $h && $max < $w) {
            $th = $max / $w * $h;
            $tw = $max;
        }
        elseif ($h > $w && $max < $h) {
            $tw = $max / $h * $w;
            $th = $max;
        }
        elseif ($max < $w) {
            $tw = $th = $max;
        }
        $tmp = imagecreatetruecolor($tw, $th);
        imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
        imageconvolution($tmp, array(array(-1, -1, -1), array(-1, 16, -1), array(-1, -1, -1)), 8, 0);
        imagejpeg($tmp, $saveto);
        imagedestroy($tmp);
        imagedestroy($src);
    }
}
echo <<<_END

    <div id="galleryHeader">
        <h1>Enjoy the Gallery!</h1>
    </div>
    <div id="galleryDisplay">
    </div>

    <form method='post' action='gallery.php' enctype='multipart/form-data'>
        <h3>Upload an image to display in the Gallery</h3>
        Image: <br>
        <input type='file' name='image' size='14'><br><br>
        <input type='submit' value='Save Gallery'>
    </form>
_END;
console.log($galleryPath);
$gallery = preg_grep('/^([^.])/', scandir($galleryPath));
foreach ($gallery as $image) {
    console.log($gallery);
    echo '<img src='.$galleryPath.'/' . $image . ' class="galleryImages">';
}

require_once "footer.php";
?>


<script src="./carousel.js" type="text/javascript"></script>