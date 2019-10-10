<?php
$imageURL = "bg.png";
list($width,$height) = getimagesize($imageURL);
$imageProperties = imagecreatetruecolor($width, $height);
$targetLayer = imagecreatefrompng($imageURL);
imagecopyresampled($imageProperties, $targetLayer, 0, 0, 0, 0, $width, $height, $width, $height);
$WaterMarkText = 'CONFIDENTIAL';
$watermarkColor = imagecolorallocate($imageProperties, 191,191,191);
imagestring($imageProperties, 5, 130, 117, $WaterMarkText, $watermarkColor);
header('Content-type: image/png');
imagepng ($imageProperties);
imagedestroy($targetLayer);
imagedestroy($imageProperties);
?>
