<?php
require_once "vendor/autoload.php";

use Slim\Slim;

$app = new Slim();
$app->config('debug', false);

// Routes;
require_once "Route.php";

$app->run();
