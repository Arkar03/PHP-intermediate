<?php 
require_once "autoload/Loader.php";

class Hello {
    public function __construct($name)
    {   
        Loader::load("Helper");
        $helper = new Helper($name);
        $helper->sayYourName();
    }
}