<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get("/search", function (){

require_once __DIR__.'/views/view.search.php';
    return "";
});

$app->get("", function (){


require_once __DIR__.'/views/view.start.php';
    return "";
});
    
    
$app->post("/search", function () use ($app){
    $request = $app['request'];
        print $out=$request->get('searchbook');// put your code here
    include_once __DIR__.'/views/view.searched.php';
    return "";
});   
 


$app->run();