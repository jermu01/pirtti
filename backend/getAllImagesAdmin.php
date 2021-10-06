<?php
session_start(); //start session

//check if you are log in or not
if ($_SESSION['user_id']){
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = false;
}

if (!$user_id){
    $data = array(
        'error' => 'You are not logged in!'
    );
} else {

    include_once 'db.php'; //database connection

    try {
        $stmt = $conn->prepare("SELECT * FROM gallery_image"); //SELECT statement
        $stmt->execute(); //stmt run
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //get all data
        $data = $result; //stmt result

    } catch (PDOException $e){
        $data = array(
            'error' => 'Error: ' . $e->getMessage()
        );
    }

}

echo json_encode($data, JSON_UNESCAPED_UNICODE);