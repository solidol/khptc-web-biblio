<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/global/global.php';

$app = new Silex\Application();


$me->tmpl = "";
$me->view = "";



$app->get("", function (){
global $me,$tmpl,$view;
$me->view = __DIR__.'/views/v.startpage.php';
$me->tmpl = __DIR__.'/templates/t.startpage.php';

    return "";
});
    
    
$app->post("/search", function () use ($app){
global $me,$tmpl,$view;
    $request = $app['request'];
$me->view = __DIR__.'/views/v.search.php';
$me->tmpl = __DIR__.'/templates/t.search.php';
    return "";
});   
 
$app->get("/categories:{ckey}", function ($ckey){
global $me,$tmpl,$view;
$me->params["ckey"]=$ckey;
$me->view = __DIR__.'/views/v.counters.php';
$me->tmpl = __DIR__.'/templates/t.counters.php';

    return "";
})
->assert('ckey', 'gas|water|electro')
->value('ckey', 'gas');

$app->get("/charts:{ckey}", function ($ckey){
global $me,$tmpl,$view;
$me->params["ckey"]=$ckey;
$me->view = __DIR__.'/views/v.charts.php';
$me->tmpl = __DIR__.'/templates/t.charts.php';

    return "";
})
->assert('ckey', 'gas|water|electro')
->value('ckey', 'gas');

$app->get("/docs:{ckey}", function ($ckey){
global $me,$tmpl,$view;
$me->params["ckey"]=$ckey;
$me->view = __DIR__.'/views/v.counters.php';
$me->tmpl = __DIR__.'/templates/t.counters.php';

    return "";
});



$app->error(function (\Exception $e, $code) {
    global $me,$tmpl,$view;
    switch ($code) {
        case 403:
            $me->params["err"]="e403";
            $me->view = __DIR__.'/views/v.err.php';
            $me->tmpl = __DIR__.'/templates/t.err.php';
            break;
        case 404:
            $me->params["err"]="e404";
            $me->view = __DIR__.'/views/v.err.php';
            $me->tmpl = __DIR__.'/templates/t.err.php';
            break;
        default:
            $me->params["err"]="hz";
            $me->view = __DIR__.'/views/v.err.php';
            $me->tmpl = __DIR__.'/templates/t.err.php';
    }

    return "";
});

$app->before(function() {
global $me,$tmpl,$view;

});
$app->finish(function (){
global $me,$tmpl,$view;

});

$app->run();

require_once $me->view;
require_once __DIR__.'/templates/t.common.php';