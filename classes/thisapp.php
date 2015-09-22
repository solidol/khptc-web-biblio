<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of thisapp
 *
 * @author Виктор
 */
class thisapp {
    public $role;
    public $title;
    public $kw;
    public $content;
    public $m = array();
    public $siteurl;
    public $name;
    public $params = array();
    public $breads = array();
    public $view;
    public $tmpl;

    public function __construct($role=false) {
        $this->siteurl="http://test1.ru";
        ($role)?$this->role=$role:$this->role="common";
        $this->title="";
        $this->name="<span>ХПТК ОНПУ </span> Онлай-бібліотека";
        $this->setActiveMenu("main");
        $this->flushBreads();
    }
    
    public function setBreads($items){
        $this->flushBreads();
        $this->breads = $items;
    }
    
    public function addBreadsItem($item){
        $this->breads[] = $item;
    }
    
    private function flushBreads(){
        $this->breads = array();
    }
    
    public function getBread($liClass = false){
        ?>
        <li>
            <a href="<?=$this->siteurl?>/index.php/">
                <span class="glyphicon glyphicon-home"></span>
            </a>
        </li>
        <?php
        foreach ($this->breads as $bItem){
            ?>
        <li>
            <a href="<?=$bItem['href']?>">
                <span class="active"><?=$bItem['title']?></span>
            </a>
        </li>        
            <?php
        }
        return true;
    }
    
    public function setTitle($newTit){
        $this->title=$newTit;
    }
    
    public function setKwrds($newKw){
        $this->kw=$newKw;
    }    
    //put your code here
    private function flushLeftMenu(){
        $this->m["leftmenu"]=array();
    }
    
    public function setActiveMenu($mKey){
        $this->flushLeftMenu();
        $this->m["leftmenu"][$mKey]="active";
    }
    
    public function decollapseLeftMenu($item){
        $this->m["leftmenu"][$item]="in";
    }
    //put your code here
}
