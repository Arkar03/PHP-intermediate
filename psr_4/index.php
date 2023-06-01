<?php

require_once "vendor/autoload.php";

use app\controller\base;

class index
{
    public function __construct()
    {
        $base = new base();
        $base->sayBaseName();
    }
}

new index();