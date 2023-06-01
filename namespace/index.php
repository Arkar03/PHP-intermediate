<?php
require_once "app/Home.php";
class index
{
    public function __construct()
    {
        $home = new Home();
        $home->sayHomeName();
    }
}
