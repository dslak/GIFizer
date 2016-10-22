<?php

include 'gif/GIFEncoder.class.php';

$frames = array();
$delays = array();
$delay = $_POST['delay']/10; // convert to milliseconds


foreach($_FILES as $file){
  foreach($file['tmp_name'] as $k=>$fn){
    $filename = $fn;

    // Get new sizes
    list($width, $height) = getimagesize($filename);
    $percent=800/$width;
    $newwidth = $width * $percent;
    $newheight = $height * $percent;

    // Load
    $thumb = imagecreatetruecolor($newwidth, $newheight);
    
    // Check image type
    switch(exif_imagetype($filename)){
    case 1:
    $source = imagecreatefromgif($filename);
    break;

    case 2:
    $source = imagecreatefromjpeg($filename);
    break;

    case 3:
    $source = imagecreatefrompng($filename);
    break;
    }
    
    // Resize
    imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    // Create GIF frame
    ob_start();
    imagegif($thumb);
    $frames[]=ob_get_contents();
    $delays[]=$delay;
    $loops = 0;
    ob_end_clean();
  }
}


// Create new GIF animation
$gif = new AnimatedGif($frames,$delays,$loops);

?>
