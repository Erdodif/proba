<?php

use Petrik\Proba\Quiz;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require "../../vendor/autoload.php";
require "config.php";

return function(Slim\App $app){
    $app->get("/quizes",function(Request $req, Response $res){
        $kvizek = Quiz::all();
        $out = $kvizek->toJson();
        $res->getBody()->write($out);
        return $res->getHeader("Content-Type","application/json");
    });
};