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
    public $title;
    public $kw;
    public $content;
    public $htmlClasses = array();
    public $siteUrl;
    public function __construct() {
        $this->title="";
        
    }
    
    public function setTitle($newTit){
        $this->title=$newTit;
    }
    
    public function setKwrds($newKw){
        $this->kw=$newKw;
    }    
    //put your code here
}
