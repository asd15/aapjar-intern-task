<?php
function addtexttojpg(){
	
		$imagepath = $_FILES["image"]["tmp_name"];
		
		
		$font_path = "C:/wamp64/www/appjar/LittleLordFontleroyNF.TTF";
		$textonimage = $_POST['textonimage'];
		$fontSize = 250;


		$img = imagecreatefromjpeg($imagepath);
		$img = imagescale($img, 700, 800);

		$color = imagecolorallocate($img, 255, 255, 255);
		
		imagettftext($img, $fontSize, 0, 75, 300, $color, $font_path, $textonimage);
		imagejpeg($img, 'textimg.jpg');
		echo '<center><img src="textimg.jpg" height="200" width="200"><br>';
		echo '<button><a href="textimg.jpg" download='.date("mdYHis").'"image">Download</a></center>';
		imagedestroy($img);
}



function addtexttopng(){
	
		$imagepath = $_FILES["image"]["tmp_name"];
		
		
		$font_path = "C:/wamp64/www/appjar/LittleLordFontleroyNF.TTF";
		$textonimage = $_POST['textonimage'];
		$fontSize = 250;

		$img = imagecreatefrompng($imagepath);
		$img = imagescale($img, 700, 800);

		$color = imagecolorallocate($img, 255, 255, 255);
		
		imagettftext($img, $fontSize, 0, 75, 300, $color, $font_path, $textonimage);
		imagepng($img, 'textimg.png');
		echo '<center><img src="textimg.png" height="200" width="200"><br>';
		echo '<button><a href="textimg.png" download='.date("mdYHis").'"image">Download</a></center>';
		imagedestroy($img);
}



function addtexttogif(){
	
		$imagepath = $_FILES["image"]["tmp_name"];
		
		
		$font_path = "C:/wamp64/www/appjar/LittleLordFontleroyNF.TTF";
		$textonimage = $_POST['textonimage'];
		$fontSize = 250;

		$img = imagecreatefromgif($imagepath);
		$img = imagescale($img, 700, 800);
		
		$color = imagecolorallocate($img, 255, 255, 255);
		
		imagettftext($img, $fontSize, 0, 75, 300, $color, $font_path, $textonimage);
		imagegif($img, 'textimg.gif');
		echo '<center><img src="textimg.gif" height="200" width="200"><br>';
		echo '<button><a href="textimg.gif" download='.date("mdYHis").'"image">Download</a></center>';
		imagedestroy($img);
}
?>