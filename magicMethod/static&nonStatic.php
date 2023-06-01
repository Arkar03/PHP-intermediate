<?php

class Index
{
    public static $count = 0;

    public function showMe()
    {
        self::doIt();
    }
    public static function doIt()
    {
        echo "Har Har";
    }
}

$index = new Index;
echo $index->showMe();