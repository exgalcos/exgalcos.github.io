<!DOCTYPE html>
<html>
<head>
	<title>Seminar Files</title>
</head>
<body>
	<h1>Seminar Files</h1>
	<?php
	$upload_dir = "seminar_files/";
	if (isset($_FILES["fileToUpload"])) {
		$target_file = $upload_dir . basename($_FILES["fileToUpload"]["name"]);
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	?>
	<form action="" method="post" enctype="multipart/form-data">
		Select file to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload File" name="submit">
	</form>
	<?php
	$files = scandir($upload_dir, SCANDIR_SORT_DESCENDING);
	// To sort by id, use this instead:
	// $files = array_diff(scandir($upload_dir), array('..', '.'));
	// natsort($files);
	// $files = array_reverse($files);
	foreach($files as $file) {
		if ($file !== '.' && $file !== '..') {
			echo '<a href="' . $upload_dir . $file . '">' . $file . '</a><br>';
		}
	}
	?>
</body>
</html>