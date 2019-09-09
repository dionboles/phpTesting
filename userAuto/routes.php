<?php

$app -> get("/",function($request,$response){
    return $this->view->render($response, 'home.twig');
});
$app -> get("/admin/signup",function($request,$response){
    return $this->view->render($response, 'signup.twig');
});
$app->post("/admin/signup",function($request,$response){
    return $request;
});
$app->get('/users','getUsers');
