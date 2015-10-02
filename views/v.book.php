<?php

$me->setTitle("Усі книги: ".$me->params['bkey']);
$me->setActiveMenu("counters");
$me->decollapseLeftMenu("counters.act");
$me->addBreadsItem(array('href'=>'/index.php/all','title'=>"Усі книги"));
$me->addBreadsItem(array('href'=>'#','title'=>$me->params['bkey']));

?>