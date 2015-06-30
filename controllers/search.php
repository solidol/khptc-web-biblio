<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->post("/search", function () use ($app){
        
    
    include_once __DIR__.'/../views/view.searched.php';
    return "";
});

$app->get("/search", function (){

require_once __DIR__.'/../views/view.search.php';
    return "";
});

$app->run();