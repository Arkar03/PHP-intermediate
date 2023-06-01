<?php
class staticKeyword
{

    private static $count = 0;

    public function getCount()
    {
        self::$count++;
        echo self::$count . "<br>";
    }
}

$obj1 = new staticKeyword;
$obj1->getCount();
$obj1->getCount();
$obj1->getCount();
echo "<hr>";
$obj2 = new staticKeyword;
$obj2->getCount();
$obj2->getCount();

