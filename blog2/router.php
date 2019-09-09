<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

switch ($request_uri[0]) {
    case '/' :
        require __DIR__ . '/views/home.php';
        break;
    case "/saveUser":
        require __DIR__ . '/views/saveUser.php';
        break;
    case '/sign' :
        require __DIR__ . '/views/createuser.php';
        break;
    default: 
        require __DIR__ . '/views/404.php';
        break;
}
?>

