<?php

session_start();


include_once '../backend/db.php';

    if(isset($_POST['insert'])) {
        $name = $_POST['name'];
        $title = $_POST['title'];
        $text = $_POST['text'];
        $file = $_FILES['file']['name'];
        $user_id = $_SESSION['user_id'];

    if(isset($_POST['insert'])) {
        $img_name = basename($_FILES['file']['name']);
        $tar_dir = "../img/uploads/";
        $target_file = $tar_dir . $img_name;
        $uploadNow = 1;


        $pdoQuery = "INSERT INTO gallery_image (name,title,text,file) VALUES (:name,:title,:text,:file)";

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $msg = "File is uploaded!!";
        } else {
            $msg = "File is not uploaded!!";
        }

        $pdoQuery_run = $conn->prepare($pdoQuery);

        $pdoQuery_exec = $pdoQuery_run->execute(array(":name"=>$name, ":title"=>$title, ":text"=>$text, ":file"=>$file));
        if ($pdoQuery_exec) {
            echo 'Data Inserted!!';
            header("location: galleryAdmin.php?uploadsuccess");
        } else {
            echo 'Data Not Inserted!!';
        }
    }
}

?>