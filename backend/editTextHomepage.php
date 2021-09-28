<?php

include_once 'db.php';

$text = $_POST['text'];

try {
    $stmt = $conn->prepare("UPDATE homepage_text SET text = :text;");
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