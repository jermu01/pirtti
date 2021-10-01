<?php

include_once 'db.php';

$text = $_POST['text'];

try {
    $stmt = $conn->prepare("UPDATE edit_websites SET text = :text WHERE id = 2;");
    $stmt->bindParam(':text', $text);

    if ($stmt->execute() == false){
        $data = array(
            'error' => 'Failed!'
        );
    } else {
        $data = array(
            'success' => 'Success!'
        );
    }
} catch (PDOException $e) {
    $data = array(
        'error' => 'Tapahtui joku virhe!!'
    );
}


header("Content-type: application/json;charset=utf-8");
echo json_encode($data);