<?php

include_once 'db.php'; //database connection

//Post-data
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

try {
    $stmt = $conn->prepare("SELECT email FROM admin_user WHERE email = :email"); //SELECT statement
    $stmt->bindParam(':email', $email); //bindParam variable

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
    $stmt = $conn->prepare("UPDATE admin_user SET password = :password WHERE email = :email;"); //UPDATE statement
    $stmt->bindParam(':password', $password); //bindParam variable
    $stmt->bindParam(':email', $email); //bindParam variable

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