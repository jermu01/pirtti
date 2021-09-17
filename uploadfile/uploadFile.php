<?php

if (isset($_POST['submit'])) {
	$target = "files/";
	$target = $target . basename($_FILES['fileToUpload']['name']);
	$ok = 1;
	if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target)) {
		echo "The file " . basename($_FILES['fileToUpload']['name']) . " has been uploaded";
	} else {
		echo "Sorry, there was a problem uploading your file.";
	}
}