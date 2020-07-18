<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Appjar</title>
	</head>
	<body>
		<center>
			<h3>Upload Image</h3>
			<form action="index.php" enctype="multipart/form-data" method="post">
				<label>Select a file:</label>
				<input type="file" name="image" accept="image/gif, image/jpeg, image/png">
				<br><br><br>
				<label>Text:</label>
				<input type="text" name="textonimage">
				<br><br><br>
				<input type="submit" name="addtext" value="Add Text">&nbsp;&nbsp;
				<input type="submit" name="resize" value="Resize Image">&nbsp;&nbsp;
				<input type="submit" name="flip" value="Flip Image">&nbsp;&nbsp;
				<input type="submit" name="addframe" value="Add Frame and Text">
			<form><br><br>
		</center>
	</body>
</html>

<?php
if(isset($_POST['addtext'])){
		echo "Size: " . ($_FILES["image"]["size"] / 1024) . " kB<br>";
		$imagepath = $_FILES["image"]["tmp_name"];
		
		$font_path = "C:/wamp64/www/appjar/LittleLordFontleroyNF.TTF";
		$textonimage = $_POST['textonimage'];
		$fontSize = 250;
		$x = 115;
		$y = 185;
		if($imagepath){
			$img = imagecreatefromjpeg($imagepath);
		} else{
			echo "Please select image";
		}
		$color = imagecolorallocate($img, 255, 255, 255);
		
		imagettftext($img, $fontSize, 0, 75, 300, $color, $font_path, $textonimage);
		imagejpeg($img, 'textimg.jpg');
		echo '<center><img src="textimg.jpg" height="200" width="200"></center>';
		imagedestroy($img);
		
}

if(isset($_POST['resize'])){
	$imagepath = $_FILES["image"]["tmp_name"];
	$img = imagecreatefromjpeg($imagepath);

	$img = imagescale($img, 500, 500);
	imagejpeg($img, 'resize.jpg');
	echo '<center><img src="newimage.jpg"></center>';
	imagedestroy($img);
}

if(isset($_POST['flip'])){
	$imagepath = $_FILES["image"]["tmp_name"];
	$img = imagecreatefromjpeg($imagepath);

	imageflip($img, IMG_FLIP_HORIZONTAL);
	imagejpeg($img, 'newimage.jpg');
	echo '<img src="newimage.jpg">';
	imagedestroy($img);
}



if(isset($_POST['addframe'])){
	$imagepath = $_FILES["image"]["tmp_name"];
	
	$img = imagecreatefrompng($imagepath);
	$frame = imagecreatefrompng('frame.png');
	$frame = imagescale($frame, 400, 400);
	
	imagealphablending($img, false);
	imagesavealpha($img, true);
	
	imagecopymerge($img, $frame, 50, 90, 0, 0, 400, 400, 90);
	imagejpeg($img, 'mergedimg.jpg');
	echo '<center><img src="mergedimg.jpg" height="200" width="200"><br>';
	echo '<a href="mergedimg.jpg" download="save.jpg">Download</a></center>';
	imagedestroy($img);
	imagedestroy($frame);
}
?>