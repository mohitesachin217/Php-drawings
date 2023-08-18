<?php
// Create a blank image with a white background
$width = 400;
$height = 400;
$image = imagecreatetruecolor($width, $height);
$background_color = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $background_color);

// Define square color
$square_color = imagecolorallocate($image, 0, 0, 255);

// Define square coordinates
$top_left_x = 100;
$top_left_y = 100;
$side_length = 200;

// Draw the square using the defined coordinates
imagerectangle($image, $top_left_x, $top_left_y, $top_left_x + $side_length, $top_left_y + $side_length, $square_color);

// Set the content type header for displaying the image
header('Content-type: image/png');

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);
?>
