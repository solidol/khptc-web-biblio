<?php

switch ($me->params['ckey']){
    case "gas": 
        $s1 = "Расход газа";        break;
    case "water": 
        $s1 = "Расход воды";        break;
    case "el": 
        $s1 = "Расход электроэнергии";        break;
    default : $s1 ="0011" ;        break;
}

$me->setTitle($s1);

$me->setActiveMenu("charts");
$me->decollapseLeftMenu("charts.act");
$thecounter->changeRole($me->params['ckey']);
//$chdata = json_encode($thecounter->getChartCounts(false));
$chdata = json_encode($thecounter->getChartsDiff(false));
$chlabel = json_encode($thecounter->getChartCounts(true));
$me->addBreadsItem(array('href'=>'#','title'=>$s1));
?>