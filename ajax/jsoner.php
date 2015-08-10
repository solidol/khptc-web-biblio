<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../global/global.php';

$app = new Silex\Application();

$app->get("/q/{skey}", function ($skey){
global $theBook;
print $theBook->getListBooks("", true);
    return true;
});



$app->run();