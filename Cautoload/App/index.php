<?php 

require_once "../vendor/autoload.php";
class Index {
    public function __construct()
    {
        $start = new Start();
        $start->sayStartName();
    }
}

new Index();