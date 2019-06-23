<?php

session_start();

require __DIR__ .'/vendor/autoload.php';

$app  = new \Slim\App();

// Dependencie;

// Route;
require __DIR__.'/App/Route.php';

$app->run();