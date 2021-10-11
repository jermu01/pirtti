<?php

session_start(); //session start

include_once '../backend/db.php'; //include database connection script

//if button name "insert" is clicked
if(isset($_POST['insert'])) {
    //form field inputs
    $name = $_POST['name']; 
    $title = $_POST['title'];
    $text = $_POST['text'];
    $file = $_FILES['file']['name'];
        
    $user_id = $_SESSION['user_id']; //user id
    $img_name = basename($_FILES['file']['name']); //image basename
    $tar_dir = "../img/uploads/"; //location where image will be saved
    $target_file = $tar_dir . $img_name; //include both of them
    $uploadOk = 1; //let image upload
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //holds the file extension of the file (in lower case)

    // Check file size
    if ($_FILES["file"]["size"] > 500000) {
    header("location: postimage.php?type=error&msg=Kuva on liian iso!");
    $uploadOk = 0;
}
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    header("location: postimage.php?type=error&msg=Kuva on väärän tyyppinen!");
    $uploadOk = 0;
}
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";  
    // if everything is ok, try to upload file
    } else {    
        //Move image in folder
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            header("location: galleryAdmin.php?type=success&msg=Kuva on ladattu!"); //control you selected website and display message
        } else {
            header("location: postimage.php?type=error&msg=Kuvan lataamisessa kävi ongelma!"); //control you selected website and display message
        }

        $stmt = "INSERT INTO gallery_image (name,title,text,file) VALUES (:name,:title,:text,:file)"; //SQL-Database INSERT statement

        $stmt_run = $conn->prepare($stmt); //stmt run

        $stmt_exec = $stmt_run->execute(array(":name"=>$name, ":title"=>$title, ":text"=>$text, ":file"=>$file));
        if ($stmt_exec) {
            header("location: galleryAdmin.php?type=success&msg=Kuva on ladattu!"); //control you selected website and display message
        } else {
            header("location: postimage.php?type=error&msg=Kuvan lataamisessa kävi ongelma!"); //control you selected website and display message
        }
    }
}
?>