<?php

if (isset($_POST['submit'])) {
	$path = "files/";
	$path = $path . basename($_FILES['fileToUpload']['name']);
	$ok = 1;
	if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path)) {
		echo "The file " . basename($_FILES['fileToUpload']['name']) . " has been uploaded";
        header("location: fileUpload.php");
	} else {
		echo "Sorry, there was a problem uploading your file.";
	}
}