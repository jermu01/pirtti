<?php

session_start(); //session start

// if there isnt not username & password
if (!isset($_POST['username']) || !isset($_POST['password'])){
    $data = array(
        'error' => 'POST-dataa ei saatavilla!'
    );
    die(); //end
}

$username = $_POST['username'];
$password = $_POST['password'];

include_once 'db.php'; //database connection

try {
    $stmt = $conn->prepare("SELECT id, username, password FROM admin_user WHERE username = :username"); //SELECT statement
    $stmt->bindParam(':username', $username); //bindParam variable

    //run stmt
    if($stmt->execute() == false){
        $data = array(
            'error' => 'Tapahtui joku virhe!'
        );
    } else {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //check if password is right
        if (password_verify($password, $result['password'])) {
            $data = array(
                'success' => 'Kirjautuminen onnistui!'
            );

            $_SESSION['logged_in'] = true; //make you logged in
            $_SESSION['user_id'] = $result['id']; //id
            $_SESSION['username'] = $result['username']; //username

        } else {
            $data = array(
                'error' => 'Salasana on väärä!'
            );
        }
    }
} catch (PDOException $e) {
    $data = array(
        'error' => 'Tapahtui joku virhe!!'
    );
}

header("Content-type: application/json;charset=utf-8");
echo json_encode($data);