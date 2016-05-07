<?php
set_time_limit( 3 );
$IMAGE_WIDTH = 500; if(isset($_GET['w'])) $IMAGE_WIDTH = (int)$_GET['w'];
$IMAGE_HEIGHT = 250; if(isset($_GET['h'])) $IMAGE_HEIGHT = (int)$_GET['h'];

$BG_R = 128; if(isset($_GET['bg_r'])) $BG_R = (int) $_GET['bg_r'];
$BG_G = 128; if(isset($_GET['bg_g'])) $BG_G = (int) $_GET['bg_g'];
$BG_B = 128; if(isset($_GET['bg_b'])) $BG_B = (int) $_GET['bg_b'];

$im = imagecreatetruecolor($IMAGE_WIDTH, $IMAGE_HEIGHT);

$background = imagecolorallocate($im, $BG_R, $BG_G, $BG_B);
$text_color = imagecolorallocate($im, 255, 255, 255);
$shadow_color = imagecolorallocate($im, 128, 128, 128);

imagefill($im, 0, 0, $background);
$font_path = 'BebasNeue.ttf';

$text = $IMAGE_WIDTH.' x '.$IMAGE_HEIGHT.' @ emste.eu';

imagettftext($im, 15, 0, 22, 37, $shadow_color, $font_path, $text);
imagettftext($im, 15, 0, 21, 36, $text_color, $font_path, $text);

header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>