<?php
session_start(); //session start
session_destroy(); //session breaking
unset($_SESSION); //session end
header('location: login.php'); //location login.php page
?>