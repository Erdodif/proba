<?php
require "../../vendor/autoload.php";

use Illuminate\Database\Capsule\Manager;
use Slim\Factory\AppFactory;

$app = AppFactory::create();
$config = require "../res/config.php";

$dbManager = new Manager();
$dbManager->addConnection([
    "driver" => "mysql",
    "host" => DB_HOST,
    "database" => DB_DATABASE,
    "username" => DB_USER,
    "password" => DB_PASS,
    "charset" => "utf8mb4",
    "collation" => "utf8mb4_unicode_ci",
    "prefix" => "",
]);

$dbManager->setAsGlobal();
$dbManager->bootEloquent();


$routes = require '../src/routes.php';
$routes($app);

$app->run();