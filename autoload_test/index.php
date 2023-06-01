<?php
require_once "autoload/Loader.php";

class Index
{
    public function __construct()
    {   
        Loader::load('hello/Hello');
        $hello = new Hello("arkar");
        
    }
}

$ind = new Index;

