<?php
date_default_timezone_set('America/New_York');

require '../vendor/autoload.php';

use Slim\Http\Request;
use Slim\Http\Response;

$container = include "../Skeleton/Config/app.config.php";

$app = new Slim\App(
    new \Slim\Container($container)
);

session_name($container['settings']['session_name']);
session_start();

$app->get('/', function (
    Request $request,
    Response $response,
    $args) {

    return $response->write("Ready To Go");

});

$app->run();
