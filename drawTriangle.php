<?php
// Create a blank image with a white background
$width = 400;
$height = 300;
$image = imagecreatetruecolor($width, $height);
$background_color = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $background_color);

// Define triangle color
$triangle_color = imagecolorallocate($image, 0, 0, 255);

// Define triangle vertices
$vertex1 = array('x' => 200, 'y' => 50);
$vertex2 = array('x' => 50, 'y' => 250);
$vertex3 = array('x' => 350, 'y' => 250);

// Draw the triangle using the defined vertices
imagepolygon($image, array($vertex1['x'], $vertex1['y'], $vertex2['x'], $vertex2['y'], $vertex3['x'], $vertex3['y']), 3, $triangle_color);

// Set the content type header for displaying the image
header('Content-type: image/png');

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);
?>
