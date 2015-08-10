<?php
require_once __DIR__.'/../classes/Book.php';
require_once __DIR__.'/../classes/thisapp.php';
require_once __DIR__.'/../classes/ssp.class.php';

$DB = array(
    'dbhost' => 'localhost',
    'dbname' => 'biblio',
    'user' => 'root',
    'password' => ''
    );
$DBc = mysql_connect($DB['dbhost'], $DB['user'], $DB['password']) or die(mysql_error());
mysql_select_db($DB['dbname']) or die(mysql_error());

$theBook = new Book();
$Me = new thisapp();
?>