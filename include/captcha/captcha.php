<?php 
session_start();

$strung='';

for ($i=0; $i < 5; $i++) { 
	$rand= rand(0,1);
	if($rand == 1){
		$string .= chr(rand(98,122)); 
	}
	else{
		$string .= chr(rand(48,57));
	}
	
	
}

$_SESSION['random_code'] = $string;

$dir = 'fonts/';
 
$image = imagecreatetruecolor(80, 50);
$black = imagecolorallocate($image, 0, 0, 0);
$color = imagecolorallocate($image, 200, 100, 90); // red
$white = imagecolorallocate($image, 255, 255, 255);

imagefilledrectangle($image,0,0,200,100,$white);
imagettftext($image, 30, 0, 10, 40, $alt, "fonts/font10.ttf", $_SESSION['random_code']);

header("Content-type: image/png");
imagepng($image);

?>