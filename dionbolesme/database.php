<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "blog";
$port = "8889";
try{
    $conn = new PDO("mysql:host=".$servername.";dbname=".$dbname.";port=".$port.";", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    $error = array(
        'item' => array(
            "error" => $e,
            "msg" => 'Database error'
        )
    );
    echo (json_encode($error));
    exit();
}

