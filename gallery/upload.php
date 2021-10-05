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
        $target_file = $tar_dir . $img_name;
        $uploadNow = 1;


        $pdoQuery = "INSERT INTO gallery_image (name,title,text,file) VALUES (:name,:title,:text,:file)"; //SQL-Database INSERT statement

        //Move image in folder
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $msg = "File is uploaded!!"; 
        } else {
            $msg = "File is not uploaded!!";
        }

        $pdoQuery_run = $conn->prepare($pdoQuery); //stmt run

        $pdoQuery_exec = $pdoQuery_run->execute(array(":name"=>$name, ":title"=>$title, ":text"=>$text, ":file"=>$file));
        if ($pdoQuery_exec) {
            echo 'Data Inserted!!';
            header("location: galleryAdmin.php?uploadsuccess"); //control you selected website
        } else {
            echo 'Data Not Inserted!!';
        }
    }
?>