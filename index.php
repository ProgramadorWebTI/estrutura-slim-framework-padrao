<?php
require_once "vendor/autoload.php";

use Slim\Slim;

$app = new Slim();
$app->config('debug', true);

// Routes;
require_once "Route.php";

$app->run();
