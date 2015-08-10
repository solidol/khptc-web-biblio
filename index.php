<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/global/global.php';

$app = new Silex\Application();


$app->get("", function (){
$view = __DIR__.'/views/view.start.php';

require_once __DIR__.'/templates/header.php';
require_once __DIR__.'/views/view.start.php';
    return "";
});
    
    
$app->post("/search", function () use ($app){
    $request = $app['request'];
        print $out=$request->get('searchbook');// put your code here
    include_once __DIR__.'/views/view.searched.php';
    return "";
});   
 
$app->get("/all", function (){
$view = __DIR__.'/views/view.all.php';
require_once __DIR__.'/views/tmpl.common.php';
    return "";
});

$app->get("/advsearch", function (){
$view = __DIR__.'/views/view.search.php';
require_once __DIR__.'/views/tmpl.common.php';
    return "";
});

$app->run();
require_once __DIR__.'/templates/footer.php';