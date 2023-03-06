<?php
// Define the path to the image folder
$imageFolder = 'gallery/';

// Get a list of all the images in the folder
$images = glob($imageFolder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// Loop through the images and output them
foreach ($images as $image) {
    echo '<img src="' . $image . '" alt="Gallery image" />';
}
?>
