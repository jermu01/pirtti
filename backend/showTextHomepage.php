<?php
    include_once 'db.php'; //database connection

    try {
        $stmt = $conn->prepare("SELECT text FROM edit_websites WHERE id = 1;"); //SELECT statement
        $stmt->execute(); //run stmt
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = $result[0]["text"]; //get text value

    } catch (PDOException $e){
        $data = "<h1>Ei sisältöä!</h1>";
    }


echo $data;