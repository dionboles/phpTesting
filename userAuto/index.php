<?php

require 'vendor/autoload.php';
require './actions.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

$container = $app->getContainer();

$container['view'] = function($container){
    $view = new \Slim\Views\Twig("./views",[
        'cache' => false,
    ]);
    $view -> addExtension(new \Slim\Views\TwigExtension(
        $container-> router,
        $container-> request -> getUri()
    ));
    return $view;
};
require "./routes.php";

$app->run();