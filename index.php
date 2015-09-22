<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/global/global.php';

$app = new Silex\Application();

$theBook = "";
$me->tmpl = "";
$me->view = "";



$app->get("", function (){
global $me,$tmpl,$view;
$me->view = __DIR__.'/views/v.startpage.php';
$me->tmpl = __DIR__.'/templates/t.startpage.php';

    return "";
});

$app->get("/all", function (){
global $me,$tmpl,$view;
$me->view = __DIR__.'/views/v.all.php';
$me->tmpl = __DIR__.'/templates/t.all.php';
    return "";
});

$app->get("/book:{bkey}", function ($bkey){
global $me,$tmpl,$view,$theBook;
$theBook = new Book($bkey);
$me->params["bkey"]=$bkey;
$me->view = __DIR__.'/views/v.book.php';
$me->tmpl = __DIR__.'/templates/t.book.php';
    return "";
});

$app->get("/advsearch", function (){
global $me,$tmpl,$view;
$me->view = __DIR__.'/views/v.advsearch.php';
$me->tmpl = __DIR__.'/templates/t.advsearch.php';
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
$me->view = __DIR__.'/views/v.categories.php';
$me->tmpl = __DIR__.'/templates/t.categories.php';

    return "";
})
->assert('ckey', 'none')
->value('ckey', 'none');

$app->get("/charts:{ckey}", function ($ckey){
global $me,$tmpl,$view;
$me->params["ckey"]=$ckey;
$me->view = __DIR__.'/views/v.charts.php';
$me->tmpl = __DIR__.'/templates/t.charts.php';

    return "";
})
->assert('ckey', 'none')
->value('ckey', 'none');

$app->get("/docs:{ckey}", function ($ckey){
global $me,$tmpl,$view;
$me->params["ckey"]=$ckey;
$me->view = __DIR__.'/views/v.docs.php';
$me->tmpl = __DIR__.'/templates/t.docs.php';

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