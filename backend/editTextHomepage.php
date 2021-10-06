<?php

include_once 'db.php'; //database connection

//Post-data
$text = $_POST['text'];

try {
    $stmt = $conn->prepare("UPDATE edit_websites SET text = :text WHERE id = 1;"); //UPDATE statement
    $stmt->bindParam(':text', $text); //bindParam variable

    //run stmt
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