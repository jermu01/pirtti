<?php
if (isset($_POST['submit'])) {

	$name = $_FILES['fileToUpload']['name'];
	$path = "files/OmavalvontasuunnitelmaPirtti.docx";
	$ext = pathinfo($name, PATHINFO_EXTENSION);
	$allowed = array('docx');
		if (!in_array($ext, $allowed)) {
			echo "Tiedoston on oltava word tiedosto!";
	} else {
		$files = glob("files/*");
			foreach($files as $file){
			if(is_file($file)){
			unlink($file);
			}
		}
		if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path)) {
			echo "The file " . basename($_FILES['fileToUpload']['name']) . " has been uploaded";
			header("location: fileUpload.php");
		} else {
			echo "Sorry, there was a problem uploading your file.";
		}
	}
}

