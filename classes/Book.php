<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Book
 *
 * @author Виктор
 */
class Book {
    //put your code here
    public $book_id;
    public $blank_id;
    public $sql;
    public $author;
    public $bname;
    public $year;
    public $annotation;
    public $img;
    public $fileurl;
    public function __construct($book = false){

        if (isset($book) and is_numeric($book)) 
            $this->initBook($book);
        else
            $this->initBook(1);
        return true;
        
    }
    
    
    public function initBook($book){
        if (!isset($book) or !  is_numeric($book)) return false;
        $this->book_id = $book;
        $this->sql="SELECT * FROM e_knigi_utf8 WHERE kod = ".$this->book_id;
        $result = mysql_query($this->sql) or die(mysql_error());
        while ($arResult[] = mysql_fetch_array($result)){}
        $this->author = $arResult[0]['avtor'];
        $this->bname = $arResult[0]['nazva'];
        $this->year = $arResult[0]['god_izd'];
        $this->annotation = $arResult[0]['annotation'];
        $this->img = ( !in_array($arResult[0]['titul'], array(null,"")))?
                $arResult[0]['titul']:null;
        $this->fileurl = $arResult[0]['file'];
        return $this->book_id;
    }
    
        
    public function initBook2($book){
        if (!isset($book) or !  is_numeric($book)) return false;
        $this->book_id = $book;
        $this->sql="SELECT blank FROM bib_book WHERE book_id = ".$this->book_id;
        $result = mysql_query($this->sql) or die(mysql_error());
        while ($arResult[] = mysql_fetch_array($result)){}
        $this->blank_id = $arResult[0];
        return $this->book_id;
    }

    public function getInfoAboutBook($json = false, $book = false){
        if (!isset($book) or !is_numeric($book)) $book =  $this->book_id;
        $this->sql = "SELECT * FROM e_knigi WHERE kod = ".$this->book_id;
        $result = mysql_query($this->sql);
        while ($arResult[] = mysql_fetch_assoc($result)){}
        if ($json == true) 
            return json_encode($arResult);
        else
            return $arResult;
        
    }    
    
    public function getInfoAboutBook2($json = false, $book = false){
        if (!isset($book) or !is_numeric($book)) $book =  $this->book_id;
        $this->sql = "SELECT * FROM list_book WHERE book_id = ".$this->book_id;
        $result = mysql_query($this->sql);
        while ($arResult[] = mysql_fetch_assoc($result)){}
        if ($json == true) 
            return json_encode($arResult);
        else
            return $arResult;
        
    }
    
    public function getListBooks($filter, $json = false){
        //$this->sql = "SELECT * FROM list_books ".(isset($filter))?"WHERE ".$filter:"";
        $this->sql = "SELECT * FROM e_knigi ";
        $result = mysql_query($this->sql) or die(mysql_error());
        while ($arResult[] = mysql_fetch_assoc($result)){}
        if ($json == true) 
            return json_encode($arResult);
        else
            return $arResult;
    }

}