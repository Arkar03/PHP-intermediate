<?php

class One
{
    public function className()
    {
        return __CLASS__;
    }

    public function getClassName()
    {
        echo static::className(); //lateBinding using static keyword
    }
}

class Two extends One {
    public function className()
    {
       return __CLASS__;
    }
}

$one = new One();
echo "<hr>";
$two = new Two(); 