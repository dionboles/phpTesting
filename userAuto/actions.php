<?php
function getUsers(){
    $sql = "select * from users";
    try {
        $db = getConnection();
        $stmt = $db -> query($sql);
        $Users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $db = null;
        echo ('{"Users:'. json_encode($Users).'
        }');
    } catch (PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}


// Run app

function getConnection() {
    $servername = "127.0.0.1";
    $username = "dion";
    $password = "test";
    $dbname="blog";
    $port = "8889";
    $dbh = new PDO("mysql:host=".$servername.";dbname=".$dbname.";port=".$port.";", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}