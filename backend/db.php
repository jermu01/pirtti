<?php

//database information
$servername = "localhost";
$username = "pkpirtti_user";
$password = "foFIKEW{Y-}8";
$database = "pkpirtti_pirtti_db";

$url = "https://localhost/pirtti/backend/"; //mail url

//database connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}