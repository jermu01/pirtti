<?php

include_once 'db.php'; //database connection

//Post-data
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

try {
    $stmt = $conn->prepare("SELECT username FROM admin_user WHERE username = :username"); //SELECT statement
    $stmt->bindParam(':username', $username); //bindParam variable

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


try {
    $stmt = $conn->prepare("UPDATE admin_user SET password = :password WHERE username = :username;"); //UPDATE statement
    $stmt->bindParam(':password', $password); //bindParam variable
    $stmt->bindParam(':username', $username); //bindParam variable

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