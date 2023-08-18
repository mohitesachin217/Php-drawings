<?php
// Create a blank image with a white background
$width = 400;
$height = 300;
$image = imagecreatetruecolor($width, $height);
$background_color = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $background_color);

// Define rectangle color
$rectangle_color = imagecolorallocate($image, 0, 0, 255);

// Define rectangle coordinates
$top_left_x = 100;
$top_left_y = 50;
$bottom_right_x = 300;
$bottom_right_y = 200;

// Draw the rectangle using the defined coordinates
imagerectangle($image, $top_left_x, $top_left_y, $bottom_right_x, $bottom_right_y, $rectangle_color);

// Set the content type header for displaying the image
header('Content-type: image/png');

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);
?>
