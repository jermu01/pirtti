<?php
    include_once 'db.php'; //database connection

    try {
        $stmt = $conn->prepare("SELECT text FROM edit_websites WHERE id = 2;"); //SELECT statement
        $stmt->execute(); //run stmt
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //get all data
        $data = $result[0]["text"]; //display text

    } catch (PDOException $e){
        $data = "<h1>Ei sisältöä!</h1>";
    }


echo $data;