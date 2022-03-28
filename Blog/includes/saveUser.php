<?php 
        $username = $_POST["username"];
        $email = $_POST["email"];
        $username = strip_tags($username);
        $password = $_POST["username"];
        $password = strip_tags($password);
        if(count($password) >= 8){
            $hash = password_hash($password, PASSWORD_ARGON2I);
            include("./connection.php");

            $stmt = $conn->prepare("INSERT INTO user(username,email,password VALUES(:username,:email,:password)");
            $stmt -> execute(['username'=>$username,'email' => $email,'password' => $password]);
            echo(json_encode("Sign up complete"));
            die();
        }else{
            echo(json_encode("Password is to short"));
            die();
        }
       
  
    

