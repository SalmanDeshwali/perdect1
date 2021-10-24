<?php 
if (isset($_FILES['imag'])) {
	echo "<pre>";
	print_r($_FILES);

	$file_name= $_FILES['imag']['name'];
	$file_size= $_FILES['imag']['size'];
    $file_type= $_FILES['imag']['type'];
    $file_tmp=  $_FILES['imag']['tmp_name'];
 	move_uploaded_file($file_tmp, "fileupload/".$file_name);   
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>files</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="imag"><br><br>
	<input type="submit" name="Submit">
</form>
</body>
</html>