<?php

//database information
$servername = "localhost";
$db_username = "pkpirtti_user";
$db_password = "foFIKEW{Y-}8";
$database = "pkpirtti_pirtti_db";

//testing
// $servername = "localhost";
// $db_username = "root";
// $db_password = "";
// $database = "pirtti";

$url = "https://localhost/pirtti/backend/"; //mail url

//database connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}