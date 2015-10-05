<?php
//Set Locale
date_default_timezone_set('America/New_York');

require '../vendor/autoload.php';

//Import Objects for Routes
use Skeleton\Controller\DefaultController;


//Include App Config
$container = include "../Skeleton/Config/app.config.php";

$app = new Slim\App(
    new \Slim\Container($container)
);

//Start Session
session_name($container['settings']['session_name']);
session_start();

//Default Route
$app->get('/', DefaultController::class.":index");

//Run App
$app->run();
