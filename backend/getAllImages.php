<?php

    include_once 'db.php';

    try {
        $stmt = $conn->prepare("SELECT * FROM gallery_image");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = $result;

    } catch (PDOException $e){
        $data = array(
            'error' => 'Error: ' . $e->getMessage()
        );
    }


echo json_encode($data, JSON_UNESCAPED_UNICODE);