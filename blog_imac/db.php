<?php
    try {
        $port = 8889;
        $host = "127.0.0.1";
        $database = "cms";
        $db = new PDO("mysql:host=$host; dbname=$database; port=".$port,'root',"root");
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
?>