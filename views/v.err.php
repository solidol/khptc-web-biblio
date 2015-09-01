<?php
switch ($me->params['err']){
    case "e404": 
        $s1 = "Страница не найдена";        break;
    case "e403": 
        $s1 = "Ниатдам";        break;
    default : $s1 ="Да хрен его знает что тут не так" ;        break;
}

$me->setTitle($s1);
$me->setActiveMenu("main");
$me->addBreadsItem(array('href'=>'#','title'=>$s1));

?>