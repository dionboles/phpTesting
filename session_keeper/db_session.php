<?php

    function openSession(){
        global $conn;
        try{
            $dbhost = 'localhost';
            $dbname='session_keeper';
            $dbuser = 'root';
            $dbpass = 'root';
            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
            return true;
        }catch(PDOException $e){
            echo("Error!:{$e->getMessage()}<br/>");
           return false;
        }
    }
     function closeSession(){
         global $conn;
         $conn = NULL;
         return true;

    }
     function readSession($id){
         global $conn;
         $stmt = $conn -> prepare("SELECT * FROM session_keeper id=?");
         $stmt->execute([$id]);
         if($stmt->rowCount() > 0){
             return $stmt -> fetch();
         }else{
             return '';
         }


    }
     function writeSession(){

    }
     function destorySession(){

    }
     function cleanSession(){

    }
    // session_set_save_handler('openSession','closeSession','readSession','writeSession','destorySession','cleanSession');
    // session_start();


    echo openSession();