<?php 
    require_once 'core/init.php';
    $user = DB::getInstance()->get('users');
    if($user->error()){
        echo("failed");
    }else{
        echo("did");
    }