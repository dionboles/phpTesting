<?php 
$servername = "127.0.0.1";
$username = "";
$password = "";
$dbname = "blog";
$port = "8888";
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

