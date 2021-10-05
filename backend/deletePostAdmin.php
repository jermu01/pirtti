<?php

session_start();

$data = array();

$post_id = $_GET['id'];

include_once 'db.php'; //database connection

try {
    $stmt = $conn->prepare("DELETE FROM gallery_image WHERE id = :post_id"); //DELETE statement
    $stmt->bindParam(':post_id', $post_id); //bindParam variable

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