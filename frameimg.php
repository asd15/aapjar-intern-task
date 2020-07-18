<?php
function framejpg(){
	$imagepath = $_FILES["image"]["tmp_name"];
	
	$img = imagecreatefromjpeg($imagepath);
	$img = imagescale($img, 700, 800);
	$font_path = "C:/wamp64/www/appjar/LittleLordFontleroyNF.TTF";
	$textonimage = $_POST['textonimage'];
	$fontSize = 70;
	$color = imagecolorallocate($img, 0, 0, 0);
	
		
	$frame = imagecreatefrompng('frame.png');
	$frame = imagescale($frame, 400, 600);
	
	
	imagecopymerge($img, $frame, 150, 90, 0, 0, 400, 600, 100);
	imagettftext($img, $fontSize, 0, 210, 400, $color, $font_path, $textonimage);

	imagejpeg($img, 'mergedimg.jpg');
	echo '<center><img src="mergedimg.jpg" height="200" width="200"><br>';
	echo '<button><a href="mergedimg.jpg" download='.date("mdYHis").'"image">Download</a></center>';
	imagedestroy($img);
	imagedestroy($frame);
}


function framepng(){
	$imagepath = $_FILES["image"]["tmp_name"];
	
	$img = imagecreatefrompng($imagepath);
	$img = imagescale($img, 700, 800);
	$font_path = "C:/wamp64/www/appjar/LittleLordFontleroyNF.TTF";
	$textonimage = $_POST['textonimage'];
	$fontSize = 70;
	$color = imagecolorallocate($img, 0, 0, 0);
	
		
	$frame = imagecreatefrompng('frame.png');
	$frame = imagescale($frame, 400, 600);
	
	
	imagecopymerge($img, $frame, 150, 90, 0, 0, 400, 600, 100);
	imagettftext($img, $fontSize, 0, 210, 400, $color, $font_path, $textonimage);

	imagepng($img, 'mergedimg.png');
	echo '<center><img src="mergedimg.png" height="200" width="200"><br>';
	echo '<button><a href="mergedimg.png" download='.date("mdYHis").'"image">Download</a></center>';
	imagedestroy($img);
	imagedestroy($frame);
}


function framegif(){
	$imagepath = $_FILES["image"]["tmp_name"];
	
	$img = imagecreatefromgif($imagepath);
	$img = imagescale($img, 700, 800);
	$font_path = "C:/wamp64/www/appjar/LittleLordFontleroyNF.TTF";
	$textonimage = $_POST['textonimage'];
	$fontSize = 70;
	$color = imagecolorallocate($img, 0, 0, 0);
	
		
	$frame = imagecreatefrompng('frame.png');
	$frame = imagescale($frame, 400, 600);
	
	
	imagecopymerge($img, $frame, 150, 90, 0, 0, 400, 600, 100);
	imagettftext($img, $fontSize, 0, 210, 400, $color, $font_path, $textonimage);

	imagegif($img, 'mergedimg.gif');
	echo '<center><img src="mergedimg.gif" height="200" width="200"><br>';
	echo '<button><a href="mergedimg.gif" download='.date("mdYHis").'"image">Download</a></center>';
	imagedestroy($img);
	imagedestroy($frame);
}
?>