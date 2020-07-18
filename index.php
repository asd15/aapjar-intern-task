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
include 'textimg.php';
include 'resizeimg.php';
include 'flipimg.php';
include 'frameimg.php';

if(isset($_POST['addtext']) AND isset($_FILES['image'])){
	
	$path = $_FILES['image']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);
		
	switch(strtolower($ext)){
		case 'jpg';
		case 'jpeg';
			addtexttojpg();
		break;
		case 'png';
			addtexttopng();
		break;
		case 'gif';
			addtexttogif();
		break;
	}	
}

if(isset($_POST['resize']) AND isset($_FILES['image'])){
	
	$path = $_FILES['image']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	
	switch(strtolower($ext)){
		case 'jpg';
		case 'jpeg';
			resizejpg();
		break;
		case 'png';
			resizepng();
		break;
		case 'gif';
			resizegif();
		break;
	}
}

if(isset($_POST['flip']) AND isset($_FILES['image'])){
	
	$path = $_FILES['image']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	
	switch(strtolower($ext)){
		case 'jpg';
		case 'jpeg';
			flipjpg();
		break;
		case 'png';
			flippng();
		break;
		case 'gif';
			flipgif();
		break;
	}
}



if(isset($_POST['addframe']) AND isset($_FILES['image'])){
	$path = $_FILES['image']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	
	switch(strtolower($ext)){
		case 'jpg';
		case 'jpeg';
			framejpg();
		break;
		case 'png';
			framepng();
		break;
		case 'gif';
			framegif();
		break;
	}
}
?>