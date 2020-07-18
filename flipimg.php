<?php
function flipjpg(){
	$imagepath = $_FILES["image"]["tmp_name"];
	$img = imagecreatefromjpeg($imagepath);

	imageflip($img, IMG_FLIP_HORIZONTAL);
	imagejpeg($img, 'flipimg.jpg');
	echo '<center><img src="flipimg.jpg" height="300" width="300">';
	echo '<button><a href="flipimg.jpg" download='.date("mdYHis").'"image">Download</a></center>';
	imagedestroy($img);
}


function flippng(){
	$imagepath = $_FILES["image"]["tmp_name"];
	$img = imagecreatefrompng($imagepath);

	imageflip($img, IMG_FLIP_HORIZONTAL);
	imagepng($img, 'flipimg.png');
	echo '<center><img src="flipimg.png" height="300" width="300">';
	echo '<button><a href="flipimg.png" download='.date("mdYHis").'"image">Download</a></center>';
	imagedestroy($img);
}


function flipgif(){
	$imagepath = $_FILES["image"]["tmp_name"];
	$img = imagecreatefromgif($imagepath);

	imageflip($img, IMG_FLIP_HORIZONTAL);
	imagegif($img, 'flipimg.gif');
	echo '<center><img src="flipimg.gif" height="300" width="300">';
	echo '<button><a href="flipimg.gif" download='.date("mdYHis").'"image">Download</a></center>';
	imagedestroy($img);
}
?>