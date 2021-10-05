<?php

// if there isnt not username & password
if (!isset($_POST['username']) || !isset($_POST['password'])){
    $data = array(
        'error' => 'POST-dataa ei saatavilla!'
    );
    die();
}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email = $_POST['email'];

include_once 'db.php'; //database connection

try {
    $stmt = $conn->prepare("INSERT INTO admin_user (username, password, email) VALUES (:username, :password, :email);"); //INSERT statement
    $stmt->bindParam(':username', $username); //bindParam variable
    $stmt->bindParam(':password', $password); //bindParam variable
    $stmt->bindParam(':email', $email); //bindParam variable
    
    //run stmt
    if($stmt->execute() == false){
        $data = array(
            'error' => 'Tapahtui joku virhe tallennuksessa!'
        );
    } else {
        $data = array(
            'success' => 'Uusi käyttäjä on tallennettu!'
        );
    }

} catch (PDOException $e) {
    $data = array(
        'error' => 'Tapahtui joku virhe!!'
    );
}

header("Content-type: application/json;charset=utf-8");
echo json_encode($data);