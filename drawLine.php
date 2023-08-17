// Create a blank image with a white background
$width = 400;
$height = 300;
$image = imagecreatetruecolor($width, $height);
$background_color = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $background_color);

// Define line color
$line_color = imagecolorallocate($image, 0, 0, 0);

// Draw a line from (50, 100) to (350, 200)
$starting_x = 50;
$starting_y = 100;
$ending_x = 350;
$ending_y = 200;
imageline($image, $starting_x, $starting_y, $ending_x, $ending_y, $line_color);

// Set the content type header for displaying the image
header('Content-type: image/png');

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);
