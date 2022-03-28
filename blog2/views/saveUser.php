<?php
include("./classes/database.php");
if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    DB::query('INSERT INTO users VALUES (username,password,email)', array('username' => $username, 'password' => $password, 'email' => $email));
    echo("did it");
    
}
?>