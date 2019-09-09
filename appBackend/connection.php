<?php
$servername = "127.0.0.1";
$username = "dion";
$password = "test";
$dbname = "testingApp";
$port = "8889";
try{
    $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname.";port=".$port.";", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    print_r($e);
    exit("<h1>Database error.</h1>");
}

