<?php
function sanitizeFormPassword($input_Text){
    return strip_tags($input_Text);
}
function sanitizeFormUsername($input_Text){
    return str_replace(" ","",strip_tags($input_Text));
}
function sanitizeFormString($input_Text){
    return ucfirst(str_replace(" ","",strtolower($input_Text)));
}

 if(isset($_POST['loginButton'])){
    echo("Login in put was pushed");
 }
 if(isset($_POST['registerButton'])){
    $username = sanitizeFormUsername($_POST['username']);
    $firstname = sanitizeFormString($_POST['firstname']);
    $lastname = sanitizeFormString($_POST['lastname']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);
    
     $wasSuccessful = $account -> regester($username,$firstname,$lastname,$email,$email2,$password,$password2);
        if($wasSuccessful == true){
            header("location index.php");
        }
    }
?>