<?php

require 'vendor/autoload.php';

$imagine = new Imagine\Gd\Imagine();
// or
//$imagine = new Imagine\Imagick\Imagine();
// or
//$imagine = new Imagine\Gmagick\Imagine();

$size = new Imagine\Image\Box(40, 40);

$mode = Imagine\Image\ImageInterface::THUMBNAIL_INSET;
// or
$mode = Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;

$imagine->open('path/iphone.jpg')
	->thumbnail($size, $mode)
	->save('path/thumbnail.png')
;
?>