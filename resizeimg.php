<?php
function resizejpg(){
	$imagepath = $_FILES["image"]["tmp_name"];
	$img = imagecreatefromjpeg($imagepath);

	$img = imagescale($img, 500, 500);
	imagejpeg($img, 'resizeimg.jpg');
	echo '<center><img src="resizeimg.jpg"></center>';
	echo '<button><a href="resizeimg.jpg" download='.date("mdYHis").'"image">Download</a></center>';
	imagedestroy($img);
}

function resizepng(){
	$imagepath = $_FILES["image"]["tmp_name"];
	$img = imagecreatefrompng($imagepath);

	$img = imagescale($img, 500, 500);
	imagepng($img, 'resizeimg.png');
	echo '<center><img src="resizeimg.png"></center>';
	echo '<button><a href="resizeimg.png" download='.date("mdYHis").'"image">Download</a></center>';
	imagedestroy($img);
}

function resizegif(){
	$imagepath = $_FILES["image"]["tmp_name"];
	$img = imagecreatefromgif($imagepath);

	$img = imagescale($img, 500, 500);
	imagegif($img, 'resizeimg.gif');
	echo '<center><img src="resizeimg.gif"></center>';
	echo '<button><a href="resizeimg.gif" download='.date("mdYHis").'"image">Download</a></center>';
	imagedestroy($img);
}
?>