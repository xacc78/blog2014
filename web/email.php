<?php

$mailphoto = imagecreatefrompng("img/email.png");

$textcolor = imagecolorallocate($mailphoto, 255, 0, 0);


imagestring($mailphoto, 5, 0, 190, 'juanantonio@openmailbox.org', $textcolor);


header('Content-type: image/png');
imagepng($mailphoto);
/*
$anchophoto = imagesx($mailphoto);
$altophoto = imagesy($mailphoto);
echo $anchophoto;
echo $altophoto;
*/
imagedestroy($mailphoto);

?>