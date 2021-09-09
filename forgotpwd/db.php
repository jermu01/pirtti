<?php
$dBservername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "pirtti_db";


$conn = mysqli_connect($dBservername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
