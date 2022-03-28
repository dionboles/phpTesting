<?php
require("./vendor/autoload.php");

$app = new \Slim\Slim();
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
$port = $_ENV["port"];
$host = $_ENV["host"];
$database = $_ENV["database"];
$dbusername = $_ENV['password']; 

$app->container->singleton("db",function(){
    return new PDO("mysql:host=$host; dbname=$database; port=".$port,$dbusername,$dbpassword);
});

