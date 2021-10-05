<?php

//if submit button is clicked
if (isset($_POST['submit'])) {

	$name = $_FILES['fileToUpload']['name']; //file name
	$path = "files/OmavalvontasuunnitelmaPirtti.docx"; //location where file will be saved
	$ext = pathinfo($name, PATHINFO_EXTENSION);
	$allowed = array('docx'); //allow only .docx files
		if (!in_array($ext, $allowed)) {
			header("location: fileUpload.php?type=error&msg=Tiedoston on oltava word tiedosto!!"); //display error msg if file is not .doxc
	} else {
		//delete old file from folder
		$files = glob("files/*");
			foreach($files as $file){
			if(is_file($file)){
			unlink($file);
			}
		}
		//move uploaded file in folder
		if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path)) {
			echo "The file " . basename($_FILES['fileToUpload']['name']) . " has been uploaded";
			header("location: ../admin.php?type=success&msg=Tiedosto on ladattu!!"); //control you in adminpage
		} else {
			echo "Sorry, there was a problem uploading your file.";
		}
	}
}

