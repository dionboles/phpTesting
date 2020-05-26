<?php
    $servername = 'localhost';
    $username = '';
    $password ='';
    $db = 'family';
    $conn = new mysqli($servername,$username,$password,$db);

    if($conn -> connect_error){
        die("Connection failed".$conn -> connect_error);
    }
?>
