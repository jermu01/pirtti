<?php

session_start();

$data = array();

$file = $_GET['file']; //GET file

include_once 'db.php'; //database connection

try {
    $stmt = $conn->prepare("SELECT FROM gallery_image WHERE file = :file"); //SELECT statement
    $stmt->bindParam(':file', $file); //bindParam variable

    unlink("../img/uploads/" . $file); //unlink image from folder

    //run stmt
    if ($stmt->execute() == false){
        $data = array(
            'error' => 'Error occured!'
        );
    } else {
        $data = array(
            'success' => 'Delete successfull!!'
        );
    }
} catch (PDOException $e) {
    $data = array(
        'error' => 'Tapahtui joku virhe!!'
    );
}

header("Content-type: application/json;charset=utf-8");
echo json_encode($data);