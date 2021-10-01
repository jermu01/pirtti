<?php
    include_once 'db.php';

    try {
        $stmt = $conn->prepare("SELECT text FROM edit_websites WHERE id = 3;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = $result[0]["text"];

    } catch (PDOException $e){
        $data = "<h1>Ei sisältöä!</h1>";
    }


echo $data;