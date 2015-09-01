<?php

switch ($me->params['ckey']){
    case "gas": 
        $s1 = "Показания счетчика газа";        break;
    case "water": 
        $s1 = "Показания счетчиков воды";        break;
    case "electro": 
        $s1 = "Показания электросчетчика";        break;
    default : $s1 ="0011" ;        break;
}

$me->setTitle($s1);
$me->setActiveMenu("counters");
$me->decollapseLeftMenu("counters.act");
$me->addBreadsItem(array('href'=>'#','title'=>$s1));
$thecounter->changeRole($me->params['ckey']);
?>